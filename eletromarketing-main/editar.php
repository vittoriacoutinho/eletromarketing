<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="/eletromarketing-main/css/style.css">

    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <h1>Editar Usuário</h1>

    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

        <label>
            Email:
            <input type="email" name="email" value="<?= $usuario['email'] ?>" required>
        </label>
        <br>

        <label>
            Senha:
            <input type="password" name="senha" value="<?= $usuario['senha'] ?>" required>
        </label>
        <br>

        <button type="submit">
            <i class="fas fa-save"></i> Atualizar
        </button>
    </form>

    <br>
    <a href="cadastro.php">
        <i class="fas fa-arrow-left"></i> Voltar
    </a>
</body>
</html>

