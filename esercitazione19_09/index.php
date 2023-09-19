<?php

class Azienda {
    public $nameCompany = "";
    public $location = "";
    public $totalEmployees = 0;

    public static $avgWage = 1500;
    public static $totalCostEmployes = 0;

    public function __construct($name, $location, $totEmployes) {
        $this->nameCompany = $name;
        $this->location = $location;
        $this->totalEmployees = $totEmployes;

        $this->costTotalEmployes();
    }

    public function stampa () {
        if ($this->totalEmployees > 0) {
            echo "L'azienda $this->nameCompany con sede in $this->location ha $this->totalEmployees dipendenti \n";
            echo "La spesa annuale per i dipendenti dell'azienda è di €. {$this->calculateCostEmploys()} \n";
        } else {
            echo "L'azienda $this->nameCompany con sede in $this->location e non ha dipendenti \n";
            // echo "La spesa annuale per i dipendenti dell'azienda è di €. {$this->calculateCostEmploys()} \n";
        }
    }

    public function calculateCostEmploys () {
        return $this->totalEmployees * self::$avgWage * 12;
    }

    public function costTotalEmployes () {
        self::$totalCostEmployes += $this->calculateCostEmploys();
    }

    public static function totalCostEmployesCompanies () {
        echo "La spesa totale di tutte le aziende è di €. ".self::$totalCostEmployes. "\n";
    }
}


$azienda1 = new Azienda("Aulab","Bari",50);
$azienda2 = new Azienda("Amazon","America",0);

$azienda1->stampa();
$azienda2->stampa();



Azienda::totalCostEmployesCompanies();


//TRACCIA 2 --------

class Counter {
    public static $value = 0;

    public function __construct()
    {
        self::$value++;
    }

    public static function reset(){
        self::$value = 0;
    }
}

$counter1 = new Counter;
$counter2 = new Counter;
$counter3 = new Counter;


echo Counter::$value. "\n";
Counter::reset();
echo Counter::$value."\n";

//TRACCIA 3 ------------

class Math {
    public static $result = 0 ;

    public static function moltiplica (...$numeri){
        $result = 1;
        foreach ($numeri as $numero) {
            $result*=$numero;
        }
        self::$result = $result;
        self::printResult();
        }

    public static function printResult() {
            echo self::$result."\n";
        }
    }

echo Math::moltiplica(3,5);