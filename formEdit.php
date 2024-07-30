<?php
require_once "function/conexao.php";
$conexao = conn();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coletar dados do formulário (assumindo que os dados são validados e filtrados)
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $datas = $_POST['datas'];
    $status = $_POST['status'];
    $CPF = $_POST['CPF'];
    $RG = $_POST['RG'];
    $categoria = $_POST['categoria'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $responsavel = $_POST['responsavel'];
    $data_entrada = $_POST['data_entrada'];
    $tele_respon = $_POST['tele_respon'];
    $idade = $_POST['idade'];
    $nom_dan = $_POST['nom_dan'];
    $genero = $_POST['genero'];

    // Atualizar os dados no banco de dados (sem declarações preparadas)
    $sql = "UPDATE usuario SET 
                nome = '$nome', email = '$email', senha = '$senha', datas = '$datas', categoria = '$status', 
                CPF = '$CPF', RG = '$RG', categoria = '$categoria', telefone = '$telefone', endereco = '$endereco', 
                responsavel = '$responsavel', data_entrada = '$data_entrada', tele_respon = '$tele_respon', 
                idade = '$idade', nom_dan = '$nom_dan', genero = '$genero'
            WHERE id_usuario = $id_usuario";

    if ($conexao->query($sql) === TRUE) {
        echo "<script>
            alert('Dados atualizados com sucesso!');
            window.location.href = '../index.php';
        </script>";
    } else {
        echo "<script>
            alert('Erro ao atualizar os dados: " . $conexao->error . "');
        </script>";
    }
}

// Verifica se o parâmetro ID foi passado
if (isset($_GET['id_usuario'])) {
    $id_usuario = $_GET['id_usuario'];

    // Query para selecionar os dados do usuário pelo ID
    $sql = "SELECT * FROM usuario WHERE id_usuario = $id_usuario";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Atribuir os resultados às variáveis PHP
        $row = $result->fetch_assoc();
        $nome = $row['nome'];
        $email = $row['email'];
        $senha = $row['senha'];
        $datas = $row['datas'];
        $status = $row['categoria'];
        $CPF = $row['CPF'];
        $RG = $row['RG'];
        $categoria = $row['categoria'];
        $telefone = $row['telefone'];
        $endereco = $row['endereco'];
        $responsavel = $row['responsavel'];
        $data_entrada = $row['data_entrada'];
        $tele_respon = $row['tele_respon'];
        $idade = $row['idade'];
        $nom_dan = $row['nom_dan'];
        $genero = $row['genero'];
    } else {
        echo "<script>
            alert('Nenhum resultado encontrado para o ID especificado.');
        </script>";
    }
}


$conexao->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="formulario/img/cadastro.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="shortcut icon" href="../img/img/icon.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Edição</title>
</head>
<body>
    <div class="container mt-5">
        <header>
            <img src="../img/icno.jpg" alt="Logo" class="logo mb-4" />
        </header>
        <h1 class="mb-4">Atualização do Usuário</h1>
        <form class="form" action="formEdit.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id_usuario" class="form-label">ID</label>
                <input type="text" name="id_usuario" class="form-control" value="<?php echo isset($id_usuario) ? $id_usuario : ''; ?>" placeholder="ID" readonly>
            </div>
            <div class="form-group">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?php echo isset($nome) ? $nome : ''; ?>" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo isset($email) ? $email : ''; ?>" placeholder="seuemail@email.com">
            </div>
            <div class="form-group">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" value="<?php echo isset($senha) ? $senha : ''; ?>" placeholder="mínimo 8 caracteres">
            </div>
            <div class="form-group">
                <label for="datas" class="form-label">Data de Nascimento</label>
                <input type="date" name="datas" class="form-control" value="<?php echo isset($datas) ? $datas : ''; ?>" placeholder="Data de Nascimento">
            </div>
            <div class="form-group">
                <label for="status" class="form-label">Categoria</label>
                <select name="status" class="form-control">
                    <option value="" disabled <?php echo ($status == '') ? 'selected' : ''; ?>>Selecione</option>
                    <option value="1" <?php echo ($status == 1) ? 'selected' : ''; ?>>Dançarino</option>
                    <option value="2" <?php echo ($status == 2) ? 'selected' : ''; ?>>Coordenador</option>
                    <option value="3" <?php echo ($status == 3) ? 'selected' : ''; ?>>Responsável</option>
                </select>
            </div>
            <div class="form-group">
                <label for="CPF" class="form-label">CPF</label>
                <input type="text" name="CPF" class="form-control" value="<?php echo isset($CPF) ? $CPF : ''; ?>" placeholder="00000000000">
            </div>
            <div class="form-group">
                <label for="RG" class="form-label">RG</label>
                <input type="text" name="RG" class="form-control" value="<?php echo isset($RG) ? $RG : ''; ?>" placeholder="00000000000">
            </div>
            <div class="form-group">
                <label for="categoria" class="form-label">Nível</label>
                <input type="text" name="categoria" class="form-control" value="<?php echo isset($categoria) ? $categoria : ''; ?>" placeholder="adulto, juvenil, mirim">
            </div>
            <div class="form-group">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" value="<?php echo isset($telefone) ? $telefone : ''; ?>" placeholder="(00)0000-00000">
            </div>
            <div class="form-group">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" name="endereco" class="form-control" value="<?php echo isset($endereco) ? $endereco : ''; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="responsavel" class="form-label">Responsável</label>
                <input type="text" name="responsavel" class="form-control" value="<?php echo isset($responsavel) ? $responsavel : ''; ?>" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="data_entrada" class="form-label">Data de Entrada</label>
                <input type="date" name="data_entrada" class="form-control" value="<?php echo isset($data_entrada) ? $data_entrada : ''; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="tele_respon" class="form-label">Telefone do Responsável</label>
                <input type="text" name="tele_respon" class="form-control" value="<?php echo isset($tele_respon) ? $tele_respon : ''; ?>" placeholder="(00)0000-00000">
            </div>
            <div class="form-group">
                <label for="idade" class="form-label">Idade</label>
                <input type="text" name="idade" class="form-control" value="<?php echo isset($idade) ? $idade : ''; ?>" placeholder="00">
            </div>
            <div class="form-group">
                <label for="nom_dan" class="form-label">Nome do Dançarino</label>
                <input type="text" name="nom_dan" class="form-control" value="<?php echo isset($nom_dan) ? $nom_dan : ''; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="genero" class="form-label">Gênero</label>
                <select name="genero" class="form-control">
                    <option value="" disabled <?php echo ($genero == '') ? 'selected' : ''; ?>>Selecione</option>
                    <option value="F" <?php echo ($genero == 'F') ? 'selected' : ''; ?>>Feminino</option>
                    <option value="M" <?php echo ($genero == 'M') ? 'selected' : ''; ?>>Masculino</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
