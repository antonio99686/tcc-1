<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formcad.css">
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
    .form-signin input[type="nome"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: 0;
      border-top-left-radius: 0;
    
    
    }
    .form-signin input[type="senha"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>

  <form class="form-signin" action="../index2.php" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <label for="nome" class="sr-only">nome</label>
    <input type="nome" id="nome" class="form-control" placeholder="nome" required autofocus>
    <label for="email" class="sr-only">Email</label>
    <input type="email" id="email" class="form-control" placeholder="Email" required autofocus>
    <label for="senha" class="sr-only">Senha</label>
    <input type="senha" id="senha" class="form-control" placeholder="Senha" required>
    <div class="checkbox mb-3">
      <label>
      <!--  <input type="checkbox" value="remember-me"> Lembrar-me -->
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button> 




    
    <footer>

    </footer>
</body>
</html>
