<!-- Faça um programa que simule um caixa eletrônico, onde o usuário informa um valor para saque.

Crie uma função que calcule a quantidade de cada cédula (100, 50, 20, 10 e 5).
Use estruturas condicionais para decidir como entregar o menor número de cédulas.
Permita vários saques até o usuário encerrar o programa. -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Banco - Sacar</h1>

    <form method='POST'>
        <label for="valor">Digite o valor que deseja sacar</label>
        <input type="number" name="dinheiro" id="valor">
        <button type="submit">Sacar</button>
    </form>

    <p>
        <?php
            include "public/processa.php";
            if(isset($_POST['dinheiro'])){
                $dinheiro = htmlspecialchars($_POST['dinheiro']);
                sacar($dinheiro);
            }else{
                echo "Digite um valor para sacar";
            }
        ?>
    </p>
    
</body>
</html>