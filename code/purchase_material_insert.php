					
<?php 
include('../db_connect/db_connect.php');
$vendor_id=$_POST['vendor_id'];
$material_id=$_POST['material_id'];
$quantity=$_POST['quantity'];
$purchase_price=$_POST['purchase_price'];
$purchase_date=$_POST['purchase_date'];
$sql="insert into purchase_material values(null,'$vendor_id','$material_id','$quantity','$purchase_price','$purchase_date')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted..");
document.location="purchase_material_view.php";
</script>