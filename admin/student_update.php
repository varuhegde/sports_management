										
<?php 
include('../db_connect/db_connect.php');
$student_id=$_POST['student_id'];
$student_full_name=$_POST['student_full_name'];
$usn_no=$_POST['usn_no'];
$address=$_POST['address'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$gender=$_POST['gender'];
$date_of_birth=$_POST['date_of_birth'];
$admission_year=$_POST['admission_year'];
$branch_id=$_POST['branch_id'];


$student_photo=$_FILES['student_photo']['name'];
$tmp_location=$_FILES['student_photo']['tmp_name'];
$target="../images/".$student_photo;
move_uploaded_file($tmp_location,$target);

$sql="update student set student_full_name='$student_full_name',usn_no='$usn_no',address='$address',email_id='$email_id',contact_no='$contact_no',gender='$gender',date_of_birth='$date_of_birth',admission_year='$admission_year',branch_id='$branch_id',student_photo='$student_photo' where student_id='$student_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updated..");
document.location="student_view.php";
</script>