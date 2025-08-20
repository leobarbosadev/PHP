<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <style>
        /* Define a fonte e o espaçamento do corpo da página*/
        body{
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        /*Estiliza os campos de texto e números para ficarem mais legivies */
        input[type='text'], input[type='number']{
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            max-width: 300px; /* Limita o tamanho do campo */
        }
    </style>
</head>
<body>
    <h1>Cadastro de Alunos</h1>

    <!-- Formulário que envia os dados para esta mesma página via metodo POST-->
     <form method='POST'>
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

        <input type="submit" value="Cadastrar">
     </form>

     <?php
     if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $aluno = [
            'nome' =>$_POST['nome'],
            'Nota1' =>$_POST['nota1'],
            'Nota2' =>$_POST['nota2'],
            'Nota3' =>$_POST['nota3'],
            'Nota4' =>$_POST['nota4'],
        ];
        echo '<hr>';

        echo '<h2>Resultado: </h2>';

        echo '<h3>Aluno: ' . htmlspecialchars($aluno['nome']) . '</h3>';

        $soma_notas = 0;
        $qtd_notas = 0;

        foreach($aluno as $chave => $valor){
            if($chave !== 'nome' && is_numeric($valor)){
                echo "$chave: $valor<br>";

                $soma_notas += $valor;

                $qtd_notas++;
            }
        }

        $media = $soma_notas / $qtd_notas;

        echo "<br><strong>Soma das Notas:</strong> $soma_notas<br>";

        echo "<strong>Média:</strong> " . number_format($media, 2, ',', '.');
     }
     ?>
</body>
</html>