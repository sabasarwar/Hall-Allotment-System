
<?php
session_start();
include('connect.php');
$var= @$_GET['token'];


// Student Login

if($var=='student')
{
 $user=$_POST['user'];
 $pass= $_POST['pass'];

$q="select * from student where enno='$user' and password= '$pass'";
$run=mysqli_query($con,$q);
$num = mysqli_num_rows($run);
if($num!=0)
{
	$_SESSION['student']=$user;
	echo "<script>window.open('stdlogin.php','_self')</script>";
}
else
{
	echo "<script>alert('Incorrect Id or Password')</script>";
	echo "<script>window.open('index.php#student','_self')</script>";
}

}


// staff login

if($var=='staff')
{
	$user=$_POST['user'];
	$pass= $_POST['pass'];

$q="select * from staff where sid='$user' and pass= '$pass'";
$run=mysqli_query($con,$q);
$num = mysqli_num_rows($run);
if($num!=0)
{
	$_SESSION['staff']=$user;
	echo "<script>window.open('stflogin.php','_self')</script>";
}
else
{
	echo "<script>alert('Incorrect Id or Password')</script>";
	echo "<script>window.open('index.php#staffmember','_self')</script>";
}
}

// admin login

if($var=='admin')
{
	$user=$_POST['auser'];
	$pass= $_POST['apass'];

$q="select * from admin where adname='$user' and adpass= '$pass'";
$run=mysqli_query($con,$q);
$num = mysqli_num_rows($run);
if($num!=0)
{
	$_SESSION['admin']=$user;
	echo "<script>window.open('adminlogin.php','_self')</script>";
}
else
{
	echo "<script>alert('Incorrect Id or Password')</script>";
	echo "<script>window.open('index.php#admin','_self')</script>";
}
}








?>