<?php
session_start();

session_destroy();
unset($_SESSION["username"]);
unset($_SESSION["level"]);
header('Location: login.php');

?>