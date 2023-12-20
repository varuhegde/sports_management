					
<?php 
include('../db_connect/db_connect.php');
$vendor_id=$_POST['vendor_id'];
$material_id=$_POST['material_id'];
$quantity=$_POST['quantity'];
$purchase_price=$_POST['purchase_price'];
$purchase_date=$_POST['purchase_date'];


	$sql2="select sum(stock) as stock from stock where material_id='$material_id'";
	$res2=mysqli_query($conn,$sql2);
	$row2=mysqli_fetch_array($res2);
	
	$stock=$row2['stock'];

	$sql="select * from stock where material_id='$material_id'";
	$res=mysqli_query($conn,$sql);
	if($row=mysqli_fetch_array($res))
	{

$stock1=$stock+$quantity;

echo $sql="insert into  purchase_material values(null,'$vendor_id','$material_id','$quantity','$purchase_price','$purchase_date')";
mysqli_query($conn,$sql);

$sql3="update stock set stock='$stock1' where material_id='$material_id'";
mysqli_query($conn,$sql3);

}
else
{
echo $sql="insert into  purchase_material values(null,'$vendor_id','$material_id','$quantity','$purchase_price','$purchase_date')";
mysqli_query($conn,$sql);

$sql3="insert into stock values(null,'$material_id','$quantity')";
mysqli_query($conn,$sql3);
}
?>
<script>
alert("Purchase Details Inserted..");
document.location="purchase_material_view.php";
</script>