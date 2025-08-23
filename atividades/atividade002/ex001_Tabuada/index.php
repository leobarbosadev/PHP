<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>
    <header>
        <h1>Tabuada</h1>
    </header>

    <main>
        <section class=" secao">
            <form action="" method="POST">
                <label for="numero">Digite um número:</label>
                <input id="numero" name="num" type="number" placeholder="Ex.: 1, 2, 3">
                <button type="submit">Calcular</button>
            </form>

            <p class="resultado">
                <?php
                    include "public/processa.php";
                    //Verifica se o campo 'numero' foi enviado através do formulário
                    if(isset($_POST['num'])){
                        
                        //A função htmspecialchars impede que o usuário envie códigos perigosos (como scripts)
                        // $_POST['num'] é o valor enviado pelo formulário com método POST
                        $numero = htmlspecialchars($_POST['num']);
                        calcular($numero);
                    }else{
                        echo "Digite um número para exibir sua tabuada";
                    }
                ?>
            </p>
        </section>
    </main>


</body>

</html>