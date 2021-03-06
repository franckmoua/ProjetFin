<?php
require('models/Register.php');
require('models/Category.php');

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'form':
            $pageTitle='Sign Up Page';
            include 'views/register.php';
            break;
        case 'signup':
            if(empty($_POST['email']) || empty($_POST['password']) || empty($_POST['first_name']) || empty($_POST['last_name'])){
                if(empty($_POST['email'])){
                    $_SESSION['messages'][] = 'Email is required ';
                }
                if(empty($_POST['password'])){
                    $_SESSION['messages'][] = 'Password is required ';
                }
                if(empty($_POST['first_name'])){
                    $_SESSION['messages'][] = 'First name is required ';
                }
                if(empty($_POST['last_name'])){
                    $_SESSION['messages'][] = 'Last name is required ';
                }
                header('Location:index.php?p=register&action=form');
                exit;
            }
            else{
                $user = getUser();
                if($user == true){
                    header('Location:index.php?p=register&action=form');
                    $_SESSION['messages'][] = 'The email exist already';
                    exit;
                }
                $resultInsert = insertDB();
                if($resultInsert == true){
                    $_SESSION['messages'][] = 'You have succesfully signed up !';
                    if($resultInsert){
                        $_SESSION['user'][] = $user;
                    }
                }
                header('location:index.php');
                exit;
            }
            break;
    }
}

