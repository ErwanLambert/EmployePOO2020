<?php

class Traitement {
    public static function instanciationUnEmploye(): void{
        $e= new Employe (1, "Dupont", "Jacques", new DateTime("12/07/1980"), 1000.00);
        echo $e;
    }
    
    public static function instanciationUnEmployeErreur(): void{
        $e= new Employe (2, "Durand", "Sylvie", new DateTime("1975/06/14"), 800.00);
        echo $e;
    }
    
    public static function instanciationProjetV1(): void {
        $p= new Projet("PR7", "Librairie Gelistout", 102);
        echo $p;
        echo "Nom du projet = " . $p->getNomProjet() . "<br>";
    }
    
    public static function instanciationEmployeInformaticienV1() {
        $p = new Projet("PR7", "Librairie Gelistout", 102);
        $informaticien = new EmployeInformaticien(2, "Dimont", "Patrick", new DateTime("07/12/1980"), 1200, $p);
        echo "Nom du Projet de l'employé numéro " . $informaticien->getNumero() . " : " . $informaticien->getSonProjet()->getNomProjet() . "<br>";
        echo "<p>";
        echo $informaticien;
        echo "</p>";
    }
    
    public static function instanciationEmployeInformaticienV2() {
        $p = new Projet('PR8', 'Association Bolide', 34);
        $informaticien = new EmployeInformaticien(3, 'Juvani', 'Adèle', new DateTime("1990/12/09"), 1100, $p);
        echo "<p>";
        echo $informaticien;
        echo "</p>";
        $informaticien->setPrimeM(600);
        echo "Nouvelle prime = " . $informaticien->getPrimeM();
    }
}