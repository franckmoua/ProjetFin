<?php

function checkEmailExist()
{
    $db = dbConnect();

    $query = $db->query('SELECT email * FROM users WHERE ID = $_POST');
    $email =  $query->fetch();

    return $email;
}

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
