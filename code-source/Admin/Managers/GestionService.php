<?php
require_once(__ROOT__ . '/Entity/Service.php');
class GestionServices
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

    public function Add($service, $id)
    {
        $nom = $service->GetName();
        $description = $service->GetDescription();
        $price = $service->GetPrice();
        // requête SQL
        // $sql = "INSERT INTO `service`(`name`, `description`,price, Id_department`) VALUES ('$nom','$description', '$price','$id')";
        $sql = "INSERT INTO `service` (`name`, `description`, `price`, `Id_department`) VALUES ('$nom','$description','$price','$id')";
        mysqli_query($this->getConnection(), $sql);
    }

    public function pages($items, $pagesNum, $itemsPerPage)
    {
        $pages = array();
        for ($i = 0; $i < $pagesNum; $i++) {
            array_push($pages, array_slice($items, $i * $itemsPerPage, ($i + 1) * $itemsPerPage));
        }
        return $pages;
    }


    public function rechercherParNom($nom, $id)
    {
        $Services_data = $this->searchServicesByName($nom, $id);
        // echo "<pre>";
        // var_dump($Services_data);
        // echo "<>pre>";
        $Services = array();
        foreach ($Services_data as $Service_data) {
            $Service = new Services();
            $Service->SetID($Service_data['Id_Service']);
            $Service->SetName($Service_data['name']);
            $Service->SetDescription($Service_data['description']);
            $Service->SetPrice($Service_data['price']);
            array_push($Services,   $Service);
        }

        return $Services;
    }
    private function searchServicesByName($nom, $id)
    {
        $sql = "SELECT * FROM service WHERE name LIKE ? AND `Id_department` = ? Order by Id_Service DESC";
        $stmt = $this->getConnection()->prepare($sql);
        $search_nom = "%$nom%";
        $search_id  = $id;
        $stmt->bind_param("si", $search_nom, $search_id);
        $stmt->execute();
        $query = $stmt->get_result();
        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }


    public function RechercherParId($id)
    {
        $sql = "SELECT * FROM service WHERE Id_Service= '$id'";
        $result = mysqli_query($this->getConnection(), $sql);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $Service_data = mysqli_fetch_assoc($result);
        $service = new Services();
        $service->SetID($Service_data['Id_Service']);
        $service->SetName($Service_data['name']);
        $service->SetDescription($Service_data['description']);
        $service->SetPrice($Service_data['price']);
        return   $service;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM service WHERE Id_Service= '$id'";
        mysqli_query($this->getConnection(), $sql);
    }

    public function Edit($id, $nom, $description, $price)
    {
        // Requête SQL
        $sql = "UPDATE service SET 
        name='$nom',description='$description',price='$price'
        WHERE  Id_Service= $id";
        //  
        mysqli_query($this->getConnection(), $sql);
        //
        if (mysqli_error($this->getConnection())) {
            $msg = 'Erreur' . mysqli_errno($this->getConnection());
            throw new Exception($msg);
        }
    }
}
