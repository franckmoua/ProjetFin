<?php

function getAllCategories()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories');
    $categories =  $query->fetchAll();

    return $categories;
}


function getProductCategory($categoryId)
{
    $db = dbconnect();

    $query = $db->prepare("
        SELECT p.*
        FROM products p
        INNER JOIN product_categories pc ON p.id=pc.product_id
        WHERE pc.category_id = ?
    ");
    $query->execute([
        $categoryId
    ]);

    return $productCategory = $query->fetchAll();
}

function getCategory($id)
{
    $db = dbConnect();

    $query = $db->prepare("SELECT * FROM categories WHERE id = ?");
    $query->execute([$id]);

    $result = $query->fetch();

    return $result;
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
