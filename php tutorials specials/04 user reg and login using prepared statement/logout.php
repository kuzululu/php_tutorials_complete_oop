<?php
session_start();

unset($_SESSION["id"]);
session_unset();
session_destroy();
header('location:login');
?>
