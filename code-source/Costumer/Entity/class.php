<?php


class User
{

  public $first_name;
  public $last_name;
  public $email;
  public $password;
 


  //  take the informations of the app + connection db, it generates a hashed password using the password() method,
  //  then  checks if the email is already exist   using  check_user method  ,
  // and finally    saves the app infos  to the database using the save() method 
  public function signup($first_name,$last_name, $email, $password,$conn  )

  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->password = $password;
    $hashpass = $this->password($this->password);
    $user = $this->check_user($this->email,$conn );
    if ($user == false) {
      $this->save($this->first_name, $this->last_name, $this->email, $hashpass,$conn  );
      $succes = "welcom to EduSphere comunity <br/> your account was created succefly ,sign in now !!";
      return $succes;
    } else {
      $error = "This email is already used <br/> can you try to sign in to your account please !";
      return $error;
    }
  }

  // if the email il existe it compare the using password with the entred with the stored password by calling test_pass method 
  public function signin($email, $password,$conn )
  {
    $this->email = $email;
    $this->password = $password;
    $user = $this->check_user($this->email,$conn );
    if ($user == false) {
      $error = "This account is not exist <br> try to create an account if you  want to join the community ";
      return $error;
    } else {
      $ex_pass = $user['password'];
      $test = $this->test_pass($this->password, $ex_pass);
      if ($test) {
        session_start();
        $_SESSION['Id_costumer'] = $user['Id_costumer'];
        header("Location:apphom.php");
      }
    }
  }
  public function password($password)
  {
    $hashvalue = password_hash($password, PASSWORD_DEFAULT);
    return $hashvalue;
  }

  public function test_pass($password, $ex_pass)
  {
    $result = password_verify($password, $ex_pass);
    return $result;
  }

  public function check_user($email,$conn )
  {
    $sql = "SELECT * FROM `costumer`  WHERE `email` = '$email'";
    $user = $conn->query($sql);
    $user = $user->fetch(PDO::FETCH_ASSOC);
    return $user;

  }

  public function save($first_name,$last_name, $email, $password, $conn)
  {
 
    $sql = "INSERT INTO `costumer` (`first_name`,`last_name`,`email`, `password`) VALUES ('$first_name','$last_name','$email','$password')";

    $conn->query($sql);
  }






}