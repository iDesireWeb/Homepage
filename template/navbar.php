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
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-list"></span>  iDesire</a>
        </div>
        <ul class="nav navbar-nav animated fadeInRight">
            <li <?php if(constant('current_site') == 'index') echo 'class="active"'; ?>><a href="index.php?site=index">Home</a></li>
            <li <?php if(constant('current_site') == 'forum_overview') echo 'class="active"'; ?>><a href="index.php?site=forum">Forum</a></li>
            <li <?php if(constant('current_site') == 'members') echo 'class="active"'; ?>><a href="#">Page 2</a></li>
            <li <?php if(constant('current_site') == 'aboutus') echo 'class="active"'; ?>><a href="#">Page 3</a></li>
        </ul>
    </div>
</nav>


