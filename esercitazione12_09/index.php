<?php

// Traccia 1

$var1 = 1;
$var2 = 2.1;
$var3 = "Ciao";
$var4 = true;

var_dump($var1);
var_dump($var2);
var_dump($var3);
var_dump($var4);

// Traccia 2

$text1 = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè";
$text6 = 'hai';
$text7 = 'bevuto';
$text8 = "tutto";

var_dump($text1 . ' ' . $text2 . ' ' . $text3 . ' ' . $text4 . ' ' . $text5 . ' ' . $text6 . ' ' . $text7 . ' ' . $text8);

//Traccia 3

$words1 = [ 'una', 67,'vita', 'colle', 'mi', 'rosso', [ 'oscura', 'era', 89, [ 'mezzo', [ 'cammin', 'Nel', [ 'selva', 'la', [ 'via', 'una', true, ] ], ] ], 'ritrovai', 'per' ], 'diritta' ]; 
$words2 = [ 'elemento1' => 25.89, 
            'elemento2' => 'nostra', 
            'elemento3' => [ 'Virgilio', 'smarrita', 'ché' ] ];


$result = $words1[6][3][1][1] . ' ' . $words1[6][3][0] . ' ' . "di" . ' ' .$words1[6][3][1][0]. ' '. "di" . ' ' . $words2["elemento2"] . ' ' . $words1[2] . ' ' . $words1[4] . ' ' . $words1[6][4] . ' ' . $words1[6][5] . ' ' . $words1[6][3][1][2][2][1] . ' ' . $words1[6][3][1][2][0] . ' ' . $words1[6][0] . "," . $words2['elemento3'][2] . ' ' . $words1[6][3][1][2][1] . ' ' . $words1[7] . ' ' . $words1[6][3][1][2][2][0] . ' ' . "era" . ' ' . $words2["elemento3"][1];

var_dump($result);


//Traccia 4 
$x = 10; 
$y = 20; 
$z = "20"; 
$w = 10;

var_dump($x < $y);
var_dump($x <= $w);
var_dump($y == $z);
var_dump($y === $z);
var_dump($y !== $z);
var_dump($y != $z);


//Traccia 5 

$corsoHackademy = [ "docenti" => ["Andrea", "Jeremy" , "Emanuele"], 
                    "studenti" => ["Giuseppe", "Sabrina", "Sascha" , "Ale"],
                    "argomenti" => ["html", "css", "bootstrap", "javascript", "php"],
                 ];

$resultPrint = "Sono" . ' ' .  $corsoHackademy['studenti'][0]. ' ' . " e sto studiando" . ' ' . $corsoHackademy['argomenti'][4] . ' ' . "con" . ' ' . $corsoHackademy['docenti'][2];

var_dump($resultPrint);