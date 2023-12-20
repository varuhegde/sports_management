<?php
include("../db_connect/db_connect.php");
$facility_name=$_POST['facility_name'];
$facility_description=$_POST['facility_description'];


$facility_photo=$_FILES['facility_photo']['name'];
$tmp_location=$_FILES['facility_photo']['tmp_name'];
$target="../images/".$facility_photo;
move_uploaded_file($tmp_location,$target);

$sql="insert into facility values(null,'$facility_name','$facility_description','$facility_photo')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted..");
document.location="facility_view.php";
</script>