<?php
require_once 'models/Product.php';
require_once 'models/Category.php';

$products = getProducts();

if($products == false){
    header('Location:index.php');
    exit;
}

include 'views/products.php';
