<?php

class EmployeNonInformaticien extends Employe {
    protected float $primeA = 0;
    
    public function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire) {
        Employe::__construct($pnum, $pnom, $pprenom, $pddn, $psalaire);
    }

    public function getPrimeA(): float {
        return $this->primeA;
    }

    public function setPrimeA(float $primeA): void {
        if($primeA > ($this->getSalaireM())){
            $this->primeA = $this->getSalaireM();
            echo "La prime annuelle ne peut pas excéder un mois de salaire. <br>";
        }
        else {
            $this->primeA = $primeA;
        }
    }
    
    public static function gainAnnuel() {
        
    }
    
    public function __toString(): string {
        return "Non Informaticien : " . $this->numero . " - " . $this->nom . " - " . $this->prenom . " - " . $this->dateDeNaissance->format('d/m/Y') . " - " . $this->salaireM . "<br>" . "- prime annuelle : " . $this->getPrimeA();
    }
}