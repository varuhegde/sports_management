<?php
include("../db_connect/db_connect.php");
$event_id=$_POST['event_id'];
$student_id=$_POST['student_id'];
$request_date=$_POST['request_date'];
$event_request_status=$_POST['event_request_status'];
$sql="insert into event_request values(null,'$event_id','$student_id','$request_date','$event_request_status')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted..");
document.location="event_request_view.php";
</script>