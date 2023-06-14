<?php
// include "Base.php";
include "client.php";

class Services extends Clients
{
    private  $price;

    public function GetPrice()
    {
        return $this->price;
    }
    public function SetPrice($price)
    {
        $this->price = $price;
    }
}
