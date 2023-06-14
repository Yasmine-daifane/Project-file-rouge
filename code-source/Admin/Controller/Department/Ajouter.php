<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));

include_once(__ROOT__ . '/Managers/GestionDepartment.php');
require_once(__ROOT__ . '/Managers/GestionRates.php');
$GestionRates = new GestionRates;
$getDepartment = $GestionRates->getDepartment();
// Trouver tous les employés depuis la base de données 
$GestionDepartments = new GestionDepartments();


if (!empty($_POST)) {
    $department = new Department();
    $department->SetName($_POST['nom']);
    $department->SetDescription($_POST['description']);
    $GestionDepartments->Add($department);
    // Redirection vers la page index.php
    header("Location: index.php");
}
include_once(__ROOT__ . '/Views/Departement/Ajouter.php');
