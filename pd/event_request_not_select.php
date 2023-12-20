<?php 
include('../db_connect/db_connect.php');
$event_request_id=$_REQUEST['event_request_id'];
$sql="update event_request set event_request_status='NOT SELECTED' where event_request_id=$event_request_id";
mysqli_query($conn,$sql);
?>
<script>
alert('EVENT NOT SELECTED');
document.location='event_request_view.php';
</script>