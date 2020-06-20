<?php
require('models/Login.php');
require ('models/Category.php');
require('models/Register.php');
$categories = getAllCategories();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case'signinForm':
            $pageTitle='Sign In Page';
            include ('views/login.php');
            break;

        case'signin':
        if (!empty($_POST)) {
            if (empty($_POST['email']) || empty($_POST['password'])) {
                if (empty($_POST['email'])){
                    $_SESSION['messages'][] = 'Email is required';
                }
                if (empty($_POST['password'])){
                    $_SESSION['messages'][] = 'Password is required';
                }
                header('Location:index.php?p=login&action=signinForm');
                exit;
            } else {
                $login = userlogin($_POST['email'], $_POST['password']);
                if ($login != false) {
                    $user = getUser();
                    $_SESSION['messages'][] =  'You are succesfully signed-in !';
                            if($user){
                                 $_SESSION['user'] = $user;
                            }
                    header('location:index.php');
                    exit;
                }
                else {
                    echo 'Validation error';
                }
            }
        }
        break;
    }
}


