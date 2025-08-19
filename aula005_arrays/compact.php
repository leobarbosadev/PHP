<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Compact</title>
</head>
<body>
    <header>
        <h1>Extraindo valores com compact()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';

                //Declaração de variáveis individuais
                $nome = 'Maria';
                $idade = 40;
                $peso = 50.5;

                //A função compact() cria um array associativo com baso nas variáveis infromadas
                //As chaves do array serão os nomes das variáveis('nome', 'idade', 'peso')
                //E os valores serão os valores dessas variáveis
                $array = compact('nome', 'idade', 'peso');

                //Exibe o arrray resultante no navegador, formatado para melhor vizualização
                echo '<pre>';
                print_r($array);
                echo '</pre>';
        ?>
    <main>

</body>
</html>