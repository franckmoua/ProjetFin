<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $selectedProduct['name'] ?></title>
    <?php require 'partials.header.php'; ?>
</head>
<body>
<p>Nom du produit : <?= $selectedProduct['name'] ?> </p>

    <div>
        <main>
            <h1><?= $selectedProduct['name'] ?></h1>
            <div>Catégorie :
                <?php foreach($categories as $category): ?>
                    <?php if($category['id'] == $selectedProduct['category_id']): ?>
                        <?= $category['name']; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div><?= $selectedProduct['description'] ?></div>
            <div><?= $selectedProduct['price'] ?> €</div>
            <img src="../assets/images/product/Laneige3.jpg"<?= $selectedProduct['image']?>"><br>
        </main>s
    </div>
</body>
</html>

