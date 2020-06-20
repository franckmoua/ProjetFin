<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/stylesLogin.css" rel="stylesheet">
    <title><?= $pageTitle; ?></title>
</head>

<body>
<?php if(isset($_SESSION['messages'])): ?>
    <div>
        <?php foreach($_SESSION['messages'] as $message): ?>
            <h3><?= $message ?></h3>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<section class="loginBox">
    <div class="login">
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
</body>

</html>