<?php
require 'models/UserProfile.php';
require 'models/Register.php';
$user = $_SESSION['user'];
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case'profile':
            $pageTitle = 'User Profile';
            $userInfos = getUserInformations($_SESSION['user']['id']);
            include 'views/userProfile.php';
            break;

        case'order':
            $pageTitle = "list of order";
            break;

        case'edit':
            $pageTitle = "Status edit";
            if (!empty($_POST)) {
                if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email'])) {

                    if (empty($_POST['first_name'])) {
                        $_SESSION['messages'][] = 'First name is required';
                    }
                    if (empty($_POST['last_name'])) {
                        $_SESSION['messages'][] = 'Last name is required';
                    }
                    if (empty($_POST['email'])) {
                        $_SESSION['messages'][] = 'Email is required';
                    }

                    $_SESSION['old_inputs'] = $_SESSION['user'];
                    header('Location:index.php?p=controller=userProfile&action=edit=' . $_SESSION['id']);
                    exit;
                } else {
                    $user = getUser();
                    if ($user == true) {
                        header('Location:index.php?p=controller=userProfile&action=form');
                        $_SESSION['messages'][] = 'The email exist already';
                        exit;
                    }
                    $result = update($_SESSION['user']['id'], $_POST);
                    $_SESSION['messages'][] = $result ? 'Profile updated !' : 'Error';
                    header('Location:index.php?p=controller=userProfile&action=profile');
                    exit;
                }
            }
            include 'views/userForm.php';
            break;

        case'disconnect':
            unset($_SESSION['user']);

            $_SESSION['messages'][] = 'You have succesfully been disconnected';
            header('Location:index.php');
            exit;

            break;

    }
}