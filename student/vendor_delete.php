<?php 
include('../db_connect/db_connect.php');
$vendor_id=$_REQUEST['vendor_id'];
$sql="delete from vendor where vendor_id=$vendor_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='vendor_view.php';
</script>
