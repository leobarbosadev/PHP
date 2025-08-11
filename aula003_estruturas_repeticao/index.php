<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/estilo.css">
    <title>Exemplo de Estruturas de Repetição em PHP</title>
</head>
<body>
    <header>
        <h1>Exemplo de Estruturas de Repetição em PHP</h1>
    </header>

    <main>
        <section>
            <!-- Seção que exibe o loop FOR -->
            <h2>Estrutura FOR</h2>
            <div class="caixa">
                <?php
                    // Incluir o arquivo PHP que contém as funções
                    //Em seguida, executa a função que exibe o loop FOR
                    include "public/processa.php";
                    exibirFor();
                ?>
            </div>
        </section>

        <!-- Seção que exibe o loop WHILE -->
        <section>
            <h2>Estrutura WHILE</h2>
            <div class="caixa">
                <?php
                    // Chama a função que exibe o loop WHILE
                    exibirWhile();
                ?>
            </div>
        </section>

        <!-- Seção que exibe o loop FOREACH -->
        <section>
            <h2>Estrutura FOREACH</h2>
            <div class="caixa">
                <?php
                    // Chama a função que exibie o loop FOREACH
                    exibirForeach();
                ?>
            </div>
        </section>
    </main>
    
</body>
</html>