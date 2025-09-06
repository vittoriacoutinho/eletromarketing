<?php 
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

#consulta
$sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {
    # Login bem-sucedido
    header("Location: dashboard.php");
    exit();
} else {
    # Login falhou
    echo "<script>alert('Email ou senha incorretos. Tente novamente.'); window.location.href = 'login.php';</script>";
}