<?php
namespace App\DB;

use App\DB\DataBase;
use PDO;


class JsonDb implements DataBase
{
    private $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $db   = 'bankas';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
             $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
             throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
   

    public function create(array $userData) : void {
    
        $sql = "INSERT INTO bankas (firstname, surname, ID, IBAN, lesos, USD) VALUES (:firstname, :surname, :ID, :IBAN, :lesos, :USD)";
     
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($userData);

    }
 
    public function update(int $userId, array $userData) : void
    {
        $sql = "UPDATE bankas SET firstname=?, surname=?, ID=?, IBAN=?, lesos=?, USD=? WHERE ID = $userId";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$userData['firstname'], $userData['surname'], $userData['ID'], $userData['IBAN'], $userData['lesos'], $userData['USD']]);   

    }
 
    public function delete(int $userId) : void
    {
        $sql = "DELETE FROM bankas WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$userId]);
    }
 
    public function show(int $userId) : array
    {
        $sql = "SELECT * FROM bankas WHERE ID = $userId";
        $stmt = $this->pdo->query($sql);
        $row = $stmt->fetch();
        return $row ;
    }
    
    public function showAll() : array
    {
        $sql = "SELECT * FROM bankas";
        $stmt = $this->pdo->query($sql);
        return $table = $stmt->fetchAll();
    }

    private function save()
    {
        // file_put_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data2.json', json_encode($this->data));
    }
  
    function sortData($data){
        uasort($data, [$this,'surnameSort']);
        return $data;
       
    }

     public function surnameSort($a, $b) {
        $aLast = $a['surname'];
        $bLast = $b['surname'];
        return strcasecmp($aLast, $bLast);
    }
    
     
}
    

