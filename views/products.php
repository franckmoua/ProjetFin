<a href="index.php">retour à l'index</a>

<?php require ('partials/header.php'); ?>
<?php foreach($products as $product): ?>
   <p>Nom du produit : <a href="index.php?p=product&product_id=<?= $product['id'] ?>"> <?= $product['name']?></a></p>
<?php endforeach; ?>

<?php require ('partials/footer.php'); ?>