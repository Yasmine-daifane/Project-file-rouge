
<?php
// include "Request.php";
include "Base.php";

class Clients extends Base
{
    private $first_name;
    private  $last_name;
    private $email;
    private $password;

    public function GetFirst_name()
    {

        return $this->first_name;
    }
    public function SetFirst_name($first_name)
    {
        $this->first_name = $first_name;
    }
    public function GetLast_name()
    {
        return $this->last_name;
    }
    public function SetLast_name($last_name)
    {

        $this->last_name = $last_name;
    }
    public function GetEmail()
    {
        return $this->email;
    }
    public function SetEmail($email)
    {
        $this->email = $email;
    }
    public function GetPassword()
    {

        return $this->password;
    }

    public function SetPassword($password)
    {

        $this->password = $password;
    }
}





?>