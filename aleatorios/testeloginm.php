<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
   <link rel="shortcut icon" href="img/img/icon.png">
   <title>LOGIN</title>
</head>
<body>

</body>
</html>

<?php
session_start();

// Verifique se o formulário foi enviado e se os campos CPF e senha estão preenchidos
if (empty($_GET['CPF']) or empty($_GET['senha'])) {
   echo "<script>alert('Por favor, preencha todos os campos.');</script>";
   exit; // Termina o script se as informações não estiverem completas
}

require_once "conexao.php";
$conexao = conn();

$CPF = $_GET['CPF'];
$senha = $_GET['senha'];
$sql = "SELECT * FROM usuario WHERE CPF = '{$CPF}' AND senha = '{$senha}'";

$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);

$res = $conexao->query($sql) or die($conexao->error);
$row = $res->fetch_object();
$qtd = $res->num_rows;

echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

if ($qtd > 0) {
 