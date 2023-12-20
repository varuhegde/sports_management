<?php 
include('../db_connect/db_connect.php');
$achievement_id=$_REQUEST['achievement_id'];
$sql="delete from achievements where achievement_id=$achievement_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='achievements_view.php';
</script>