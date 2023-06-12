<?php
class   Services extends Base 
{
    private  $price;



    public function GetPrice(){

        return $this -> price ;
    }
    public function SetPrice ($price){

        $this -> price=$price ;
    }
}




?>