<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - shuffle</title>
</head>
<body>
    <header>
        <h1>Embaralhando um array: shuffle()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';

            echo '<h2> 6 shuffle </h2>';

            //Criação de um array associativo
            $array = [
                'nome' => 'Maria',
                'idade' => 40,
                'peso' => 50.5
            ];

            // Exibir o array original
            echo '<pre>';
            print_r($array);
            echo '</pre>';

            //Aplica a função shuffle() para embaralhar os elementos do array
            shuffle($array); // IMPORTANTE: isso remove as chaves associativas! as chaves passam a ser índices 0, 1, 2...
            //Exibe o array após o embaralhamento
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        ?>
    <main>
        
</body>
</html>