<?php

// Conectar ao BD
include ("conexao.php");

// receber os dados do formulário
$nome = $_POST['username'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


//cadastra no banco
$sql = "UPDATE usuario SET 
      email = '$email', nome = '$nome', telefone = '$telefone', senha = '$senha',  WHERE matricula = $matricula";


if (mysqli_query($conexao, $sql))
  echo "Arquivo enviado com sucesso!";
else
  echo "Falha ao enviar arquivo.";

header('location: index.php');

