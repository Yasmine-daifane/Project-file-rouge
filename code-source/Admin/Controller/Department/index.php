
<?php
include "../../Views/Layout/root.php";
require_once(__ROOT__ . '/Managers/GestionDepartment.php');


$GestionDepartment = new GestionDepartments;
require_once(__ROOT__ . '/Managers/GestionRates.php');
$GestionRates = new GestionRates;
$getDepartment = $GestionRates->getDepartment();
$departement = $GestionDepartment->GetAALDepartment();
include_once(__ROOT__ . "/Views/Departement/index.php")
?>