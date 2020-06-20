<?php

function getUserSession()
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM users WHERE id = ?');
    $query->execute(
        [
            $_SESSION['user']['id']
        ]
    );

    $result = $query->fetch();

    return $result;
}

function getUserInformations($id)
{

        $db = dbConnect();

        $get_user = $db->prepare('SELECT * FROM users WHERE id ='.$id);

        $userInfo =  $get_user->fetchAll();

        return $userInfo;
}


function update($id, $informations)
{
    $db = dbConnect();

    $query = $db->prepare('UPDATE users SET name = ?, first_name = ?, last_name = ?, email = ? WHERE id = ?');

    $result = $query->execute(
        [
            htmlspecialchars($informations['first_name']),
            htmlspecialchars($informations['last_name']),
            $informations['email'],
            $id,
        ]
    );

    return $result;
}
