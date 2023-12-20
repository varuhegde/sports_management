<?php
include("../db_connect/db_connect.php");
$branch_id=$_POST['branch_id'];
$branch_name=$_POST['branch_name'];
$branch_description=$_POST['branch_description'];
$sql="update branch set branch_name='$branch_name',branch_description='$branch_description' where branch_id='$branch_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updtated..");
document.location="branch_view.php";
</script>