<?php


namespace Toni\ZavrsniProjekat\Controllers;


class Contact {
    
    public function index() {
        include('src/Views/header.php');
        include('src/Views/contact.php');
        include('src/Views/footer.php');
    }
}