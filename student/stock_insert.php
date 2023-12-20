<?php 
include('../db_connect/db_connect.php');
$material_id=$_POST['material_id'];
$stock=$_POST['stock'];
$sql="insert into stock values(null,'$material_id','$stock')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted..");
document.location="stock_view.php";
</script>