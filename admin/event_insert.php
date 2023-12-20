<?php
include("../db_connect/db_connect.php");
$sports_id=$_POST['sports_id'];
$event_name=$_POST['event_name'];
$event_description=$_POST['event_description'];
$event_date=$_POST['event_date'];

$event_photo=$_FILES['event_photo']['name'];
$tmp_location=$_FILES['event_photo']['tmp_name'];
$target="../images/".$event_photo;
move_uploaded_file($tmp_location,$target);


$event_status=$_POST['event_status'];
$event_type=$_POST['event_type'];

$sql="insert into event values(null,'$sports_id','$event_name','$event_description','$event_date','$event_photo','$event_status','$event_type')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted..");
document.location="event_view.php";
</script>