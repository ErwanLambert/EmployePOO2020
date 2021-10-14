<?php
include 'classes/Employe.php';
include 'classes/EmployeInformaticien.php';
include 'classes/Projet.php';
include 'includes/Traitement.php';
    
try {
    Traitement::instanciationUnEmploye();
    //Traitement::instanciationUnEmployeErreur();
    Traitement::instanciationUnEmploye();
    Traitement::instanciationProjetV1();
    Traitement::instanciationEmployeInformaticienV1();
    Traitement::instanciationEmployeInformaticienV2();
} 
catch (Exception $ex) {
    echo $ex->getMessage();
}