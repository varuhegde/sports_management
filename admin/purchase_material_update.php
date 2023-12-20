					
<?php 
include('../db_connect/db_connect.php');
$purchase_material_id=$_POST['purchase_material_id'];
$vendor_id=$_POST['vendor_id'];
$material_id=$_POST['material_id'];
$quantity=$_POST['quantity'];
$purchase_price=$_POST['purchase_price'];
$purchase_date=$_POST['purchase_date'];
echo $purchase_material_id;
echo $purchase_date;
$sql="update purchase_material set vendor_id='$vendor_id',material_id='$material_id',quantity='$quantity',purchase_price='$purchase_price',purchase_date='$purchase_date' where purchase_material_id='$purchase_material_id'";

mysqli_query($conn,$sql);
?>
<script>
alert("values updated..");
document.location="purchase_material_view.php";
</script>