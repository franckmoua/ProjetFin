<?php
require_once 'models/Product.php';
require_once 'models/Category.php';

$categories = getAllCategories();


include 'views/index.php';
