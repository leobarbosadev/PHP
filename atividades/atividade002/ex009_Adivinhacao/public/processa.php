<?php
function adivinharNumero($palpite, $numero_aleatorio){
   
    $numero_aleatorio = rand(1,2);
    $tentativas = 0;
    // for($i=1; $i<=2; $i++){
        
    // }
    if($palpite < $numero_aleatorio){
        $tentativas+=1;
            echo "O número digitado foi <strong>$palpite</strong>, digite um número maior";
        }elseif($palpite > $numero_aleatorio){
        $tentativas+=1;
            echo "O número digitado foi <strong>$palpite</strong>, digite um número menor";
        }else{
            echo "Você acertou!!!!! Tentativas: $tentativas";
        }
}
?>