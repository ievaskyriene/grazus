<?php
use App\DB\JsonDb as DB;

try {
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS MyAccounts (
    idnr INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    surname VARCHAR(30) NOT NULL,
    ID INT(30) NOT NULL,
    IBAN INT(30) NOT NULL,
    lesos DECIMAL(10, 2) NOT NULL,
    USD DECIMAL(10, 2) NOT NULL,
    img VARCHAR(1000000) NOT NULL,


    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
   // use exec() because no results are returned
    DB::$pdo->exec($sql);
    echo 'Table MyAccounts created successfully';
  } catch(PDOException $e) {
    echo $sql . '<br>' . $e->getMessage();
  }