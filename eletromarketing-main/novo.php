<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/eletromarketing-main/css/novo.css">

</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <form action="inserir.php" method="POST">
        <label>
            Nome:
            <input type="email" name="email" required>
        </label>
        <label>
            Email:
            <input type="password" name="senha" required>
        </label>
        <button type="submit"><i class="fas fa-save"></i> Salvar</button>
    </form>

    <br>
    <a href="cadastro.php" class="voltar"><i class="fas fa-arrow-left"></i> Voltar para a lista</a>
</body>
</html>
