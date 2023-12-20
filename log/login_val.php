<?php include('../db_connect/db_connect.php');
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];
$sql = "SELECT * FROM `login` WHERE password=$password and username='$username' and type='$type';";
$log=mysqli_query($conn,$sql);
$log_in=mysqli_fetch_assoc($log);
if ($log_in==0) {
	header("Location: login.html");
exit();
}
else{    
	$id=$log_in['login_id'];
	session_start();
	$_SESSION['id']=$id;
	$_SESSION['name']=$username;
	$_SESSION['type']=$type;

		header("Location: ../temp/index.php?id=$id");
exit();
}


?>
