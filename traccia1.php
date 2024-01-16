<?php

class Company{

    public $name;
    public $location;
    public $tot_employees = 0;

    static public $avg_wage = 1500;

    public function __construct($_name,$_location,$_tot_employees){

        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
    }

    public function stampaPresentazione(){

        if($this->tot_employees!=0){
        echo "L'ufficio di $this->name con sede in $this->location ha ben $this->tot_employees dipendenti\n";}
        else {echo "L'ufficio di $this->name con sede in $this->location non ha dipendenti\n";}
    }

    public function stampaSpesaAnnuale(){

        $spesaTotale = (self::$avg_wage*14)*$this->tot_employees;
        echo "La spesa totale annuale di $this->name è di €$spesaTotale\n";
    }

    public static function stampaTotaliAziende(){

    }

}


$azienda1 = new Company("Aulab","Italia",0);
$azienda2 = new Company("Apple","USA",8000);
$azienda3 = new Company("Samsung","Cina",10000);
$azienda4 = new Company("Audi","Germania",6000);
$azienda5 = new Company("Nike","USA",3000);

$azienda1->stampaPresentazione();
$azienda1->stampaSpesaAnnuale();

$azienda2->stampaPresentazione();
$azienda2->stampaSpesaAnnuale();

$azienda3->stampaPresentazione();
$azienda3->stampaSpesaAnnuale();

$azienda4->stampaPresentazione();
$azienda4->stampaSpesaAnnuale();

$azienda5->stampaPresentazione();
$azienda5->stampaSpesaAnnuale();