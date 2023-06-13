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
            // Verifica se o e-mail está cadastrado
            $sql_check_email = "SELECT * FROM cadastros_parceiro WHERE email = '$email'";
            $result_check_email = mysqli_query($conn, $sql_check_email);

            // Verifica se o e-mail está cadastrado
            $sql_check_senha = "SELECT * FROM cadastros_parceiro WHERE senha = '$senha'";
            $result_check_senha = mysqli_query($conn, $sql_check_senha);

            if (mysqli_num_rows($result_check_email) == 0) {
                // E-mail não cadastrado
                echo "E-MAIL NÃO CADASTRADO";
            } elseif (mysqli_num_rows($result_check_senha) == 0) {
                // Senha incorreta
                echo "SENHA INCORRETA";
            }
        }

    } else if ($formulario == "cadastro") {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];

        // Verificar se o e-mail e o CPF já estão cadastrados
        $sql_check = "SELECT * FROM cadastros_parceiro WHERE email = '$email' OR cpf = '$cpf'";
        $result_check = mysqli_query($conn, $sql_check);

        if (mysqli_num_rows($result_check) > 0) {
            while ($row = mysqli_fetch_assoc($result_check)) {
                if ($row['email'] == $email) {
                    // E-mail já cadastrado
                    echo "E-MAIL JÁ CADASTRADO";
                    break;
                }
                if ($row['cpf'] == $cpf) {
                    // CPF já cadastrado
                    echo "CPF JÁ CADASTRADO";
                    break;
                }
            }
        } else {
            // Realizar o cadastro
            $sql_insert = "INSERT INTO cadastros_parceiro (nome, cpf, email, senha) VALUES ('$nome', '$cpf', '$email', '$senha')";
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
