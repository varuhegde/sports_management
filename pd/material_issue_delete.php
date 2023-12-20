<?php 
include('../db_connect/db_connect.php');
$material_issue_id=$_REQUEST['material_issue_id'];
$sql="delete from material_issue where material_issue_id=$material_issue_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='material_issue_view.php';
</script>