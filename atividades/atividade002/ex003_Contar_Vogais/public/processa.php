<?php
    function contarVogais($palavra){
        $minuscula = strtolower($palavra);
        $qtd_vogais = 0;
        
        //percorre todos os caracteres únicos da string
        echo "em $minuscula temos: <br>";
        foreach (count_chars($minuscula, 1) as $i => $numero){

            if(chr($i) =='a'){
                echo 'a vogal "'.chr($i) . '" ' . $numero . ' vez(es)<br>';
            }

            if(chr($i) =='e'){
                echo 'a vogal "'.chr($i) . '" ' . $numero . ' vez(es)<br>';
            }

            if(chr($i) =='i'){
                echo 'a vogal "'.chr($i) . '" ' . $numero . ' vez(es)<br>';
            }

            if(chr($i) =='o'){
                echo 'a vogal "'.chr($i) . '" ' . $numero . ' vez(es)<br>';
            }

            if(chr($i) =='u'){
                echo 'a vogal "'.chr($i) . '" ' . $numero . ' vez(es)<br>';
            }
        }
        echo "Digite outro texto para ver quantas vogais tem";
    }
?>