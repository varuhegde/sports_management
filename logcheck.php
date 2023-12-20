<?php session_start();?>
<?php

include("db_connect/db_connect.php");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$dat=date('Y-m-d h:m:r');

$sql="select * from login where username='$username' and password='$password'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$type=$row['type'];
$_SESSION['uname']=$username;
$_SESSION['type']=$type;

if($type=="admin")
{
header('location:admin/home.php');
}
else if($type=="student")
{
header('location:student/home.php');
}
else if($type=="pd")
{
header('location:pd/home.php');
}
}
else
{
?>
<script>
alert("Invalid Username Or Password");
history.back();
</script>
<?php
}

?>

