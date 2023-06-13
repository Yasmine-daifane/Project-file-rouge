<?php 
include "client.php";
class Requests extends Clients 
{
      private $demande ;
      private $date_demande ;

      public function GetDemande(){

        return $this->demande ;
      }

      public function SetDemande ($demande){

        $this ->demande=$demande ;
      }

      public function GetDate_demande(){
        return   $this ->date_demande;
      }
      public function SetDate_demande($date_demande){
           $this ->date_demande=$date_demande ;
      }
}



?>