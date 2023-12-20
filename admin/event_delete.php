<?php 
include('../db_connect/db_connect.php');
$event_id=$_REQUEST['event_id'];
$sql="delete from event where event_id=$event_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='event_view.php';
</script>