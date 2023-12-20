<?php
include("../db_connect/db_connect.php");
$material_issue_id=$_POST['material_issue_id'];
$material_id=$_POST['material_id'];
$student_id=$_POST['student_id'];
$pd_id=$_POST['pd_id'];
$issue_date=$_POST['issue_date'];
$issue_status=$_POST['issue_status'];
$sql="update material_issue set material_id='$material_id',student_id='$student_id',pd_id='$pd_id',issued_date='$issue_date',issued_status='$issue_status' where material_issue_id='$material_issue_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updated..");
document.location="material_issue_view.php";
</script>