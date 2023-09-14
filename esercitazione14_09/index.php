<?php

//TRACCIA 1 ---------


$users = 
    ['name' => 'Davide',
     'surname' => 'Cariola',
    'gender' => 'F']
;

$result = $users['gender'];

if($result == 'M'){
    echo "Buongiorno" . " "  . "Sig" . " " . $users['name'] . ' ' . $users['surname'];
} else {
    echo "Buongiorno" . " "  . "Sig.ra" . " " . $users['name'] . ' ' . $users['surname'];
}

//TRACCIA 2 -------------

$numbers = [0,1,2,3,4,5,6,7,8,9,10];

$total = 0;
$count = count($numbers);

if($numb % 2 == 0){
    for ($i = 0; $i < $count; $i++) {
    $total += $numbers[$i];
    }
};

$average = $total / $count;
echo "La media dei numeri pari è: " . $average;

//Traccia 3 ----------------------

for ($i = 1; $i <= 20; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
       echo  "HACKADEMY \n";
    }
    else if($i % 3 == 0 ){
       echo  " PHP \n";
    }
    else if($i % 5 == 0){
       echo "JAVASCRIPT \n";
    }
    else {
       echo $i. "\n";
    }
 }


 //TRACCIA 4 -----------------

 $temperatura = 20;
       if($temperatura < 15){
         echo "fa Freddo";
            } else if ($temperatura > 25){
                  echo "Fa molto caldo";
                            }
            else  echo  "Fa caldo";                    
                         
                       
//TRACCIA 5 ----------------------                  
 $temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];

                        foreach($temperature as $city => $temperatura){
                            if($temperatura < 15){
                                echo "A $city "."fa freddo con $temperatura °C\n";
                            } else{
                                if($temperatura > 25){
                                    echo "A $city "."fa super caldo con $temperatura °C\n";
                                } else {
                                    echo "A $city "."fa caldo con $temperatura °C\n";
                                }
                            }
                        }
                 
//TRACCIA 6 ----------------------

$tombola = [];

for ($i = 0; $i < 9; $i++){
    for($a = 0; $a < 10; $a++){
        $tombola[$i][$a] = $i*10+$a;
    }
}

print_r($tombola);
                        