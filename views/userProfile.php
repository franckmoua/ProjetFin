<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/stylesProfile.css" rel="stylesheet">
    <title><?= $pageTitle; ?></title>
</head>
<?php if (isset($_SESSION['messages'])): ?>
    <div>
        <?php foreach ($_SESSION['messages'] as $message): ?>
            <?= $message ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<body>


<a href="index.php?p=controllers">Back to shop</a>


<div class="title"></div>
<div class="wrapper">

        <div class="left">
            <h1><?= $_SESSION['user']['first_name'] ?>'s Profile </h1>

            <a href="index.php?p=userProfile&action=edit">Edit Profile</a>

            <a href="index.php?p=userProfile&action=disconnect">Disconnect</a>

            <?php if ($_SESSION['user']['id']): ?>
        </div>

        <div class="right">

            <h2>Informations</h2>
            <div class="info">
                <div class="data">
                    <h4>Email:</h4>
                    <p><?= ($_SESSION['user']['email']) ?></p>
                </div>
                <div class="data">
                    <h4>First Name:</h4>
                    <p><?= ($_SESSION['user']['first_name']) ?></p>
                </div>
                <div class="data">
                    <h4>Last Name:</h4>
                    <p><?= ($_SESSION['user']['last_name']) ?></p>
                </div>
            </div>

        </div>
    <?php endif; ?>
</div>

<div>



</div>
</body>
</html>


