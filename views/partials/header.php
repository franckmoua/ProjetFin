<link href="assets/css/stylesNav.css" rel="stylesheet">
<body>
<header class="container-header">
    <nav class="container-nav">
       <div class="logo-register">
          <a href="index.php"><img class="logo" src="./assets/images/logo/logo1.png"></a>
            <a class="sign-top-right" href="index.php?p=register&action=form">Sign Up/Sign In</a>
       </div>
            <hr class="hr-header">
        <nav class="container-nav">
            <ul class="nav-category">
                <?php foreach ($categories as $category): ?>
                    <li class="nav-list"><a href="index.php?p=category&category_id=<?= $category['id']?>"><?= $category['name']?></a> </li>
                <?php endforeach;?>
                <li class="nav-list"><a href="index.php?p=product">Products</a></li>
            </ul>
        </nav>
</header>
</body>

