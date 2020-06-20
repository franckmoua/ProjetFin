<link href="assets/css/stylesNav.css" rel="stylesheet">
<body>
<header class="container-header">
    <nav class="container-nav">
       <div class="logo-register">
           <div class="logo-top-left">
                <a href="index.php"><img class="logo" src="./assets/images/logo/logo1.png"></a>
           </div>
           <div class="top-right">
           <?php if(!isset($_SESSION['user'])) : ?>
                <a class="sign-top-right" href="index.php?p=register&action=form">Sign Up/Sign In</a>
            <?php else : ?>

                <a  href="index.php?p=index&action=disconnect" class="sign-top-right" > Disconnect</a>
           <?php endif; ?>
                <a href="index.php?p=index&action=cart" class="sign-top-right"><img src="./assets/images/logo/34627.png"> </a>
                <?php if(isset($_SESSION['user'])): ?>
                <a href="index.php?p=userProfile&action=profile" class="sign-top-right"><img src="./assets/images/logo/pngwave.png" </a>
                <?php else: ?>
               <?php endif; ?>
           </div>
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

