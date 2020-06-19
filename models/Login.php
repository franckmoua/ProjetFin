<?php

function userlogin($emailLogin, $passwordLogin)
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
    $query->execute(
        [
            'email' => $emailLogin,
            'password' => md5($passwordLogin),
        ]
    );
    $userLogin = $query->fetch();

    return $userLogin;
}



