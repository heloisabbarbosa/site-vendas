<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario = $_POST["formulario"];

    if ($formulario == "login") {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Consulta SQL para verificar se o usuário existe no banco de dados
        $sql = "SELECT * FROM cadastros_parceiro WHERE email = '$email' AND senha = '$senha'";
        $result = mysqli_query($conn, $sql);

        // Verifica se a consulta retornou algum resultado
        if (mysqli_num_rows($result) > 0) {
            // Usuário autenticado com sucesso
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            echo "success";
        } else {
            // Usuário não encontrado ou senha incorreta
           echo "Email ou senha inválidos.";
        }
    } else if ($formulario == "cadastro") {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];

        $sql = "SELECT * FROM cadastros_parceiro WHERE cpf = '$cpf' AND email = '$email'";
        $result = mysqli_query($conn, $sql);

        // Verifica se a consulta retornou algum resultado
        if (mysqli_num_rows($result) > 0) {
            // Usuário já cadastrado
            echo "E-MAIL OU CPF JÁ CADASTRADO";
        } else {
            $sql_insert = "INSERT INTO cadastros_parceiro(nome, cpf, email, senha) VALUES ('$nome','$cpf','$email','$senha')";
            $result_insert = mysqli_query($conn, $sql_insert);
            
            if ($result_insert) {
                echo "CADASTRO REALIZADO COM SUCESSO";
            } else {
                echo "Erro ao cadastrar.";
            }
        }
    }
}
?>
