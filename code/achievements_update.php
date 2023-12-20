<?php 
include("../db_connect/db_connect.php");
$achievement_id=$_POST['achievement_id'];
$student_id=$_POST['student_id'];
$sports_id=$_POST['sports_id'];
$achievement_details=$_POST['achievement_details'];
$achievement_date=$_POST['achievement_date'];
$sql = "update achievements set student_id='$student_id',sports_id='$sports_id',achievement_details='$achievement_details',achievement_date='$achievement_date' where achievement_id='$achievement_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updated..");
document.location="achievements_view.php";
</script>