<?php


namespace DiverSoft;

use DiverSoft\Config;
use PDO;


class DataBase
{
    private $dataBase;
    private $conexionDataBase;

    public function __construct()
    {
        $this->dataBase = Config::getDataBaseMysql();
        $this->conexionDataBase = $this->conexionDataBase();
    }


    private function conexionDataBase(): PDO
    {

        try {
            $dsn = 'mysql:host=' . $this->dataBase['host'] . ';dbname=' . $this->dataBase['dbname'];
            $conexionDataBase = new PDO($dsn, $this->dataBase['username'], $this->dataBase['password']);
        } catch (PDOException $e) {
            exit("¡Error!: $e->getMessage()");
        }
        return $conexionDataBase;
    }

    public function addContact(array $contact) : void
    {
        $sql = 'INSERT INTO contactos (name,telephone,email,address) 
        VALUES ("' .
            $contact["name"] . '","' .
            $contact["telephone"] . '","' .
            $contact["email"] . '","' .
            $contact["address"] . '")';

        $this->conexionDataBase->query(utf8_decode($sql));
    }

    public  function allContacts() : array
    {
        $sql = 'SELECT * FROM contactos';
        $dataPDOStatement = $this->conexionDataBase->query($sql);
        return $dataPDOStatement->fetchAll();
    }

    public function delContact($idContact) : void
    {
        $sql = "Delete From contactos Where id='$idContact'";
        $this->conexionDataBase->query($sql);
    }
}
