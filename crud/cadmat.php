<?php
$nome = $_GET["nome"];
include "../conecta.php";
$sql = "INSERT INTO materia(nome) VALUES('$nome')";
if (mysqli_query($conexao, $sql)) {
    echo "<script>alert('materia cadastrada com sucesso!');
    location.href='../index.php'</script>";
} else {
    echo "<script>alert('Não foi possível cadastrar a materia');
    location.href='listarmateria.php'</script>";
}
