<?php
namespace DiverSoft;

define('APP_PATH', dirname(__FILE__, 2) . '/');
define('TEMPLATES_PATH' , APP_PATH . '/resources/templates/');


require APP_PATH . '/vendor/autoload.php';

/* Inicializamos el sistema de errores Whoops */
$whoops = new \Whoops\Run;
$whoops->prependHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

class Config
{
    static private $dataBaseMysql = [
        "dbname" => "tutorialPhpMysql1",
        "username" => "root",
        "password" => "",
        "host" => "localhost"
    ];

    /**
     * @return array
     */
    public static function getDataBaseMysql(): array
    {
        return Self::dataBaseMysql;
    }

    public function __construct()
    {

    }

}
