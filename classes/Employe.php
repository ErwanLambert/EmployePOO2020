<?php

abstract class Employe{
    protected int $numero;
    protected string $nom;
    protected string $prenom;
    protected DateTime $dateDeNaissance;
    protected float $salaireM;
    private const MINSALAIRE = 1000;
    
    public function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire){
        $this->numero = $pnum;
        $this->nom = $pnom;
        $this->prenom = $pprenom;
        $this->dateDeNaissance = $pddn;
        $this->setSalaireM($psalaire);
    }
    
    public function getNumero(): int {
        return $this->numero;
    }
    
    public function getNom(): string {
        return $this->nom;
    }
    
    public function getPrenom(): string {
        return $this->prenom;
    }
    
    public function getDateDeNaissance(): DateTime {
        return $this->dateDeNaissance;
    }
    
    function getSalaireM(): float {
        return $this->salaireM;
    }
    
    function setSalaireM(float $salaireM): void {
        if($salaireM >= self::MINSALAIRE){
            $this->salaireM = $salaireM;
        }
        else {
            throw new Exception("Le salaire ne doit pas être inférieur à " . self::MINSALAIRE);
        }
    }
    
    public abstract function gainAnnuel(): float;

    public function __toString(): string {
        return $this->numero . " - " .$this->getNom() . " - " .$this->getPrenom() . " - " .$this->dateDeNaissance->format('d/m/Y') . " - " . $this->getSalaireM() . "<br>";
    }
}