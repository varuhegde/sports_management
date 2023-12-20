<?php
include("../db_connect/db_connect.php");
$material_id=$_POST['material_id'];
$student_id=$_POST['student_id'];
$pd_id=$_POST['pd_id'];
$issue_date=$_POST['issue_date'];
$issue_status=$_POST['issue_status'];
$sql="insert into material_issue values(null,'$material_id','$student_id','$pd_id','$issue_date','$issue_status')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted..");
document.location="material_issue_view.php";
</script>