<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eletromarketing - Login</title>

  <!-- CSS -->
  <link rel="stylesheet" href="/eletromarketing-main/css/login.css">

  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />

  <!-- JS -->
  <script src="login.js"></script>
</head>
<body>
  <h1>Eletromarketing</h1>

  <div class="login">
    <h3>Faça login</h3>
    <p>Insira o email e a senha</p>

    <form id="loginForm" action="valida_login.php" method="POST">
      <label for="email">Email:</label>
      <input 
        type="email" 
        id="email" 
        name="email" 
        required 
        placeholder="Digite seu email" 
      />
      <br>

      <label for="senha">Senha:</label>
      <input 
        type="password" 
        id="senha" 
        name="senha" 
        required 
        placeholder="Digite sua senha" 
      />
      <br>

      <button type="submit">Entrar</button>
      <br>
    </form>

    <p class="credenciais">
      Para testar, use:<br>
      <b>Email:</b> teste@eletromarketing.com<br>
      <b>Senha:</b> 123456
    </p>
  </div>

  <div class="links">
    <a href="/eletromarketing-main/html/index.html">Página inicial</a> |
    <a href="/eletromarketing-main/cadastro.php">Cadastro de usuários novos</a>
  </div>
</body>
</html>
