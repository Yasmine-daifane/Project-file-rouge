
<?php
include "../../Views/Layout/root.php";
require_once(__ROOT__ . '/Managers/GestionDepartment.php');


$GestionDepartment = new GestionDepartments;

$departement = $GestionDepartment->GetAALDepartment();
include_once(__ROOT__ . "/Views/Departement/index.php")
?>