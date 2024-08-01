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

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['CPF'], $_POST['senha'], $_POST['nome'])) {
      $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
        $CPF = mysqli_real_escape_string($conexao, $_POST['CPF']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);


        $sql = "SELECT * FROM usuario WHERE nome = '{$nome}' AND CPF = '{$CPF}' AND senha = '{$senha}'";
        $resultado = mysqli_query($conexao, $sql);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $dados = mysqli_fetch_assoc($resultado);
            $_SESSION['CPF'] = $CPF;
            $_SESSION['id_usuario'] = $dados['id_usuario'];
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['nivel'] = $dados['nivel'];
            $_SESSION['senha'] = $dados['senha'];
            
            switch ($dados['nivel']) {
               case '1':
                  // Verifica se é a primeira vez que o usuário faz login
                  if ($dados['primeiro_login'] == 0) {
                     // Atualiza o banco de dados para indicar que não é mais o primeiro login
                     $updateSql = "UPDATE usuario SET primeiro_login = 1 WHERE id_usuario = {$dados['id_usuario']}";
                     mysqli_query($conexao, $updateSql);
         
                     echo "<script>
                        Swal.fire({
                           icon: 'success',
                           title: 'Primeiro login!',
                           text: 'Você será redirecionado para o formulário de edição.',
                           showConfirmButton: false,
                           timer: 1500
                        }).then(() => {
                           location.href='formEdit.php?id_usuario={$dados['id_usuario']}&genero={$dados['genero']}'; // Redireciona para o formulário de edição com os parâmetros GET
                        });
                     </script>";
                  } else {
                     // Se não for o primeiro login, redireciona diretamente para o dashboard
                     echo "<script>
                        Swal.fire({
                           icon: 'success',
                           title: 'Seja bem-vindo, " . htmlspecialchars($dados['nome'], ENT_QUOTES, 'UTF-8') . "',
                           showConfirmButton: false,
                           timer: 1500
                        }).then(() => {
                           location.href='enfermeira/index.php';
                        });
                     </script>";
                  }
                  break;
               case '2':
                  if ($dados['primeiro_login'] == 0) {
                     $updateSql = "UPDATE usuario SET primeiro_login = 1 WHERE id_usuario = {$dados['id_usuario']}";
                     mysqli_query($conexao, $updateSql);
         
                     echo "<script>
                        Swal.fire({
                           icon: 'success',
                           title: 'Primeiro login!',
                           text: 'Você será redirecionado para o formulário de edição.',
                           showConfirmButton: false,
                           timer: 1500
                        }).then(() => {
                           location.href='formEdit.php?id_usuario={$dados['id_usuario']}&genero={$dados['genero']}';
                        });
                     </script>";
                  } else {
                     echo "<script>
                        Swal.fire({
                           icon: 'success',
                           title: 'Seja bem-vindo, " . htmlspecialchars($dados['nome'], ENT_QUOTES, 'UTF-8') . "',
                           showConfirmButton: false,
                           timer: 1500
                        }).then(() => {
                           location.href='psicologa/index.php';
                        });
                     </script>";
                  }
                  break;
               case '3':
                  if ($dados['primeiro_login'] == 0) {
                     $updateSql = "UPDATE usuario SET primeiro_login = 1 WHERE id_usuario = {$dados['id_usuario']}";
                     mysqli_query($conexao, $updateSql);
         
                     echo "<script>
                        Swal.fire({
                           icon: 'success',
                           title: 'Primeiro login!',
                           text: 'Você será redirecionado para o formulário de edição.',
                           showConfirmButton: false,
                           timer: 1500
                        }).then(() => {
                           location.href='formEdit.php?id_usuario={$dados['id_usuario']}&genero={$dados['genero']}';
                        });
                     </script>";
                  } else {
                     echo "<script>
                        Swal.fire({
                           icon: 'success',
                           title: 'Seja bem-vindo, " . htmlspecialchars($dados['nome'], ENT_QUOTES, 'UTF-8') . "',
                           showConfirmButton: false,
                           timer: 1500
                        }).then(() => {
                           location.href='nutricionista/index.php';
                        });
                     </script>";
                  }
                  break;
               default:
                  echo "<script>
                     Swal.fire({
                        icon: 'error',
                        title: 'Erro desconhecido.',
                        text: 'Por favor, entre em contato com o suporte.',
                     }).then(() => {
                        location.href='index.php';
                     });
                  </script>";
                  break;
            }
         } else {
            // Se nenhum registro foi encontrado, exibe um alerta informando que o CPF ou a senha estão incorretos
            echo "<script>
               Swal.fire({
                  icon: 'error',
                  title: 'CPF ou SENHA incorretos',
                  text: 'Por favor, insira novamente.',
               }).then(() => {
                  location.href='index.php';
               });
            </script>";
         }
    }
    ?>

</body>
</html>
