<?php
include("../db_connect/db_connect.php");
$event_id=$_POST['event_id'];
$student_id=$_POST['student_id'];
$request_date=$_POST['request_date'];

$sql="insert into event_request values(null,'$event_id','$student_id','$request_date','Pending')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted..");
document.location="event_request_view.php";
</script>