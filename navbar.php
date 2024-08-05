<!-- <style>
  .navbar navbar-expand-lg bg-body-tertiary {
    color: black;
  }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Inicio</a>
        </li>
      
      </ul>
  
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="crud/editcad.php">Editar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="crud/perfil.php">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="crud/formcad.php">Cadastrar</a>
        </li>
      </ul>
      </form>
    </div>
  </div>
</nav>
 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="icon/icon.png">
    <link rel="stylesheet" href="css/navcss.css">
    <title>Manter Perfil</title>
</head>

<body>
    <div class="container">
        <aside>
            <div class="toggle">
                <div class="logo">
                    <h2> Projeto de <span class="danger">Manter Perfil</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="perfil.php" class="active">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Perfil</h3>
                </a>
                <a href="excluir/excluir.php">
                    <span class="material-icons-sharp">
                        delete
                    </span>
                    <h3>Excluir Perfil</h3>
                </a>
                <a href="logout.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
    </div>