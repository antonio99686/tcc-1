<?php
require_once "function/conexao.php";
$conexao = conn();
if ($_SERVER ['REQUEST_METHOD'] == 'POST' && isset($_POST['matricula'],$_POST['senha'])){
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

$sql = "SELECT usuario WHERE matricula = '{$matricula}' and senha ='{$senha}'";
$resultado = executarSQL($conexao, $sql);
if (mysqli_num_rows($resultado) > 0){
    $dados = mysqli_fetch_assoc($resultado);
    $_SESSION['matricula'] = $matricula;
    $_SESSION['senha'] = $senha;
    $_SESSION['id_usuario'] = $dados;
    $_SESSION['nivel'] = $dados;
switch($dados['nivel']){
    case '1';
    
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Bem vindo!',
        text: 'Login realizado com sucesso.',
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        window.location.href = '../index.php';
    });
    </script>";
   case '2';
  echo "<script>
  Swal.fire({
      icon: 'success',
      title: 'Bem vindo!',
      text: 'Login realizado com sucesso.',
      showConfirmButton: false,
      timer: 1500
  }).then(() => {
      window.location.href = '../index.php';
  });
  </script>";
  
case '3';
echo "<script>
Swal.fire({
    icon: 'success',
    title: 'Bem vindo!',
    text: 'Login realizado com sucesso.',
    showConfirmButton: false,
    timer: 1500
}).then(() => {
    window.location.href = '../index.php';
});
</script>";


}

}

}