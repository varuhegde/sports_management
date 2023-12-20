<?php
include("../db_connect/db_connect.php");
$material_id=$_POST['material_id'];
$student_id=$_POST['student_id'];
$pd_id=$_POST['pd_id'];
$issue_date=$_POST['issue_date'];

$sql3="select * from stock where material_id='$material_id'";
	$res3=mysqli_query($conn,$sql3);
	$row3=mysqli_fetch_array($res3);
	
	$stock=$row3['stock']-1;
	
$sql="insert into material_issue values(null,'$material_id','$student_id','$pd_id','$issue_date','ISSUED')";
mysqli_query($conn,$sql);

$sql2="update stock set stock='$stock' where material_id='$material_id'";
mysqli_query($conn,$sql2);

?>
<script>
alert("Material Issued inserted..");
document.location="material_issue_view.php";
</script>