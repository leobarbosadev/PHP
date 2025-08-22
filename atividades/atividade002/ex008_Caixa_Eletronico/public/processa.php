<?php
    function sacar($valor){
        $resto = 0;
        if($valor > 100){
            $resto = $valor % 100;
            $numeroCelulas = intdiv($valor, 100);
            
        }
    }
?>