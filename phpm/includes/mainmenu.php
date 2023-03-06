<?php
session_start();

if($_SESSION["valid_user"] != session_id()){
    header("Location: /phpm/index.php");
    exit;
}
if(isset($_REQUEST["logout"])){
    unset($_SESSION["valid_user"]);
    session_destroy();
    header("Location: phpm/index.php");
    exit;
}
?>


<link rel="stylesheet" href="/css/stilmall.css" type="text/css">
<nav id="mainmenu">

    <ul>
        <h1 id="firstpage">Startsidan</h1

        <li>
            <form id="theuslessform" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
                <input type="submit" name="logout" id="logout"  value="Sign out">
            </form>
        </li>

        <li><a href="kontakt.php">Contact</a></li>
        <li><a href="main.php">Home</a></li>
        <li><a href="omsidan.php">About</a></li>
    </ul>

</nav>
