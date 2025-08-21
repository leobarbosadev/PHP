<!-- 5. Gerador de Números Primos
Crie um programa que gere todos os números primos de 1 até um número informado pelo usuário.

Crie uma função que verifique se um número é primo.
Use um laço de repetição para percorrer todos os números e exiba apenas os primos.
O programa deve perguntar se o usuário deseja gerar novamente ou sair. -->

<?php
    function gerarPrimos($numero){
        echo "Entre <strong>1</strong> e <strong>$numero</strong>, temos os seguintes números primos: ";
        for($num = 1; $num <= $numero; $num++){
            $divisores = 0;
            for($i = 1; $i <= $num; $i++){
                if($num % $i == 0){
                    $divisores++; 
                }               
            }
            if($divisores == 2){
                echo "<strong>$num" . ",</strong> " ;
            }
        }
    }
?>