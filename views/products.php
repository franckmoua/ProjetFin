<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/stylesProduct.css" rel="stylesheet">
    <title><?php $pageTitle;?></title>
</head>
<?php require ('partials/header.php'); ?>
<body>

<section class="container">
    <h2>All products</h2>
<?php foreach($products as $product): ?>
    <img src="assets/images/product/<?= $product['image'] ?>" alt="<?= $product['image'] ?>" class="trending-images">
    <p><a href="index.php?p=product&product_id=<?= $product['id'] ?>"> <?= $product['name']?></a></p>
    <p class="price"><?= $product['price'] ?>€</p>
<?php endforeach; ?>

</section>
</body>
<?php require ('partials/footer.php'); ?>
</html>



