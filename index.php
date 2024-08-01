<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/login.css" rel="stylesheet">
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <form class="form-signin" action="login.php" method="POST">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <input type="text" id="inputPassword" name="nome" class="form-control" placeholder="nome" required autofocus>
    <input type="text" id="inputId" name="CPF" class="form-control" placeholder="CPF" required>
    <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>

    <div class="checkbox mb-3">
  </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <a class="btn btn-lg btn-secondary btn-block" href="crud/formcad.php">Cadastrar</a>
  </form>
</body>

</html>