<?php
require_once(__ROOT__ . '/Entity/Request.php');
class GestionRequests
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

    public function UpdateStatus($id, $statuse)
    {
        $sql = "UPDATE `requests` SET `status` = '$statuse' WHERE Id_request = $id";
        // echo "<pre>";
        // var_dump($sql);
        // echo "</pre>";
        // echo "<pre>";
        // var_dump(mysqli_query($this->getConnection(), $sql));
        // echo "</pre>";
        mysqli_query($this->getConnection(), $sql);
        // echo "<pre>";
        // var_dump(mysqli_error($this->getConnection()));
        // echo "</pre>";
    }

    public function pages($items, $pagesNum, $itemsPerPage)
    {
        $pages = array();
        for ($i = 0; $i < $pagesNum; $i++) {
            array_push($pages, array_slice($items, $i * $itemsPerPage, ($i + 1) * $itemsPerPage));
        }
        return $pages;
    }
    public function GetAllRequests()
    {
        $sql = 'SELECT c.Id_costumer, c.first_name, c.last_name, c.email, r.demande, r.date_demande,r.status,r.Id_request, s.name as name_service
            FROM requests r
            JOIN costumer c ON c.Id_costumer = r.Id_costumer
            JOIN service s ON s.Id_Service = r.Id_Service ORDER BY date_demande DESC';
        $query = mysqli_query($this->getConnection(), $sql);
        $RequestsData = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $Requests = array();
        foreach ($RequestsData as $RequestData) {
            $request = new Requests();
            $request->SetFirst_name($RequestData['first_name']);
            $request->SetLast_name($RequestData['last_name']);
            $request->SetEmail($RequestData['email']);
            $request->Setstatus($RequestData['status']);
            $request->SetDemande($RequestData['demande']);
            $request->SetDate_demande($RequestData['date_demande']);
            $request->SetId($RequestData['Id_request']);
            $request->SetName($RequestData['name_service']);
            array_push($Requests, $request);
        }
        return $Requests;
    }
}
