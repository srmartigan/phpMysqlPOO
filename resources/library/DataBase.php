<?php

require_once('/opt/lampp/htdocs/tutoriales/phpMysql/resources/config.php');

$datesMysql = [
    'host' => $config['db']['mysql']['host'],
    'dbname' => $config['db']['mysql']['dbname'],
    'user' => $config['db']['mysql']['username'],
    'password' => $config['db']['mysql']['password']
];
$conexion = connectBaseDates();


/**
 * conectarBaseDatos
 *
 * @return PDO
 */
function connectBaseDates(): PDO
{
    $datesMysql = $GLOBALS["datesMysql"];
    try {
        $dsn = 'mysql:host=' . $datesMysql['host'] . ';dbname=' . $datesMysql['dbname'];
        $conexion = new PDO($dsn, $datesMysql['user'], $datesMysql['password']);
    } catch (PDOException $e) {
        exit("¡Error!: $e->getMessage()");
    }

    return $conexion;
}

/**
 * addContact
 *
 * @param mixed $dataContact
 *
 * @return void
 */
function addContact(array $dataContact)
{
    $conexion = getConexion();
    $sql = 'INSERT INTO contactos (name,telephone,email,address) 
        VALUES ("' .
        $dataContact["name"] . '","' .
        $dataContact["telephone"] . '","' .
        $dataContact["email"] . '","' .
        $dataContact["address"] . '")';

    $conexion->query(utf8_decode($sql));
}

function getContacts(): array
{
    $conexion = getConexion();
    $sql = 'SELECT * FROM contactos';
    $dataPDOStatement = $conexion->query($sql);
    $data = $dataPDOStatement->fetchAll();

    return $data;
}

function delContact(int $contact)
{
    $conexion = getConexion();
    $sql = "Delete From contactos Where id='$contact'";
    return $conexion->query($sql);
}

function getConexion(): PDO
{
    $conexion = $GLOBALS['conexion'];
    if (!$conexion) {
        $conexion = connectBaseDates();
    }
    return $conexion;
}
