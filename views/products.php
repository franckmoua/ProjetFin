<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php require ('partials/header.php'); ?>
<body>
<?php foreach($products as $product): ?>
    <p>Nom du produit : <a href="index.php?p=product&product_id=<?= $product['id'] ?>"> <?= $product['name']?></a></p>
<?php endforeach; ?>
</body>
<?php require ('partials/footer.php'); ?>
</html>



