<?php
require_once 'models/Product.php';
require_once 'models/Category.php';
$categories = getAllCategories();
$products = getProducts();
$pageTitle='Liste de tous les produits';

if($products == false){
    header('Location:index.php');
    exit;
}

include 'views/products.php';
