<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operdores Aritméticos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Calculadora: Operadores Aritméticos</h1>
    </header>

    <div class="caixa">
        <form method="POST" action="resultado.php">
            <label for="n1">Digite o primeiro número:</label>
            <input type="number" name="numero1" id="n1">

            <label for="n2">Digite o segundo número:</label>
            <input type="number" name="numero2" id="n2">

            <label for="">Escolha a operação:</label>
            <select name="operadores" id="op">
                <option value="selecionar">--Selecione--</option>
                <option value="soma">Soma(+)</option>
                <option value="subtracao">Subtração(-)</option>
                <option value="miltiplicacao">Miltiplicação(&times;)</option>
                <option value="divisao">Divisão(&divide;)</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </div>

    <script src="script.js"></script>
    
</body>
</html>