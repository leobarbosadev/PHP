<?php
    function contarVogais($palavra){
        $minuscula = strtolower($palavra);
        $qtd_vogais = 0;
        
        //percorre todos os caracteres únicos da string
        foreach (count_chars($minuscula, 1) as $i => $numero){
            if(chr($i) =='a'){
                $qtd_vogais +=$numero;
            }

            if(chr($i) =='e'){
                $qtd_vogais +=$numero;
            }

            if(chr($i) =='i'){
                $qtd_vogais +=$numero;
            }

            if(chr($i) =='o'){
                $qtd_vogais +=$numero;
            }

            if(chr($i) =='u'){
                $qtd_vogais +=$numero;
            }
        }
        echo "No texto $minuscula, tem $qtd_vogais vogal(is)";
    }
?>