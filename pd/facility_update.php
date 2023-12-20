<?php
include("../db_connect/db_connect.php");
$facility_id=$_POST['facility_id'];
$facility_name=$_POST['facility_name'];
$facility_description=$_POST['facility_description'];

$facility_photo=$_FILES['facility_photo']['name'];
$tmp_location=$_FILES['facility_photo']['tmp_name'];
$target="../images/".$facility_photo;
move_uploaded_file($tmp_location,$target);

$sql="update facility set facility_name='$facility_name',facility_description='$facility_description',facility_photo='$facility_photo' where facility_id='$facility_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updated..");
document.location="facility_view.php";
</script>