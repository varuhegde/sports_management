<?php
include("../db_connect/db_connect.php");
$event_request_id=$_POST['event_request_id'];
$event_id=$_POST['event_id'];
$student_id=$_POST['student_id'];
$request_date=$_POST['request_date'];
$event_request_status=$_POST['event_request_status'];
$sql="update event_request set event_id='$event_id',student_id='$student_id',request_date='$request_date',event_request_status='$event_request_status' where event_request_id='$event_request_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updated..");
document.location="event_request_view.php";
</script>