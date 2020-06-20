<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/stylesRegister.css" rel="stylesheet">
    <title><?= $pageTitle; ?></title>
</head>
<a href="index.php">Return</a>
<body>
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
        <form action="index.php?p=register&action=signup" method="post">
            <h1>Sign up</h1>
            <p>Email</p>
            <input id="email" type="email" name="email" value=""><br>

            <p>Password</p>
            <input id="password" type="password" name="password"><br>

            <p>First Name</p>
            <input id="first_name" type="first_name" name="first_name"><br>

            <p>Last Name</p>
            <input id="last_name" type="last_name" name="last_name"><br>


            <input type="submit" class="btn" value="Sign up" >
            <p>
                Already a member? <a href="index.php?p=login&action=signinForm">Sign in</a>
            </p>
        </form>


    </div>
</div>
</body>
</html>


