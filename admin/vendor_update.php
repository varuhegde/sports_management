			
<?php 
include('../db_connect/db_connect.php');
$vendor_id=$_POST['vendor_id'];
$vendor_name=$_POST['vendor_name'];
$vendor_address=$_POST['vendor_address'];
$vendor_contact_no=$_POST['vendor_contact_no'];
$vendor_email_id=$_POST['vendor_email_id'];
$sql = "update vendor set vendor_name='$vendor_name',vendor_address='$vendor_address',vendor_contact_no='$vendor_contact_no',vendor_email_id='$vendor_email_id' where vendor_id='$vendor_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updated..");
document.location="vendor_view.php";
</script>