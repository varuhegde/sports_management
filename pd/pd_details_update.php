						
<?php
include('../db_connect/db_connect.php');
$pd_id=$_POST['pd_id'];
$pd_fullname=$_POST['pd_fullname'];
$date_of_birth=$_POST['date_of_birth'];
$qualification=$_POST['qualification'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$date_of_joining=$_POST['date_of_joining'];

$pd_photo=$_FILES['pd_photo']['name'];
$tmp_location=$_FILES['pd_photo']['tmp_name'];
$target="../images/".$pd_photo;
move_uploaded_file($tmp_location,$target);


$sql="update pd_details set pd_fullname='$pd_fullname',date_of_birth='$date_of_birth',qualification='$qualification',email_id='$email_id',contact_no='$contact_no',date_of_joining='$date_of_joining',pd_photo='$pd_photo' where pd_id='$pd_id' ";
mysqli_query($conn,$sql);
 ?>
 <script>
alert("values updated..");

document.location="pd_details_view.php";
</script>