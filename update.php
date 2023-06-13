<?php
include "php/conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "UPDATE `cadastros_parceiro` SET `nome`='$nome',`cpf`='$cpf',`email`='$email',`senha`='$senha' WHERE cpf = '$cpf'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_affected_rows($conn) > 0) {
            echo "sucesso";
        } else {
            echo "Nenhum registro foi atualizado.";
        }
    } else {
        echo "Erro na execução do update: " . mysqli_error($conn);
    }
}
?>
