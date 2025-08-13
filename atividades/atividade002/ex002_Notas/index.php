<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular média</title>
</head>
<body>
    <header>
        <h1>Calcular média</h1>
    </header>

    <main>
        <section>
            <form action="" method="post">
                <label for="nome">Digite um numero:</label>
                <input id="nome" name="nome_aluno" type="text" placeholder="Ex.: Antônio Gonçalves">

                <label for="nota1">Entre com a 1ª nota:</label>
                <input id="nota1" name="n1" type="number" placeholder="Ex.: 5">

                <label for="nota2">Entre com a 2ª nota:</label>
                <input id="nota2" name="n2" type="number" placeholder="Ex.: 5">

                <label for="nota3">Entre com a 3ª nota:</label>
                <input id="nota3" name="n3" type="number" placeholder="Ex.: 5">
                
                <label for="nota4">Entre com a 4ª nota:</label>
                <input id="nota4" name="n4" type="number" placeholder="Ex.: 5">

                <button type="submit">Calcular</button>
            </form>
            <table>
                <theader>
                        <th>nome</th>
                        <th>media</th>
                        <th>situação</th>
                </theader>
            </table>

            <p>
                <?php
                    include "public/processa.php";

                    adicionarAlunos("Joao", 10, 10, 10, 10);
                ?>
            </p>
        </section>
    </main>

    
</body>
</html>