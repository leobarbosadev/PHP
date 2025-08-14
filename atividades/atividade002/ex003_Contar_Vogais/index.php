<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Vogais</title>
</head>
<body>
    <header>
        <h1>Contador de Vogais</h1>
    </header>

    <main>
        <section>
            <form action="" method="POST">
                <label for="texto">Digite um texto:</label>
                <input id="texto" name="palavra" type="text" placeholder="Ex.: lua">
                <button type="submit">Contar Vogais</button>
            </form>

            <p>
                <?php
                    include "public/processa.php"; //include para caso eu quiser executar meu resultado do PHP nessa mesma página
                    
                    //Verifica se o campo 'numero' foi enviado através do formulário
                    if(isset($_POST['palavra'])){
                        
                        //A função htmspecialchars impede que o usuário envie códigos perigosos (como scripts)
                        // $_POST['num'] é o valor enviado pelo formulário com método POST
                        $palavra = htmlspecialchars($_POST['palavra']);
                        contarVogais($palavra);
                    }else{
                        echo "Digite um texto para contar suas vogais";
                    }
                ?>
            </p>
        </section>
    </main>

    
</body>
</html>