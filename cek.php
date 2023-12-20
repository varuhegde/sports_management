<?php session_start();?>
<?php


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

