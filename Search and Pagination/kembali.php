<?php
session_start();


$_SESSION = [];

$_SESSION["login"] = true;

header("Location: index.php");
exit;


?>