<?php
require_once 'models/Product.php';
require_once 'models/Category.php';
require 'models/Register.php';
$categories = getAllCategories();
$pageTitle = 'Kosmetics';
$products = getProducts();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case'disconnect':
            unset($_SESSION['user']);

            header('Location:index.php');
            exit;
            break;
    }

}

include 'views/index.php';
