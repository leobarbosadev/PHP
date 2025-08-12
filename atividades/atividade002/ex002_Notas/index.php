<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <header>
        <h1>Tabuada</h1>
    </header>

    <main>
        <section>
            <form action="" method="post">
                <label for="nome">Digite um numero:</label>
                <input id="nome" name="nome_aluno" type="text" placeholder="Ex.: Antônio Gonçalves">
                <button type="submit">Calcular</button>
            </form>

            <p>
                <?php
                    include "public/processa.php";
                    $numero = htmlspecialchars($_POST['num'] ?? 0);

                    if($numero){
                        calcular($numero);
                    } else{
                        echo "Digite um número";
                    }
                ?>
            </p>
        </section>
    </main>

    
</body>
</html>