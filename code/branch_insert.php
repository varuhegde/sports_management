<?php
include("../db_connect/db_connect.php");
$branch_name=$_POST['branch_name'];
$branch_description=$_POST['branch_description'];
$sql="insert into branch values(null,'$branch_name','$branch_description')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted..");
document.location="branch_view.php";
</script>