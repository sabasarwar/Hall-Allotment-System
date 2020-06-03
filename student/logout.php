<?php
session_start();

unset($_SESSION['student']);

echo "<script>alert('Logged out Successfully !!!')</script>";
echo "<script>window.open('index.php#student','_self')</script>";

?>
