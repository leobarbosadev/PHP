<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termômetro</title>
</head>

<body>
    <header>
        <h1>Conversor de Temperatura</h1>
    </header>

    <main>
        <section>
            <form action="" method="POST">
                <label for="temperatura">Digite uma temperatura:</label>
                <input id="temperatura" name="temp" type="number" placeholder="Ex.: 15">

                <label for="">Escolha para qual temperatura quer converter:</label>
            <select name="temperatura" id="temp">
                <option value="selecionar">--Selecione--</option>
                <option value="c">Celsius</option>
                <option value="f">Fahrenheit</option>
            </select>
                <button type="submit">Converter</button>
            </form>

            <p>
                <?php
                    include "public/processa.php";
                    //Verifica se o campo 'temp' foi enviado através do formulário
                    if isset($_POST['temp']){
                        
                        //A função htmspecialchars impede que o usuário envie códigos perigosos (como scripts)
                        // $_POST['num'] é o valor enviado pelo formulário com método POST
                        $temperatura = htmlspecialchars($_POST['temp']);
                        converterTemperatura($temperatura);
                    }else{
                        echo "Digite um número para mostar sua conversão";
                    }
                ?>
            </p>
        </section>
    </main>


</body>

</html>