<?php
include(connect.php);



$query="select * from fseater where rno='' ";
$result=mysqli_query($con,$query);
$r=mysqli_fetch_array($result);
$r1=$r['r1'];
$r2=$r['r2'];
$r3=$r['r3'];
$r4=$r['r4'];
$r5=$r['r5'];

$resident=array('$r1','$r2','$r3','$r4','$r5',);
foreach($resident as $std)
{
if($std==0)
{


}
else
{
$qry="select * from student where enno='$std'";
$res=mysqli_query($con,$qry);
$row=mysqli_fetch_array($res);
}
}



?>