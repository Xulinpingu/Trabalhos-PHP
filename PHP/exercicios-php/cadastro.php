<?php

    $nome = $_POST["nome"] ?? null;
    $password = $_POST["senha"] ?? null;
    $email = $_POST["email"] ?? null;
    $user = $_POST["user"] ?? null;

    $mensagem = null;

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $mensagem = "Sua conta foi criada, $user!";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>

        <?php if ($mensagem): ?>
            <div class="sucesso">
                <?php echo $mensagem; ?>
            </div>
        <?php endif; ?>

        <form action="cadastro.php" method="POST" class="form">

            <label for="user">Nome de usuario:</label>
            <input type="text" name="user" required>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>

            <label for="senha">Senha:</label> 
            <input type="password" name="senha" required>

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <button type="submit">Fazer cadastro</button>
        </form>


</body>
<style>
    body {
        height: 100vh;
        background: linear-gradient(135deg, #2f086d, #1c57a5);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .sucesso {
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #28a745;
        color: white;
        padding: 15px 25px;
        border-radius: 8px;
        font-weight: bold;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        animation: subir 0.5s ease;
        transition: opacity 0.5s ease;
    }

    @keyframes subir {
        from {
            opacity: 0;
            transform: translate(-50%, 20px);
        }
        to {
            opacity: 1;
            transform: translate(-50%, 0);
        }
    }
</style>
<script>
    setTimeout(() => {
        const msg = document.querySelector('.sucesso');
        if (msg) {
            msg.style.opacity = '0';
            setTimeout(() => {
                window.location.href = "index.html";
            }, 500);
        }
    }, 1000);
</script>
</html>
