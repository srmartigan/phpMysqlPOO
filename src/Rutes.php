<?php
namespace DiverSoft;
require_once ('../vendor/autoload.php');
use DiverSoft\Controller\ContactController;

if (isset($_POST['contact']))
{
    $contact = $_POST['contact'];
    $contactController = new ContactController();
    $contactController->addContact($contact);
}

if (isset($_GET['delete_contact'])) {
    $idContact = $_GET['delete_contact'];
    $contactController = new ContactController();
    $contactController->delContact($idContact);
}
