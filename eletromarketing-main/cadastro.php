<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>

    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Estilo -->
    <link rel="stylesheet" href="/eletromarketing-main/css/login.css">
</head>
<body>
    <h1>Lista de Usuários</h1>

    <a href="novo.php" class="btn-novo">
        <i class="fas fa-user-plus"></i> Novo Usuário
    </a>

    <h2>
        Para se cadastrar sem as credenciais prontas no site, utilize um novo email e senha:
    </h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>{$row['email']}</td>
                    <td>
                        <a href='editar.php?id={$row['id']}' title='Editar'>
                            <i class='fas fa-edit'></i>
                        </a>
                        <a href='excluir.php?id={$row['id']}' onclick='return confirmarExclusao()' title='Excluir'>
                            <i class='fas fa-trash-alt'></i>
                        </a>
                    </td>
                </tr>";
            }
        } else {
            echo "
            <tr>
                <td colspan='2'>Nenhum usuário cadastrado.</td>
            </tr>";
        }
        ?>
    </table>

    <script>
        function confirmarExclusao() {
            return confirm("Tem certeza que deseja excluir este usuário?");
        }
    </script>

    <a href="/eletromarketing-main/html/index.html">Página inicial</a>
</body>
</html>
