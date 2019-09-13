<?php


namespace DiverSoft\Controller;

use DiverSoft\DataBase;

/**
 * Class ContactController
 * @package DiverSoft\Controller
 */
class ContactController
{
    private $dataBase;

    public function __construct()
    {
        $this->dataBase = new DataBase();
    }

    public function addContact(array $contact)
    {
        $this->dataBase->addContact($contact);
        header('Location:../public/createContact.php');
    }

    public function allContacts()
    {
        return $this->dataBase->allContacts();
    }

    public function delContact($idContact)
    {
        $this->dataBase->delContact($idContact);
        header('Location:../public/listContact.php');
    }
}
