<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- jQuery (se necessário) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</head>
<body>
  
    <?php
    session_start(); 
    require_once "function/conexao.php";
    $conexao = conn();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['matricula'], $_POST['senha'])) {
        $matricula = mysqli_real_escape_string($conexao, $_POST['matricula']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

        $sql = "SELECT * FROM usuario WHERE matricula = '{$matricula}' AND senha = '{$senha}'";
        $resultado = executarSQL($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            $dados = mysqli_fetch_assoc($resultado);
            $_SESSION['matricula'] = $matricula;
            $_SESSION['senha'] = $senha;
            $_SESSION['id_usuario'] = $dados['id_usuario']; 
            $_SESSION['nivel'] = $dados['nivel']; 

            // Use a variável PHP para criar o JavaScript que será injetado na página
            $nivel = $dados['nivel'];
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Bem vindo!',
                text: 'Login realizado com sucesso.',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                switch ('$nivel') {
                    case '1':
                        window.location.href = 'nutricionista/nutricionista.php';
                        break;
                    case '2':
                        window.location.href = 'enfermeira/enfermeira.php';
                        break;
                    case '3':
                        window.location.href = 'psicologa/psicologa.php';
                        break;
                    default:
                        Swal.fire({
                            icon: 'error',
                            title: 'Erro!',
                            text: 'Nível de usuário desconhecido.',
                            showConfirmButton: true
                        });
                }
            });
            </script>";
        } else {
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'Matrícula ou senha incorretos.',
                showConfirmButton: true
            });
            </script>";
        }
    }
    ?>
</body>
</html>
