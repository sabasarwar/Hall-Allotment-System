<?php
session_start();
unset($_SESSION['admin']);
echo "<script>alert('Logged out Successfully !!!')</script>";
echo "<script>window.open('admin.php','_self')</script>";
?>