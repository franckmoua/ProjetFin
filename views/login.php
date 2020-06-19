<link href="assets/css/stylesLogin.css" rel="stylesheet">
<?php require ('partials/header.php'); ?>
<head><title><?= $pageTitle; ?></title></head>

<?php if(isset($_SESSION['messages'])): ?>
    <div>
        <?php foreach($_SESSION['messages'] as $message): ?>
            <h3><?= $message ?></h3>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<body>
    <section class="loginBox">
        <div class="login">
            <h1>Login</h1>
                <hr>
            <form action="index.php?p=login&action=signin" method="post">
                <div class="inputs">
                <label for="email">Email :</label>
                <input id="email" type="email" name="email" ><br>

                <label for="password">Password :</label>
                <input id="password" type="password" name="password" ><br>
                </div>
            <button type="submit">Sign In</button>

            </form>
        </div>
    </section>
<?php require ('partials/footer.php'); ?>
</body>
