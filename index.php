<?php
session_start();
require ('helpers.php');
if(isset($_GET['p'])){
    switch ($_GET['p']) {
        case 'category' :
            require 'controllers/categoryController.php';
            break;

        case 'product' :
            require 'controllers/productController.php';
            break;

        case 'register' :
            require 'controllers/registerController.php';
            break;

        case 'login' :
            require 'controllers/loginController.php';
            break;

        case 'userProfile' :
            require 'controllers/userProfileController.php';
            break;

        case'userForm' :
            require'controllers/userFormController.php';
            break;

        case'index':
            require'controllers/indexController.php';
            break;

        case'cart':
            require 'controllers/cartController.php';

        default :
            require 'controllers/indexController.php';
    }
}
else{
            require 'controllers/indexController.php';
}


if(isset($_SESSION['messages'])){
    unset($_SESSION['messages']);
}
if(isset($_SESSION['old_inputs'])){
    unset($_SESSION['old_inputs']);
}