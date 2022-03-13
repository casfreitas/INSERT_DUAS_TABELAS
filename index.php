<?php
session_start(); // INICIAR A SESSÃO
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Celke - Cadastrar em duas tabelas</title>
</head>

<body>
  <h1>Cadastrar Usuário</h1>

  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  ?>

  <form method="POST" action="processa.php">
    <h3>Dados básicos</h3>
    <label for="">Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Nome do usuário"><br><br>

    <label for="">E-mail:</label>
    <input type="email" name="email" id="email" placeholder="E-mail do usuário"><br><br>

    <h3>Endereço do básicos</h3>
    <label for="">Logradouro:</label>
    <input type="text" name="logradouro" id="logradouro" placeholder="Endereço do usuário, ex: Rua, avenida"><br><br>

    <label for="">Número:</label>
    <input type="text" name="numero" id="numero" placeholder="Número endereço"><br><br>

    <input type="submit" value="Cadastrar" name="CadUsuario">
  </form>

</body>

</html>