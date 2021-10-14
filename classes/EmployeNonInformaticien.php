<?php

class EmployeNonInformaticien extends Employe {
    protected float $primeA;
    
    public function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire, float $primeA) {
        Employe::__construct($pnum, $pnom, $pprenom, $pddn, $psalaire);
        $this->primeA = $primeA;
    }

    public function getPrimeA(): float {
        return $this->primeA;
    }

    public function setPrimeA(float $primeA): void {
        if($primeA < (Employe::$psalaire)){
            $primeA = Employe::$psalaire;
            throw new Exception("La prime annuelle ne peut pas excéder un mois de salaire.");
        }
        else {
            $this->primeA = $primeA;
        }
    }
    
    public function __toString(): string {
        return "Prime annuelle : " . $this->primeA;
    }
}