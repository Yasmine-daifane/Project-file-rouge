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

    public function Add($service)
    {
        $Id = $service->GetID();
        $nom =$service->GetName();
        $description = $service->GetDescription();
        $price = $service-> GetPrice();
        // requête SQL
        $sql = "INSERT INTO `service`(`name`, `description`,price, `Id_Service`) VALUES ('$nom','$description', '$price','$Id')";
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
        $result = array();
        $clients = "SELECT * FROM services ";
        $clients = mysqli_query($this->getConnection(), $clients);
        $clients_data = mysqli_fetch_all($clients, MYSQLI_ASSOC);
        $Services_data = $this->searchServicesByName($nom, $id);
        $Services = array();
        foreach ( $Services_data as $Service_data) {
            $Service = new Service();
            $Service->SetID($Service_data['I Id_Service']);
            $Service->Setnom($Service_data['nom']);
            $Service->SetType($Service_data['description']);
            $Service->SetPrice($Service_data['price']);
            array_push( $Services,   $Service);
        }
        foreach($clients_data as $client_data) {
            $client = new Client();
            $client->SetID($client_data['Id_client']);
            $client->Setnom($client_data['nom']);
            $client->Setemail($client_data['email']);
            array_push( $Clients, $client);
        }
        $result = [$clients, $Service];
        return $result;
    }
    private function searchServicesByName($nom, $id)
    {
        $sql = "SELECT * FROM client WHERE nom LIKE ? AND `Id_client` = ?";
        $stmt = $this->getConnection()->prepare($sql);
        $search_nom = "%$nom%";
        $search_nom  = $id;
        $stmt->bind_param("si",   $search_nom ,   $search_nom ); // Use "si" for a string and integer parameter
        $stmt->execute();
        $query = $stmt->get_result();
        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }


    public function RechercherParId($id)
    {
        $sql = "SELECT * FROM services WHERE  Id_Service= '$id'";
        $result = mysqli_query($this->getConnection(), $sql);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $Service_data = mysqli_fetch_assoc($result);
        $service= new Services();
        $service->SetID(  $Service_data[' Id_Service']);
        $service->Setnom(  $Service_data['nom']);
        $service->SetType(  $Service_data['description']);
        $service->SetPrice(  $Service_data['price']);
        return   $service;
    }

    public function Supprimer($id)
    {
        $sql = "DELETE FROM services WHERE  Id_Service= '$id'";
        mysqli_query($this->getConnection(), $sql);
    }

    public function Modifier($id, $nom, $description,$price)
    {
        // Requête SQL
        $sql = "UPDATE services SET 
        nom='$nom',description='$description',price='$price'
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

?>