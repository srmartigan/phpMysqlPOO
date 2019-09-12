<?php

namespace DiverSoft;
define( 'ABSPATH', dirname(__FILE__,2) . '/' );
require ABSPATH.'/vendor/autoload.php';
use DiverSoft\Saludos;


$saludo = new Saludos();

pintarSaludo();
$saludo->setSaludo('Estamos cambiando el saludo');
pintarSaludo();
$saludo->setSaludo('y lo cambiamos de nuevo');
pintarSaludo();


/*
*
*/
function pintarSaludo(): void
{
    global $saludo;
    echo $saludo->getSaludo() . '<br />';
}
