						
<?php
include('../db_connect/db_connect.php');
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

$sql="insert into pd_details values(null,'$pd_fullname','$date_of_birth','$qualification','$email_id','$contact_no','$date_of_joining','$pd_photo')";
mysqli_query($conn,$sql);
 ?>
 <script>
alert("values inserted..");
document.location="pd_details_view.php";
</script>