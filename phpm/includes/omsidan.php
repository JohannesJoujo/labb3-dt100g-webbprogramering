<?php
session_start();

if($_SESSION["valid_user"] != session_id()){
    header("Location: /phpm/index.php");
    exit;
}
if(isset($_REQUEST["logout"])){
    unset($_SESSION["valid_user"]);
    session_destroy();
    header("Location: /phpm/index.php");
    exit;
}
date_default_timezone_set("Europe/Stockholm");

include("/Applications/XAMPP/xamppfiles/htdocs/phpm/includes/mainmenu.php");

$day=date("l");
$time= date("Y-m-d H:i:s");
$server=$_SERVER['PHP_SELF'];
$serveragent=$_SERVER['HTTP_USER_AGENT'];

?>

<link rel="stylesheet" href="/css/stilmall.css" type="text/css">
<ol id="om">
    <h3>
        <li value="1" >Datum/klockslag:</li>
    </h3>
    <?php echo $time; if($day=="Friday"){
        echo "<br>"."Finally Friday".$time;
    }?>
    <h3>
        <li>Din IP-adress:</li>
    </h3>
    <?php echo $_SERVER['REMOTE_ADDR'];
    ?>
    <h3>
        <li>Sökväg/filnamn:</li>
    </h3>
    <?php echo $server; ?>
    <h3>
        <li>User agent-sträng:</li>
    </h3>
    <?php echo $serveragent;
    ?>
    <h3>
</ol>

<?php
/*
if($day=="Friday"){
echo "<br>"."Finally Friday".$time;
}
echo "<br>"."Your IP-adress:". $_SERVER['REMOTE_ADDR'];
echo "<br>"."The server is ".$server;
echo "<br>"."The  ".$serveragent;
*/
?>