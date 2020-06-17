<a href="index.php">retour à l'index</a>


<?php foreach($products as $product): ?>
   <p>Nom du produit : <a href="index.php?p=product&product_id=<?= $product['id'] ?>"> <?= $product['name']?></a></p>
<?php endforeach; ?>

