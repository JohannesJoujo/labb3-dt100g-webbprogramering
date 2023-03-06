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

include("/Applications/XAMPP/xamppfiles/htdocs/phpm/includes/mainmenu.php");
?>
<a href ="mailto:jojo2109@student.miun.se">Email</a>
<?php
echo ": jojo2109@student.miun.se";
?>