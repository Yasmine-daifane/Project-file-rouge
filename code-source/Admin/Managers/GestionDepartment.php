<?php

require_once(__ROOT__ . '/Entity/department.php');
class GestionDepartments
{

    private $Connection = Null;
    private function getConnection()
    {
        if (is_null($this->Connection)) {
            $this->Connection = mysqli_connect('localhost', 'root', '', 'red-thread');
            // Vérifier l'ouverture de la connexion avec la base de données
            if (!$this->Connection) {
                $message = 'Erreur de connexion: ' . mysqli_connect_error();
                throw new Exception($message);
            }
        }
        return $this->Connection;
    }

    public function Add($department)
    {
        $nom = $department->GetName();
        $description = $department->GetDescription();
        // requête SQL
        $sql = "INSERT INTO `department`(`name`, `description`) VALUES ('$nom','  $description')";
        mysqli_query($this->getConnection(), $sql);
    }

    public function Delete($id)
    {
        $sql = "DELETE FROM department WHERE `Id_department`= '$id'";
        mysqli_query($this->getConnection(), $sql);
        echo "<pre>";
        var_dump(mysqli_error($this->getConnection()));
        echo "</pre>";
    }

    public function Edit($id, $nom, $description)
    {
        $sql = "UPDATE department SET 
        name='$nom', description='$description'
        WHERE Id_department= $id";

        mysqli_query($this->getConnection(), $sql);

        if (mysqli_error($this->getConnection())) {
            $msg = 'Erreur' . mysqli_errno($this->getConnection());
            throw new Exception($msg);
        }
    }

    public function GetAALDepartment()
    {
        $sql = 'SELECT * FROM department ';
        $query = mysqli_query($this->getConnection(), $sql);
        $Departments_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $Departments = array();
        foreach ($Departments_data as  $Department_data) {
            $Department = new Department();
            $Department->SetID($Department_data['Id_department']);
            $Department->SetName($Department_data['name']);
            $Department->SetDescription($Department_data['description']);
            array_push($Departments, $Department);
        }
        return   $Departments;
    }



    public function GetDepartmentbyId($id)
    {
        $sql = "SELECT * FROM department WHERE Id_department= $id";
        $result = mysqli_query($this->getConnection(), $sql);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $Department_data = mysqli_fetch_assoc($result);
        $Department = new Department();
        $Department->SetID($Department_data['Id_department']);
        $Department->SetName($Department_data['name']);
        $Department->SetDescription($Department_data['description']);
        return  $Department;
    }
}
