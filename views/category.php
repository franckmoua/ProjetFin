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
<div class="position-heigth">
<a href="index.php">retour à l'index</a>
<?= $category['name']; ?>

<?php foreach ($productCategories as $productCategory) : ?>
    <p>nom du produit : <a href="index.php?p=product&product_id=<?= $productCategory['category_id'] ?>"><?= $productCategory['name'] ?></a></p>
<?php endforeach; ?>

<?php require ('partials/footer.php'); ?>
</div>
</body>
</html>
