<?php 
class Base 
{
    protected  $id ;
    protected  $name ;
    protected  $description  ;


    public function GetID(){
    return $this->id ;
    }
    public function SetID($id){

      $this ->id =$id ;
    }
    public function GetName(){
     
        return $this->name;

    }

    public function SetName($name){

        $this->name=$name ;
    }

    public function GetDescription(){
        return $this ->description ;
    }

    public function SetDescription($description){

        $this->description=$description  ;
    }

}

























?>