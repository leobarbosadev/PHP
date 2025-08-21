<?php
function converterTemperatura($numero, $temperatura){
    $convertidaCelsius = 0;
    $convertidaFahrenheit = 0;
    $convertidaKelvin = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        switch($temperatura){
            case 'c':
                $convertidaFahrenheit = ($numero * 9/5) + 32;
                $convertidaKelvin = $numero + 273.15;
                echo "$numero °C equivale a $convertidaFahrenheit °F <br>";
                echo "$numero °C equivale a $convertidaKelvin K <br>";
                break;
            
            case 'f':
                $convertidaCelsius = ($numero - 32) * 5/9;
                $convertidaKelvin = ($numero - 32) * 5/9 + 273.15;
;
                echo "$numero °F equivale a " . number_format($convertidaCelsius, 3 , ',', '.') . " °C <br>";
                echo "$numero °F equivale a " . number_format($convertidaKelvin, 3 , ',', '.') . " K <br>";
                break;
            case 'k':
                $convertidaCelsius = $numero - 273.15;
                $convertidaFahrenheit = ($numero - 273.15) * 9/5 + 32;
                echo "$numero K equivale a " . number_format($convertidaCelsius, 3 , ',', '.') . " °C <br>";
                echo "$numero K equivale a " . number_format($convertidaFahrenheit, 3 , ',', '.') . " °F <br>";
                break;
        }
    }    
}
?>