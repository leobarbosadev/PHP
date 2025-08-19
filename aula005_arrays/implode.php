<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Implode</title>
</head>
<body>
    <header>
        <h1>concatenado o array com Implode()</h1>
    </header>
    <main>
        <?php
            echo '<hr>';

            echo '<h2> 3 - Implode()</h2>';

            //Criação de um array associativo com três elementos
            $array = [
                'nome' => 'Maria',
                'idade' => 40,
                'peso' => 50.5
            ];

            //Exibe o conteúdo do array original de forma formatada
            echo '<pre>';
            print_r($array);
            echo '</pre>';

            //array_filter() remove qalquer valor 'falso' (como null, 0, string, vazia, etc.)
            //implode(' ',...) junta os valores do array resultante em uma única string, separados por espaço
            $registro = implode(' ',array_filter($array));

            //Exibe a string concatenada
            echo '<hr>';
            print_r("Valor extraído: $registro");
            echo '<hr>';
        ?>
    </main>
    
</body>
</html>