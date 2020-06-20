<?php
require ('models/UserProfile.php');
require ('models/Register.php');
$userSession = getUserSession();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {

        case'modification' :
            $pageTitle='Profile modification';
            require'views/userForm.php';

            break;
        case'':

    }
}