<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle;?></title>
</head>
<body>
<?php if(isset($_SESSION['messages'])): ?>
    <div>
        <?php foreach($_SESSION['messages'] as $message): ?>
            <h3><?= $message ?></h3>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<a href="index.php?p=userProfile&action=profile">Back to profile</a>

<form action="index.php?p=userProfile&action=profile" method="post">

    <label for="email">Email :</label>
    <input id="email" type="email" name="email" value="<?= isset($_SESSION['user']) ? $_SESSION['user']['email'] : '' ?><?= isset($userInfo) ? $userInfo['name'] : '' ?>" required><br>


    <label for="first_name">First name :</label>
    <input id="first_name" type="first_name" name="first_name" value="<?= isset($_SESSION['user']) ? $_SESSION['user']['first_name'] : '' ?><?= isset($userInfo) ? $userInfo['name'] : '' ?>" required><br>

    <label for="last_name">Last name :</label>
    <input id="last_name" type="last_name" name="last_name" value="<?= isset($_SESSION['user']) ? $_SESSION['user']['last_name'] : '' ?><?= isset($userInfo) ? $userInfo['name'] : '' ?>" required><br>


    <button type="submit">Save</button>

</form>
</body>
</html>