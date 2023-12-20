<?php 
include('../db_connect/db_connect.php');
$event_request_id=$_REQUEST['event_request_id'];
$sql="delete from event_request where event_request_id=$event_request_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='event_request_view.php';
</script>