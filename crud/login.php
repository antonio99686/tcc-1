

<?php
include ("conexao.php");
if (isset($_POST['matricula']) || (isset($_POST['senha']))) {
  if (strlen($_POST['matricula']) == 0) {
    echo "Preencha a matricula";
  } else if (strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
  } else {
    $matricula = $mysqli->real_escape_string($_POST['matricula']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuario WHERE matricula = '$matricula' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execucao do codigo SQL: ". $mysqli->eror);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1){
      $usuario = $sql_query->fetch_assoc();

      if(!isset($_SESSION)){
        session_start();
            }

            $_SESSION['user'] = $usuario;
            
            header("index2.php");
          }else{
      echo"Falha ao logar";
          }
      }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/login.css" rel="stylesheet">
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <form class="form-signin" action="" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <input type="text" id="inputId" name="matricula" class="form-control" placeholder="Matricula" required autofocus>
    <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <a class="btn btn-lg btn-secondary btn-block" href="formcad.php">Cadastrar</a>
  </form>
</body>

</html>