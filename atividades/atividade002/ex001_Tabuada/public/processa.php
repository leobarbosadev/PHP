<?php
    function calcular($numero){
        $saida = '';
        for($i = 0; $i<= 10; $i++){
            $soma = $numero + $i;
            echo "$i + $numero = $soma<br>";
        }
        return $saida;
    }
?>