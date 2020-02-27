<?php

session_start();

echo('<p>'.$_SESSION["username"].'</p>');
echo('<p>'.$_SESSION["password"].'</p>');

session_destroy();
header("location:../");

?>