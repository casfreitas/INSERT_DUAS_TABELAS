<?php
session_start(); // INICIAR A SESSÃO
ob_start(); // LIMPAR O BUFFER DE SAIDA

include_once "conexao.php"; // INCLUIR A CONEXÃO COM BD

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); //RECEBE OS DADOS DO FORMULÁRIO

if (!empty($dados['CadUsuario'])) { // VERIFICA SE O USUÁRIO CLICOU NO BOTÃO
  $query_usuario = "INSERT INTO usuarios
                    (nome, email) VALUES
                    (:nome, :email)";
  $cad_usuario = $conn->prepare($query_usuario);
  $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
  $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
  $cad_usuario->execute();
  $id_usuario = $conn->lastInsertid(); // RECUPERA O ÚLTIMO ID INSERIDO

  $query_endereco = "INSERT INTO enderecos
                    (logradouro, numero, usuario_id) VALUES
                    (:logradouro, :numero, :usuario_id)";
  $cad_endereco = $conn->prepare($query_endereco);
  $cad_endereco->bindParam(':logradouro', $dados['logradouro'], PDO::PARAM_STR);
  $cad_endereco->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
  $cad_endereco->bindParam(':usuario_id', $id_usuario, PDO::PARAM_INT);
  $cad_endereco->execute();

  // CLIAR A VARIAL GLOBAL PARA SALVAR A MENSAGEM DE SECESSO
  $_SESSION['msg'] = "<p style='color: green';>Usuário cadastrado com sucesso!</p>";

  //REDIRECIONA O USUÁRIO
  header("Location: index.php");
} else {
  // CLIAR A VARIAL GLOBAL PARA SALVAR A MENSAGEM DE ERRO
  $_SESSION['msg'] = "<p style='color: #f00';>Erro: Usuário não cadastrado com sucesso!</p>";

  //REDIRECIONA O USUÁRIO
  header("Location: index.php");
}
