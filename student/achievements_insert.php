<?php 
include("../db_connect/db_connect.php");
$student_id=$_POST['student_id'];
$sports_id=$_POST['sports_id'];
$achievement_details=$_POST['achievement_details'];
$achievement_date=$_POST['achievement_date'];
$sql = "insert into achievements values(null,'$student_id','$sports_id','$achievement_details','$achievement_date')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted..");
document.location="achievements_view.php";
</script>