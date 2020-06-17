<?php

function getProduct($id)
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM products WHERE id = ?');

    $result = $query->execute([$id]);

    if ($result) {
        return $query->fetch();
    } else {
        return false;
    }
}

function getProducts()
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM products');

    $result = $query->execute();

    if ($result) {
        return $query->fetchAll();
    } else {
        return false;
    }
}
/*function getSongs($albumId = null)
{


    $db = dbConnect();

    if ($albumId != false) {

        $query = $db->prepare('SELECT * FROM songs WHERE album_id = ?');

        $result = $query->execute([$albumId]);

        $songs = $query->fetchAll();

    } else {
        $query = $db->query('SELECT * FROM songs');
        $songs = $query->fetchAll();
    }


    return $songs;
}


function getSong($id)
{

    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM songs WHERE id = ?');

    $result = $query->execute([$id]);

    if ($result) {
        return $query->fetch();
    } else {
        return false;
    }

} */
