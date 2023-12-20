			
<?php 
include('../db_connect/db_connect.php');
$vendor_name=$_POST['vendor_name'];
$vendor_address=$_POST['vendor_address'];
$vendor_contact_no=$_POST['vendor_contact_no'];
$vendor_email_id=$_POST['vendor_email_id'];
$sql="insert into vendor values(null,'$vendor_name','$vendor_address','$vendor_contact_no','$vendor_email_id')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted..");
document.location="vendor_view.php";
</script>