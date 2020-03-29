<?php



session_start();

unset($_SESSION["login"]);  
session_unset();
session_destroy();
ob_start();
ob_end_flush();


header("Location: index.php");

?>