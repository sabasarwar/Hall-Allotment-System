<?php
session_start();
unset($_SESSION['staff']);
echo "<script>alert('Logged out Successfully !!!')</script>";
echo "<script>window.open('index.php#staffmember','_self')</script>";
?>