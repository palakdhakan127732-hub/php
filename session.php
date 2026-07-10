<?php
session_start();

$_SESSION["RACHIT"] = $_POST["RACHIT"];

header("Location: display.php");
exit();
?>