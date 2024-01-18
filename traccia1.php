<?php

class Company{

    public $name;
    public $location;
    public $tot_employees = 0;

    static public $avg_wage = 1500;
    static public $totaleSpeseAziende;

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

        $spesaAzienda = (self::$avg_wage*14)*$this->tot_employees;
        self::$totaleSpeseAziende += $spesaAzienda;
        return $spesaAzienda;
        
    }

    public function stampaSpesaPeriodo($months){

        return (self::$avg_wage*$months)*$this->tot_employees;
        
    }

    static public function spesaTotaleAziende(){
       echo self::$totaleSpeseAziende;
    }
 

}


$azienda1 = new Company("Aulab","Italia",0);
$azienda2 = new Company("Apple","USA",8000);
$azienda3 = new Company("Samsung","Cina",10000);
$azienda4 = new Company("Audi","Germania",6000);
$azienda5 = new Company("Nike","USA",3000);

echo $azienda1->stampaSpesaAnnuale()."\n";
echo $azienda2->stampaSpesaAnnuale()."\n";
echo $azienda3->stampaSpesaAnnuale()."\n";
echo $azienda4->stampaSpesaAnnuale()."\n";
echo $azienda5->stampaSpesaAnnuale()."\n";

Company::spesaTotaleAziende();