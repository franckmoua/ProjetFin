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


function getImage(){

}
