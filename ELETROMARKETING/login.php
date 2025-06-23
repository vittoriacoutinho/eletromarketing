<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eletromarketing";

// Conectar ao banco
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

$email = $_POST['email'];
$senha = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Login OK -> vai para dashboard
  header("Location: dashboard.php");
  exit();
} else {
  echo "Email ou senha incorretos!";
}

$conn->close();
?>
