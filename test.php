<?php
if(empty($_SERVER['CONTENT_TYPE']))
{
    $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded";
}

echo $_POST['ss'];?>

<form action='' method="POST">
    <input name="ss" id="ss" type="text" />
    <input type="submit" name="submit">
</form>