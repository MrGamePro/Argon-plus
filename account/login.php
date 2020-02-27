<?php

session_start();

$_SESSION["username"] = $_POST["username"];
// $_SESSION["email"] = $_POST["email"];
$_SESSION["password"] = $_POST["password"];
$username = $_SESSION["username"];
$password = $_SESSION["password"];

if ($username == "AlexGautier" && $password == "roshpinah") {
    header("location:../");
}
else {
    header("location:../examples/login.php?error=1");
}

?>