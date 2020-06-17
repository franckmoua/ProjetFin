<?php
require_once 'models/Product.php';
require_once 'models/Category.php';

$productItem = getProduct($id);

if($productItem == false){
    header('Location:index.php');
    exit;
}

include 'views/productItem.php';
