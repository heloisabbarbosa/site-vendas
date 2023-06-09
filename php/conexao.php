<?php
   // Informações de conexão
   $host = 'localhost';
   $dbname = 'vendas';
   $username = 'root';
   $password = '';
  
   

   // Cria uma conexão com o banco de dados
   $conn = new mysqli($host, $username, $password, $dbname);

   // Verifica se ocorreu algum erro na conexão
   if ($conn->connect_error) {
      die("Erro na conexão com o banco de dados: " . $conn->connect_error);
   }
?>