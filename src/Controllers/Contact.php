<?php


namespace Toni\ZavrsniProjekat\Controllers;

use Toni\ZavrsniProjekat\Services\Auth\Security;


class Contact {
    
    public function index() {

        $securityService = new Security();

        include('src/Views/header.php');
        include('src/Views/contact.php');
        include('src/Views/footer.php');
    }
}