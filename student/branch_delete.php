<?php 
include('../db_connect/db_connect.php');
$branch_id=$_REQUEST['branch_id'];
$sql="delete from branch where branch_id=$branch_id";
mysqli_query($conn,$sql);
?>
<script>
alert('values are deleted');
document.location='branch_view.php';
</script>