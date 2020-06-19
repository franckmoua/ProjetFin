<?php
if(!isset($_GET['category_id']) || !ctype_digit($_GET['category_id'])){
    header('Location:index.php');
    exit;
}
require_once 'models/Product.php';
require_once 'models/Category.php';

$categories = getAllCategories();
$category = getCategory($_GET['category_id']);

if($category == false){
    header('Location:index.php');
    exit;
}
$productCategories = getProductCategory($_GET['category_id']);

include 'views/category.php';
