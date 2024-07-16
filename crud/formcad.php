<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../java/login.js" defer></script>

   
    <title></title>
</head>
<body>

<header>
  
</header>

 
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
    .form-signin input[type="name"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="text"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: 0;
      border-top-left-radius: 0;
    
    
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>
<form class="form-signin" action="cadastrar.php" method="POST">
    <h1 class="h3 mb-3 font-weight-normal">Cadastrar-se</h1>
    <label for="Nome" class="sr-only">Nome</label>
    <input type="name" name="nome"class="form-control" placeholder="Nome" required>
    <label for="Matricula" class="sr-only">Matricula</label>
    <input type="text" name="matricula" class="form-control" placeholder="Matricula" required>
    <label for="Senha" class="sr-only">Senha</label>
    <input type="password"  name="senha" class="form-control" placeholder="Senha" required>
    <div class="checkbox mb-3">
      <label>
       <input type="checkbox" value="remember-me"> Lembrar-me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button> 
    <a class="btn btn-lg  btn-block" href="login.php">Entrar</a>  








    
    <footer>

    </footer>
</body>
</html>






