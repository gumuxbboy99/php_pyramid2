<?php
session_start();
if($_POST["u"] == "p" && $_POST["p"] == "p"){
$_SESSION["pass"] = "yes";
header("Location:myweb.php");
} else {
   header("Location:loginpage.php");
}
?>
