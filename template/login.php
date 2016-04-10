<?php
/**
 * Created by PhpStorm.
 * User: Tobias
 * Date: 02.04.2016
 * Time: 23:54
 */
?>

<div style=" max-width: 400px; margin: 0 auto">
<?php
    if (isset($_GET['logout'])) { ?>
        <div style="text-align: center" class="alert alert-success">
                <strong>Du wurdest erfolgreich abgemeldet!</strong>
        </div>
    <?php }

    if (isset($_REQUEST["login_button"]))
    {

    if(!$_REQUEST['username'] == "" && !$_REQUEST['passwort'] == "") {
        $_username = id\Core::mres($_REQUEST['username']);
        $_passwort = id\Core::mres($_REQUEST['passwort']);
        $usersystem = new \id\UserSystem();
        if(!$usersystem->isPasswordOk($_username,$_passwort)) { ?>
            <div style="text-align: center" class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Username / Passwort falsch!</strong>
            </div>
        <?php } else {
            $_SESSION['login'] = true;
            $_SESSION['login_username'] = $_username;
            header( "refresh:3;url=index.php" );
            ?>
            <div style="text-align: center" class="alert alert-success">
                <strong>Du wirst weitergeleitet!</strong>
            </div>
            <?php
            exit();
        }
    } else {
        ?>
        <div style="text-align: center" class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Du musst alle felder ausfüllen!</strong>
        </div>
        <?php
    }
} ?>

    <form method="post" action="">
        <h1>Login</h1>

        <br>
        Username<br>
        <input type="text" style="max-width: 400px" class="form-control" id="username" name="username" placeholder="Username"><br>
        Passwort<br>
        <input type="password" style="max-width: 400px" class="form-control" id="passwort" name="passwort" placeholder="Password"><br>
        <br>
        <input type="submit" style="width: 400px" class="btn btn-primary btn-lg" name="login_button" id="login_button" value="Login">

    </form>
</div>