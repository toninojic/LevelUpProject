<?php

namespace Toni\ZavrsniProjekat\Controllers;

class AboutUs {

    public function index() {
        include('src/Views/header.php');
        include('src/Views/about-us.php');
        include('src/Views/footer.php');
    }

}