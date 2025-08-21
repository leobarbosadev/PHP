<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir números primos</title>
</head>

<body>
    <header>
        <h1>Exibir números primos</h1>
    </header>

    <main>
        <section>
            <form action="" method="POST">
                <label for="num">Digite um número:</label>
                <input id="num" name="numero" type="number" placeholder="Ex.: 25">
                <button type="submit">Mostrar primos</button>
            </form>

            <p>
                <?php
                    include "public/processa.php"; //include para caso eu quiser executar meu resultado do PHP nessa mesma página
                    
                    //Verifica se o campo 'numero' foi enviado através do formulário
                    if(isset($_POST['numero'])){
                        
                        //A função htmspecialchars impede que o usuário envie códigos perigosos (como scripts)
                        // $_POST['num'] é o valor enviado pelo formulário com método POST
                        $numero = htmlspecialchars($_POST['numero']);
                        gerarPrimos($numero);
                    }else{
                        echo "Digite outro número para mostar os primos";
                    }
                ?>
            </p>
        </section>
    </main>
</body>

</html>