<?php
function converterTemperatura($temperatura){
    $convertida = ($temperatura * 9/5) + 32;
    echo "$temperatura °C equivale a $convertida °F";
}
?>