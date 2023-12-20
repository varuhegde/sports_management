										
<?php 
include('../db_connect/db_connect.php');
$student_full_name=$_POST['student_full_name'];
$usn_no=$_POST['usn_no'];
$address=$_POST['address'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$gender=$_POST['gender'];
$date_of_birth=$_POST['date_of_birth'];
$admission_year=$_POST['admission_year'];
$branch_id=$_POST['branch_id'];
$student_photo=$_POST['student_photo'];


$student_photo=$_FILES['student_photo']['name'];
$tmp_location=$_FILES['student_photo']['tmp_name'];
$target="../images/".$student_photo;
move_uploaded_file($tmp_location,$target);



$sql="insert into student values(null,'$student_full_name','$usn_no','$address','$email_id','$contact_no','$gender','$date_of_birth','$admission_year','$branch_id','$student_photo')";
mysqli_query($conn,$sql);

$sql2="insert into login values(null,'$usn_no','$usn_no','student','Enter Your email Id','$email_id','Active')";
mysqli_query($conn,$sql2);
?>
<script>
alert("Student Is Added..");
document.location="student_view.php";
</script>