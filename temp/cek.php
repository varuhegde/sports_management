<?php session_start();?>
<?php


$type=$_SESSION['type'];



if($type=="admin")
{
header('location:../admin/home.php');
}
else if($type=="student")
{
header('location:../student/home.php');
}
else if($type=="pd")
{
header('location:../pd/home.php');
}



?>



