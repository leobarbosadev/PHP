<?php
session_start();

//Inicializa o array de alunos na sessão, se ainda não existir
if(!isset($_SESSION['alunos'])){
    $_SESSION['alunos'] = [];
}

//Se o botão "limpar lista" for clicado
if(isset($_POST['limpar'])){
    session_destroy();
    session_start(); //reinicia a sessão após destruir
    $_SESSION['alunos'] = []; //reinicializa o array
}

//Se o formulário for enviado para adicionar aluno
if($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['limpar'])){
    //Cria um novo aluno a partir dos dados enviados
    $novo_aluno = [
        'nome' => $_POST['nome'],
        'Nota1' => (float) $_POST['nota1'],
        'Nota2' => (float) $_POST['nota2'],
        'Nota3' => (float) $_POST['nota3'],
        'Nota4' => (float) $_POST['nota4'],
    ];

    //Adiciona à lista na sessão
    $_SESSION['alunos'][] = $novo_aluno;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos (com Session)</title>
    <style>
    body {
        font-family: Arial;
        margin: 40px;
    }

    input[type="text"],
    input[type="number"] {
        padding: 8px;
        margin: 5px 0;
        width: 100%;
        max-width: 300px;
    }

    input[type="submit"] {
        padding: 10px 20px;
        margin-top: 15px;
    }

    hr {
        margin: 30px 0;
    }
    </style>
</head>

<body>
    <h1>Cadastro de Aluno (com Session)</h1>

    <!-- Formulário para adicionar aluno -->
    <form method="POST">
        <label for="nome_aluno">Nome do Aluno:</label><br>
        <input type="text" name='nome' id='nome_aluno' required><br>

        <label for="n1">Nota 1:</label><br>
        <input type="number" name="nota1" id="n1" step='0.01' required><br>

        <label for="n1">Nota 2:</label><br>
        <input type="number" name="nota2" id="n2" step='0.01' required><br>

        <label for="n1">Nota 3:</label><br>
        <input type="number" name="nota3" id="n3" step='0.01' required><br>

        <label for="n1">Nota 4:</label><br>
        <input type="number" name="nota4" id="n4" step='0.01' required><br>

        <input type="submit" value="Adicionar Aluno">
    </form>

    <!-- Botão para limpar a lista -->
    <form method="POST" style="margin-top: 20px;">
        <input type="hidden" name="limpar" value="1">
        <input type="submit" value="Limpar Lista">
    </form>

    <!-- Exibe a lista de alunos -->
    <?php if (!empty($_SESSION['alunos'])): ?>
    <hr>
    <h2>Lista de alunos Cadastrados</h2>
    <?php foreach ($_SESSION['alunos'] as $aluno): ?>
    <h3><?= htmlspecialchars($aluno['nome']) ?></h3>
    <ul>
        <li>Nota 1: <?= $aluno['Nota1'] ?></li>
        <li>Nota 2: <?= $aluno['Nota2'] ?></li>
        <li>Nota 3: <?= $aluno['Nota3'] ?></li>
        <li>Nota 4: <?= $aluno['Nota4'] ?></li>
        <?php
                $soma = $aluno['Nota1'] + $aluno['Nota2'] + $aluno['Nota3'] + $aluno['Nota4'];
                $media = $soma / 4;
            ?>
        <li><strong>Soma:</strong> <?= $soma ?></li>
        <li><strong>Média:</strong><?= number_format($media, 2, ',', '.') ?></li>
    </ul>
    <hr>
    <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>