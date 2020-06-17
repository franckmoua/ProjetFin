<?php require ('partials/header.php'); ?>
    <a href="index.php">retour à l'index</a>
<?= $category['name']; ?>

<?php foreach ($productCategories as $productCategory) : ?>
<p>nom du produit : <a href="index.php?p=product&product_id=<?= $productCategory['category_id'] ?>"><?= $productCategory['name'] ?></a></p>
<?php endforeach; ?>

<?php require ('partials/footer.php'); ?>