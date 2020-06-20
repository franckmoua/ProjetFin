<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle; ?></title>
</head>
<?php if(isset($_SESSION['messages'])): ?>
    <div>
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<body>
<a href="index.php?p=controllers">Back to shop</a>

<h2><?= $_SESSION['user']['first_name'] ?>'s Profile </h2>

<div>
    
<a href="index.php?p=userProfile&action=edit">Edit Profile</a>

<a href="index.php?p=userProfile&action=disconnect">Disconnect</a>
</div>

<div>
<?php foreach($userInfos as $userInfo): ?>
    <p>
        First name: <?= ($userInfo['first_name']) ?><br>
        Last name: <?= ($userInfo['last_name']) ?><br>
        Email: <?= ($userInfo['email']) ?><br>
    </p>
    <?php endforeach; ?>
</div>

</body>
</html>


