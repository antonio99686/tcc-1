<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar com Carrossel Automático e Box-Shadow</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/css2.css">
    <link rel="shortcut icon" href="img/assistrencia.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Estilo personalizado para a navbar */
        .navbar-custom {
            background-color: #343a40;
            /* Cor de fundo da navbar */
        }

        /* Estilo para os elementos com box-shadow */
        .box-shadow {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Sombra personalizada */

        }

        img {
            max-width: 2000px;
            max-height: 400px;
        }
    </style>
</head>

<body>

    <?php
    include "navbar.php"
        ?>


    <!-- Carrossel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/carro.jfif" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/antonio.jfif" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/medico.jfif" alt="Terceiro Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <!-- Elementos com box-shadow -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 box-shadow">
            <div class="card" style="width: 18rem;">
              <a href="futuro.php">  <img src="img/carro.jfif" class="card-img-top" alt="..."></a>
                <div class="card-body">
                <p class="card-text">lorenzo1</p>
                        
                </div>
            </div>
            </div>
            <div class="card" style="width: 18rem;">
              <a href="futuro.php">  <img src="img/carro.jfif" class="card-img-top" alt="..."></a>
                <div class="card-body">
                <p class="card-text">lorenzo2.</p>
                        
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS e dependências -->
    <script src="bootstrap.js"></script>
    <!-- Script para carrossel automático -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="javascript/bootstrap.js"></script>

<!-- Script para carrossel automático -->
<script>
    $(document).ready(function () {
        $('#carouselExampleIndicators').carousel({
            interval: 3000 // Tempo em milissegundos (3 segundos)
        });
    });
</script>
</body>

</html>

