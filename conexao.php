<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port = 3306;

try {
  // CONEXÃO COM A PORTA
  $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

  // CONEXÃO SEM A PORTA
  // $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

  echo "Conexão com banco de dados realizado com sucesso!";
} catch (PDOException $err) {
  echo "Erro: Conexão com banco de dados não foi realizada com sucesso! Erro gerado " . $err->getMessage();
}
