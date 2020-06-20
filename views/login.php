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
<a href="index.php">Return</a>

<?php if (isset($_SESSION['messages'])): ?>
    <div class="messages">
        <?php foreach ($_SESSION['messages'] as $message): ?>
            <h3><?= $message ?></h3>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<div class="title"></div>
<div class="container">
    <div class="left"></div>
    <div class="right">
        <form action="index.php?p=login&action=signin" method="post">
            <h1>Sign in</h1>
            <p>Email</p>
            <input id="email" type="email" name="email" class="input1"><br>

            <p>Password</p>
            <input id="password" type="password" name="password" class="input2"><br>

            <input type="submit" class="btn" value="Sign in">
        </form>
    </div>
</div>


</body>



</html>