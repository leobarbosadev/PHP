<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operdores Aritméticos</title>
</head>
<body>
    <h1>Calculadora: Operadores Aritméticos</h1>

    <div class="caixa">
        <form method="POST" action="resultado.php">
            <label for="">Digite o primeiro número:</label>
            <input type="number">

            <label for="">Digite o segundo número:</label>
            <input type="number">

            <label for="">Escolha a operação:</label>
            <select name="operadores" id="op">
                <option value="selecionar">--Selecione--</option>
                <option value="soma">Soma(+)</option>
                <option value="Subtracao">Subtração(-)</option>
                <option value="Miltiplicacao">Miltiplicação(&times;)</option>
                <option value="soma">Soma(&divide;)</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </div>
    
</body>
</html>