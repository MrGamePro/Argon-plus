<?php

session_start();

$_SESSION["username"] = $_POST["username"];
// $_SESSION["email"] = $_POST["email"];
$_SESSION["password"] = $_POST["password"];

echo('<p>'.$_SESSION["username"].'</p>');
echo('<p>'.$_SESSION["password"].'</p>');

?>