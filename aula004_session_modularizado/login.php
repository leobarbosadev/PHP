<?php
session_start(); //Inicia sessão para verificar se já está logado

//Se já estiver logado, redirecionada para área restrita
if (isset($_SESSION['usuario'])){
    header("Location: restrita.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com Sessão</title>
</head>
<body>
    <h1>Login</h1>

    <!-- Exibe mensagem de erro se exisitir -->
     <?php if (isset($_SESSION['erro'])): ?>
        <p style="color:red;"><?php echo $_SESSION['erro']; unset($_SESSION['erro']); ?></p>
        <?php endif; ?>

     <!-- Formulário envia para valida.php -->
      <form action="valida.php" method="POST">
        <label>Usuário:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Eviar</button>
      </form>
</body>
</html>