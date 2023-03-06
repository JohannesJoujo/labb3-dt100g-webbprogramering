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
?>

<?php
include("config.php");

date_default_timezone_set("Europe/Stockholm");
 $i= date("H");
if($i<=10){
    echo "Good morning ";
}elseif($i<=17){
    echo "Good day ";
}elseif($i<=22){
    echo "Good evening ";
}elseif($i<=24){
    echo "Good night ";
}
echo  $_SESSION["anvandare"]. " it is ". date("l"). " today";
//echo " you are now signed in";
//echo " Your password is: ". htmlspecialchars($_POST['pass']). "<br>";
?>


<?php
include("/Applications/XAMPP/xamppfiles/htdocs/phpm/includes/sidebar.php");
include("/Applications/XAMPP/xamppfiles/htdocs/phpm/includes/footer.php");
?>