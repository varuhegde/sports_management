<?php 
include('../db_connect/db_connect.php');
$material_id=$_REQUEST['material_id'];
$sql="delete from material where material_id=$material_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='material_view.php';
</script>