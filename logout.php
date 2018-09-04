<?php
session_start();
$_SESSION["pass"] = "no";
header("Location:loginpage.php");
?>