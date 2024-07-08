<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <script src="../java/login.js" defer></script>
    
    <title>Sentinela da Fronteira</title>
</head>
<body>

<header>
   
</header>

 
<div class="cadastro">
  <h1> Editar</h1>
<form action="edit.php" method="POST">
        <p><label class="login__label">
            <span>Nome</span>
            <input type="text" name="username" class="input">
          </label></p>
<br>
        <p><label class="login__label">
            <span>E-mail</span>
            <input type="email" name="email" class="input">
          </label></p>     
 <br>
        <p><label class="login__label">
            <span>Matricula</span>
            <input type="text" name="mat" class="input">
          </label></p>
<br>
        <p><label class="login__label">
            <span>Telefone</span>
            <input type="text" name="tele" class="input">
          </label></p>
<br>
 
          <input type="file" name="arquivo"> 
          <br>
           
          <button type="submit" class="login__button" disabled>
            
          </button>
</form>

</div>




    
    <footer>
        <h3> Sentinela da Fronteira</h3>
    </footer>
</body>
</html>
