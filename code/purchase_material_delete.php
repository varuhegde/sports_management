<?php 
include('../db_connect/db_connect.php');
$purchase_material_id=$_REQUEST['purchase_material_id'];
$sql="delete from purchase_material where purchase_material_id=$purchase_material_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='purchase_material_view.php';
</script>