<?php
require_once ('../library/DataBase.php');

$contact = $_POST['contact'];

addContact($contact);

header('Location:../../public/createContact.php');
