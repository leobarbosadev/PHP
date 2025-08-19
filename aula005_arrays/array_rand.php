<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Extract</title>
</head>
<body>
    <header>
        <h1>Extraindo valores com extract()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';

            echo '<h2> 5 array_rand </h2>';

            $array = [
                'nome' => 'Maria',
                'idade' => 40,
                'peso' => 50.5
            ];

            // Exibir o array original formatado
            echo '<pre>';
            print_r($array);
            echo '</pre>';

            //array_rand($array) retorna uma chave aleatória do array
            //Em seguida, usamos essa chave para acessar o valor correspondente
            $busca_aleatoria = $array[array_rand($array)];

            // Exibir o array original formatado
            echo '<pre>';
            print_r($busca_aleatoria);
            echo '</pre>';
        ?>
    <main>
        
</body>
</html>