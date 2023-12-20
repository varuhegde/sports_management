<?php session_start();?>
<?php

include("db_connect/db_connect.php");
$username=$_REQUEST['username'];
$password=$_REQUEST['email_id'];

$dat=date('Y-m-d h:m:r');

$sql="select * from login where username='$username' and security_answer='$password'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$type=$row['type'];
$_SESSION['uname']=$username;
$_SESSION['type']=$type;

if($type=="admin")
{
header('location:admin/change pwd.php');
}
else if($type=="student")
{
header('location:student/change pwd.php');
}
else if($type=="pd")
{
header('location:pd/change pwd.php');
}
}
else
{
?>
<!-- <script>
alert("Invalid Username Or Security Answer");
history.back();
</script> -->
<?php
}

?>

