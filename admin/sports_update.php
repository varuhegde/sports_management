			
<?php 
include('../db_connect/db_connect.php');
$sports_id=$_POST['sports_id'];
$sports_name=$_POST['sports_name'];
$sports_description=$_POST['sports_description'];


$sports_photo=$_FILES['sports_photo']['name'];
$tmp_location=$_FILES['sports_photo']['tmp_name'];
$target="../images/".$sports_photo;
move_uploaded_file($tmp_location,$target);

$sports_type=$_POST['sports_type'];
$sql="update sports set sports_name='$sports_name',sports_description='$sports_description',sports_photo='$sports_photo',sports_type='$sports_type' where sports_id='$sports_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updated..");
document.location="sports_view.php";
</script>