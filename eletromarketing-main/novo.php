<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/eletromarketing-main/css/novo.css">

    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <form action="inserir.php" method="POST">
        <label>
            Email:
            <input type="email" name="email" required>
        </label>
        <br>

        <label>
            Senha:
            <input type="password" name="senha" required>
        </label>
        <br>

        <button type="submit">
            <i class="fas fa-save"></i> Salvar
        </button>
    </form>

    <br>
    <a href="cadastro.php" class="voltar">
        <i class="fas fa-arrow-left"></i> Voltar para a lista
    </a>
</body>
</html>
       

