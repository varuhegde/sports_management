<?php 
include('../db_connect/db_connect.php');
$stock_id=$_REQUEST['stock_id'];
$sql="delete from stock where stock_id=$stock_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='stock_view.php';
</script>