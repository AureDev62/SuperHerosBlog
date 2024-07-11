<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);


require_once('./app/controllers/_main_controllers.php');


if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'home':
            home();
            break;

        case 'signin':
            signin();
            break;

        case 'signup':
            signup();
            break;

        case 'contact':
            contact();
            break;


        default:
            home();
            break;
    }
} else {
    home();
}
