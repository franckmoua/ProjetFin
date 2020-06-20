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



