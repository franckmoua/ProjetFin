<a href="index.php">retour à l'index</a>



<form action="index.php?p=register&action=signup" method="post">

    <label for="email">Email* :</label>
    <input id="email" type="email" name="email" value=""><br>

    <label for="password">Password* :</label>
    <input id="password" type="password" name="password" required><br>

    <label for="first_name">First name* :</label>
    <input id="first_name" type="first_name" name="first_name" required><br>

    <label for="last_name">Last name* :</label>
    <input id="last_name" type="last_name" name="last_name" required><br>


    <button type="submit">Sign up</button>

</form>
<small>* champs obligatoire</small>
<br><br>
    <p>
        Already a member? <a href="index.php?p=log&action=signin">Sign in</a>
    </p>
