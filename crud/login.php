<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Incluir CSS do Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos CSS personalizados -->
  <style>
    .form-signin {
      max-width: 380px;
      padding: 15px;
      margin: auto;
    }
    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>

  <form class="form-signin" action="../index2.php" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <input type="text" id="inputId" class="form-control" placeholder="Matricula" required autofocus>

    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembrar-me 
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>  

    <a class="btn btn-lg  btn-block" href="formcad.php">Cadastrar</a>  
        </li>
  </form>
  
</body>
</html>