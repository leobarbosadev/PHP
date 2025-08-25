<?php
    function sacar($valor){
        $resto = 0;
        if($valor >= 100){
            $numeroCelulas = intdiv($valor, 100);
            $resto = $valor % 100;
            echo "Foi sacado $numeroCelulas cédula(s) de R$100,00<br>";
        }
        if($resto >= 50){
            $numeroCelulas = intdiv($resto, 50);
            $resto = $resto % 50;
            echo "Foi sacado $numeroCelulas cédula(s) de R$50,00<br>";
        }
        if($resto >= 20){
            $numeroCelulas = intdiv($resto, 20);
            $resto = $resto % 20;
            echo "Foi sacado $numeroCelulas cédula(s) de R$20,00<br>";
        }
        if($resto >= 10){
            $numeroCelulas = intdiv($resto, 10);
            $resto = $resto % 10;
            echo "Foi sacado $numeroCelulas cédula(s) de R$10,00<br>";
        }
        if($resto >= 5){
            $numeroCelulas = intdiv($resto, 5);
            $resto = $resto % 5;
            echo "Foi sacado $numeroCelulas cédula(s) de R$5,00<br>";
        }else{
            echo "Não tem cédulas sulficientes!!!";
        }
    }
?>