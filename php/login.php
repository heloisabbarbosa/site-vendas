<?php

include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario = $_POST["formulario"];

    if ($formulario == "login") {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Consulta SQL para verificar se o usuário existe no banco de dados
        $sql = "SELECT * FROM cadastros_parceiro WHERE email = '$email' AND senha = '$senha'";
        $result = $conn->query($sql);

        // Verifica se a consulta retornou algum resultado
        if ($result->num_rows > 0) {
            // Usuário autenticado com sucesso
            echo "login realizado com sucesso";
            header("Location: ../profile.html");
            exit();
        } else {
            // Usuário não encontrado ou senha incorreta
           echo "Email ou senha inválidos.";
        }
       
    

    } else if ($formulario == "cadastro") {

        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];

        $sql_read = "INSERT INTO cadastros_parceiro(nome, cpf, email, senha) VALUES ('$nome','$cpf','$email','$senha')";
        $stmt = mysqli_prepare($conn, $sql_read);
        mysqli_stmt_execute($stmt);
        
        echo "CADASTRO REALIZADO COM SUCESSO";

    }
}