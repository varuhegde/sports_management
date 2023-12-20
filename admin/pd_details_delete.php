<?php 
include('../db_connect/db_connect.php');
$pd_id=$_REQUEST['pd_id'];
$sql="delete from pd_details where pd_id=$pd_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='pd_details_view.php';
</script>