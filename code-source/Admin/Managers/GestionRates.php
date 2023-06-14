<?php
class GestionRates
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

    public function  getRequestsNumber()
    {
        $sql = "SELECT  count(*)  FROM `requests` ";
        $result = mysqli_query($this->getConnection(), $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['count(*)'];
    }

    public function getDepartmentNumber()
    {
        $sql = "SELECT count(*) FROM    `department`";
        $result = mysqli_query($this->getConnection(), $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['count(*)'];
    }
    public function getDepartment()
    {
        $sql = "SELECT * FROM    `department`";
        $result = mysqli_query($this->getConnection(), $sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $row;
    }

    public function getServicesNumber()
    {
        $sql = "SELECT count(*)  FROM `service`";
        $result = mysqli_query($this->getConnection(), $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['count(*)'];
    }

    public function getCostumerNumber()
    {
        $sql = "SELECT count(*)  FROM `costumer`";
        $result = mysqli_query($this->getConnection(), $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['count(*)'];
    }
}
