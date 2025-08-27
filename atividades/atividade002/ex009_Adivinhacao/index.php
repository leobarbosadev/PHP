<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/estilo.css">
    <title>Adivinhação</title>

</head>
<body>
    <header>
        <h1>Adivinhação</h1>
    </header>

    <main>
        <section class="secao">
            <form action="" method="POST">
                <label for="numero">Digite um numero:</label>
                <input id="palpite" name="num" type="number" placeholder="Ex.: 15">
                <button type="submit">Adivinhar</button>
            </form>

            <p class="resultado">
                <?php
                    include "public/processa.php";
                    //Verifica se o campo 'palpite' foi enviado através do formulário
                    if(isset($_POST['num'])){
                        
                        //A função htmspecialchars impede que o usuário envie códigos perigosos (como scripts)
                        // $_POST['num'] é o valor enviado pelo formulário com método POST
                        $palpite = htmlspecialchars($_POST['num']);
                        $numero_aleatorio = rand(1,2);
                        echo $numero_aleatorio;
                        adivinharNumero($palpite, $numero_aleatorio);
                    }else{
                        echo "Digite um número para tentar acertar";
                    }
                ?>
            </p>
        </section>
    </main>

    
</body>
</html>