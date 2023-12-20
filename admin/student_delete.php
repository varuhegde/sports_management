<?php 
include('../db_connect/db_connect.php');
$student_id=$_REQUEST['student_id'];
$sql="delete from student where student_id=$student_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='student_view.php';
</script>