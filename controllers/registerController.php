<?php
require('models/Register.php');
require('models/Category.php');

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'form':
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

            }

            elseif (isset($_POST['email'])){


            }

            else{
                $resultInsert = insertDB();


                $_SESSION['messages'][] = $resultInsert ? 'You are succesfully signed-up !' : 'Error while trying to sign up';
                header('location:index.php');
                exit;
            }

            break;
    }
}

