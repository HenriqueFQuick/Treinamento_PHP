<?php
//Henrique Fernandes Viana Mendes
//hmendes

//Questão 1
function mean($numbers)
{
    $count = count($numbers);
    $sum = 0;
    foreach ($numbers as $number) {
        $sum = $sum + $number;
    };
    return $sum/$count;
}

//Questão 3
function celsiusToFahrenheit($temperature)
{
    return $temperature * 9/5 + 32;
}

//Questão 4
function metersToCentimeters($meters)
{
    return $meters*100;
}

//Questão 5
function greaterMinor($numbers)
{
    $minor = $numbers[0];
    $greater = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $greater) {
                $greater = $number;
        }
        if ($number < $minor) {
            $minor = $number;
        }
    }
    echo "Greater: $greater, Minor: $minor";
}

//Questão 6
function dayOfWeek($number)
{
    switch($number){
    case 1:
        echo "1 - Domingo";
        break;
    case 2:
        echo "2 - Segunda";
        break;
    case 3:
        echo "3 - Terça";
        break;
    case 4:
        echo "4 - Quarta";
        break;
    case 5:
        echo "5 - Quinta";
        break;
    case 6:
        echo "6 - Sexta";
        break;
    case 7:
        echo "7 - Sábado";
        break;
    default:
        echo "Dia inválido";
    }
}

//Questao 7
function definirTriangulo($lados)
{
    if ($lados[0] <= 0 || $lados[1] <= 0 || $lados[2] <= 0) {
        echo "Não é um triângulo";
    } elseif ($lados[0] + $lados[1] > $lados[2]
        || $lados[0] + $lados[2] > $lados[1]
        || $lados[1] + $lados[2] > $lados[3]
        || $lados[1] + $lados[3] > $lados[2]
        || $lados[3] + $lados[1] > $lados[2]
        || $lados[3] + $lados[2] > $lados[1]
    ) {
        if ($lados[0] == $lados[1] && $lados[1] == $lados[2]) {
            echo "É Equilátero";
        } elseif ($lados[0] != $lados[1] && $lados[1] != $lados[2]) {
            echo "É Escaleno";
        } else {
            echo "É Isósceles";
        }
    }
}