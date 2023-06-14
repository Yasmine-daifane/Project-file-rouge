<?php
include "../Views/Layout/root.php";
require_once(__ROOT__ . '/Managers/GestionRates.php');
$GestionRates = new GestionRates;
$RatesRequests = $GestionRates->getRequestsNumber();
$CostumerNumber = $GestionRates->getCostumerNumber();
$DepartmentNumber = $GestionRates->getDepartmentNumber();
$ServicesNumber = $GestionRates->getServicesNumber();
$getDepartment = $GestionRates->getDepartment();
// echo "<pre>";
// var_dump($getDepartment);
// echo "</pre>";
include_once(__ROOT__ . "/Views/index.php");
