<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <!-- Título da página -->
     <h1>Envie sua mensagem</h1>


    <div class="caixa">
        <form id="meuFormulario" method="POST" action="processa.php">
             <label>Digite sua mensagem</label><br>
             <input type="text" id="mensagem" name="msg" required>
             <button type="submit">Enviar</button>
        </form>
    </div>

    <script src="js/script.js"></script>
</body>
</html>