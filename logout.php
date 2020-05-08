<?php
session_start();
unset($_SESSION['status']);
// setcookie("status",0);
header("location:login.php");

?>