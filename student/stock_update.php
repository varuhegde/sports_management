<?php 
include('../db_connect/db_connect.php');
$stock_id=$_POST['stock_id'];
$material_id=$_POST['material_id'];
$stock=$_POST['stock'];
$sql="update stock set material_id='$material_id',stock='$stock' where stock_id='$stock_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updated..");
document.location="stock_view.php";
</script>