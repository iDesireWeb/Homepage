<?php
/**
 * Created by PhpStorm.
 * User: Tobias
 * Date: 02.04.2016
 * Time: 23:54
 */ ?>

<div style=" max-width: 400px; margin: 0 auto">
    <?php
    if (isset($_POST["inputUsername"]) && isset($_POST["inputPassword"])) {
        $usersystem = new \id\UserSystem();
        if(!$usersystem->isPasswordOk($_POST["inputUsername"],$_POST["inputPassword"])) { ?>
            <div style="text-align: center" class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Username / Passwort falsch!</strong>
            </div>
        <?php } else {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $_POST["inputUsername"];
            echo "passwort ok!!!!";
        }
    }


    ?>

    <form method="POST" action="index.php?site=login">
        <h1>Login</h1>

        <br>
        Username<br>
        <input type="text" style="max-width: 400px" class="form-control" id="inputUsername" placeholder="Username"><br>
        Passwort<br>
        <input type="password" style="max-width: 400px" class="form-control" id="inputPassword" placeholder="Password"><br>
        <br>
        <input type="submit" style="width: 400px" class="btn btn-primary btn-lg" name="submit" value="Einloggen">

    </form>
</div>