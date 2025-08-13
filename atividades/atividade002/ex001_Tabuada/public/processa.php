<?php
    function calcular($numero){
        $saida = '';
        for($i = 0; $i<= 10; $i++){
            $soma = $numero + $i;
            echo "$numero + $i = $soma<br>";
        }
        return $saida;
    }
?>