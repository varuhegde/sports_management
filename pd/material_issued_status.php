<?php 
include('../db_connect/db_connect.php');
$material_issue_id=$_REQUEST['material_issue_id'];
$material_id=$_REQUEST['material_id'];
$sql3="select * from stock where material_id='$material_id'";
	$res3=mysqli_query($conn,$sql3);
	$row3=mysqli_fetch_array($res3);
	
	$stock=$row3['stock']+1;
	
$sql="update  material_issue set issued_status='RETURNED' where material_issue_id=$material_issue_id";
mysqli_query($conn,$sql);

$sql2="update stock set stock='$stock' where material_id='$material_id'";
mysqli_query($conn,$sql2);
?>
<script>
alert('Material Returned');
document.location='material_issue_view.php';
</script>