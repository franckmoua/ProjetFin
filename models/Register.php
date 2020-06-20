<?php

function insertDB()
{
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO users(first_name, last_name, email, password) VALUE (?,?,?,?) ');
    $result= $query->execute(
        [
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            hash('md5',$_POST['password']),
        ]
    );
    return $result;
}

function getUser()
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM users WHERE email = ?');
    $query->execute(
        [
            $_POST['email'],
        ]
    );

    $result = $query->fetch();

    return $result;
}

function getUserName()
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM users WHERE id = ?');
    $query->execute(
        [
            $_SESSION['first_name']
        ]
    );

    $result = $query->fetch();

    return $result;
}
