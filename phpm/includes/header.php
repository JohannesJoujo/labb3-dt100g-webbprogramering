<?php
session_start();

if($_SESSION["valid_user"] != session_id()){
    header("Location: index.php");
    exit;
}
if(isset($_REQUEST["logout"])){
    unset($_SESSION["valid_user"]);
    session_destroy();
    header("Location: index.php");
    exit;
}

include("/Applications/XAMPP/xamppfiles/htdocs/phpm/includes/mainmenu.php");
