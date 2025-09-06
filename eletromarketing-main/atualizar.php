<?php
include 'conexao.php';

$id = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "UPDATE usuarios SET email = ?, senha = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $email, $senha, $id);
$stmt->execute();

header("Location: cadastro.php");
?>
