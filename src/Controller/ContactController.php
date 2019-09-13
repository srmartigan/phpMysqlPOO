<?php


namespace DiverSoft\Controller;

require_once ('../vendor/autoload.php');
/**
 * Class ContactController
 * @package DiverSoft\Controller
 */
class ContactController
{
    public function addContact(array $contact){
        foreach ($contact as $key=>$datos) {
            echo $key.' : '.$datos . '<br />';
        }
    }
}
