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
                    $_SESSION['messages'][] = 'Le champ email est obligatoire !';
                }
                if(empty($_POST['password'])){
                    $_SESSION['messages'][] = 'Le champ password est obligatoire !';
                }
                if(empty($_POST['first_name'])){
                    $_SESSION['messages'][] = 'Le champ first name est obligatoire !';
                }
                if(empty($_POST['last_name'])){
                    $_SESSION['messages'][] = 'Le champ last name est obligatoire !';
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
                    $_SESSION['messages'][] = 'You are succesfully signed-up !';
                    if($user){
                        $_SESSION['user'][] = $user;
                    }
                }
                header('location:index.php');
                exit;
            }
            break;
    }
}

