<?php

class EmployeInformaticien extends Employe{
    protected float $primeM = 0;
    protected Projet $sonProjet;
    
    public function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire, Projet $sonProjet) {
        Employe::__construct($pnum, $pnom, $pprenom, $pddn, $psalaire);
        $this->sonProjet = $sonProjet;
    }
    
    public function getPrimeM(): float {
        return $this->primeM;
    }

    public function getSonProjet(): Projet {
        return $this->sonProjet;
    }

    public function setPrimeM(float $primeM): void {
        if ($primeM > ($this->getSalaireM() * 0.3)){
            throw new Exception("La prime ne peut pas excéder 30% du salaire mensuel");
        }
        else {
            $this->primeM = $primeM;
        }
    }
    
    public static function gainAnnuel() {
        
    }
    
    public function __toString(): string {
        return "Informaticien : " . $this->numero . " - " . $this->nom . " - " . $this->prenom . " - " . $this->dateDeNaissance->format('d/m/Y') . " - " . $this->salaireM . "<br>" . "- Projet : " . $this->getSonProjet()->getCodeProjet() . " - " . $this->getSonProjet()->getNomProjet() . " - " . $this->getSonProjet()->getDureePrevue();
    }
}