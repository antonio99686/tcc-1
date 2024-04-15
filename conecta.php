<?php
$bdServidor = "localhost"; 
$bdUsuario = "root"; 
$bdSenha = ""; 
$bdBanco = "tccbruno";
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ($conexao) {
    return $conexao;
}else{
    echo "Problemas para conectar no banco. Erro: "; 
    echo mysqli_connect_error();
    die();
}