<?php
require_once(__ROOT__ . '/Entity/client.php');
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




    public function GetAALRequests()
{
    $sql = 'SELECT c.id, c.first_name, c.last_name, c.email, r.demande, r.date_demande
            FROM costumer c
            JOIN requests r ON c.id = r.Id_costumer	';
         
    $query = mysqli_query($this->getConnection(), $sql);
    $clientsData = mysqli_fetch_all($query, MYSQLI_ASSOC);
    $clients = array();
    echo "<pre>";

    var_dump($clients);
    echo "</pre>";
    // foreach ($clientsData as $clientData) {
    //     $client = new Clients();
    //     $client->SetId($clientData['id']);
    //     $client->SetFirst_name($clientData['first_name']);
    //     $client->SetLast_name($clientData['last_name']);
    //     $client->SetEmail($clientData['email']);

    //     $request = new Requests();
    //     $request->SetDemande($clientData['demande']);
    //     $request->SetDate_demande($clientData['date_demande']);

    
    //     array_push($clients, $client);
    // }
    // return $clients;
}

}
    ?>