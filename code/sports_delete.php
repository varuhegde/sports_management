<?php 
include('../db_connect/db_connect.php');
$sports_id=$_REQUEST['sports_id'];
$sql="delete from sports where sports_id=$sports_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='sports_view.php';
</script>