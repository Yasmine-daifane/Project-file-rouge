<?php
include "Service.php";
class Requests extends Services
{
  private $demande;
  private $date_demande;
  private $status;

  public function GetDemande()
  {

    return $this->demande;
  }

  public function SetDemande($demande)
  {

    $this->demande = $demande;
  }

  public function GetDate_demande()
  {
    return   $this->date_demande;
  }
  public function SetDate_demande($date_demande)
  {
    $this->date_demande = $date_demande;
  }
  public function Getstatuse()
  {
    return   $this->status;
  }
  public function Setstatus($status)
  {
    $this->status = $status;
  }
}
