<?php
require('models/Cart.php');

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'order':
            $pageTitle='Cart';
            include 'views/cart.php';
            break;

    }
}

