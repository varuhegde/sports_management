<?php
include("../db_connect/db_connect.php");
$material_name=$_POST['material_name'];
$material_description=$_POST['material_description'];

$material_photo=$_FILES['material_photo']['name'];
$tmp_location=$_FILES['material_photo']['tmp_name'];
$target="../images/".$material_photo;
move_uploaded_file($tmp_location,$target);


$sql="insert into material values(null,'$material_name','$material_description','$material_photo')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted..");
document.location="material_view.php";
</script>