<?php 
include('../db_connect/db_connect.php');
$facility_id=$_REQUEST['facility_id'];
$sql="delete from facility where facility_id=$facility_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='facility_view.php';
</script>