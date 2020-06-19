<?php
require_once 'models/Product.php';
require_once 'models/Category.php';

$categories = getAllCategories();
$pageTitle = 'Kosmetics';

include 'views/index.php';
