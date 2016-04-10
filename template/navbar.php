<?php
/**
 * Created by PhpStorm.
 * User: Tobias
 * Date: 03.04.2016
 * Time: 00:32
 */?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-list"></span>  iDesire</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav animated fadeInRight">
                <li <?php if(constant('current_site') == 'index') echo 'class="active"'; ?>><a href="index.php?site=index">Home</a></li>
                <li <?php if(constant('current_site') == 'forum_overview') echo 'class="active"'; ?>><a href="index.php?site=forum">Forum</a></li>
                <li <?php if(constant('current_site') == 'members') echo 'class="active"'; ?>><a href="#">Page 2</a></li>
                <li <?php if(constant('current_site') == 'aboutus') echo 'class="active"'; ?>><a href="#">Page 3</a></li>
            </ul>
            <?php
            if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
                $usersystem_navbar = new id\UserSystem();
                $navbar_user = $usersystem_navbar->getUserByName($_SESSION['login_username']);
                ?>
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="properties.php?type=showall" class="dropdown-toggle" data-toggle="dropdown">Willkommen, <?php echo $navbar_user->UserName; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?site=logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <?php
            } else { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?site=register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="index.php?site=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            <?php }

            ?>
        </div>




    </div>
</nav>


