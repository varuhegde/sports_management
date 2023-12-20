<!DOCTYPE html>
<html lang="en">
<style type="text/css">
<!--
.style3 {font-size: medium; font-style: italic; font-weight: bold; }
-->
</style>
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Purchase Material </h1>
        </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Purchase Material </h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
    <?php
include('val.php');
?>
<?php
include('../db_connect/db_connect.php');
$purchase_material_id=$_REQUEST['purchase_material_id'];
$sql="select * from purchase_material where purchase_material_id=$purchase_material_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>

<form name="form1" id="formID" method="post" action="purchase_material_update.php">
<input type="hidden" name="purchase_material_id" value="<?php echo $row['purchase_material_id'];?>">
  <br class="Apple-interchange-newline">
  <table width="450" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Purchase Material </div></td>
    </tr>
    <tr>
      <td width="142"><span class="draggable sticky text-right">Vendor Name </span></td>
      <td width="129">
        <select class="validate[required] form-control" name="vendor_id" id="vendor_id">
          <option value="">select</option>
          <?php
	       include('../db_connect/db_connect.php');
		   $sql="select * from vendor";
		   $res=mysqli_query($conn,$sql);
		   while($row2=mysqli_fetch_array($res))
		   {
		   
		   ?>
          <option value="<?php echo $row2['vendor_id'];?>"<?php if($row['vendor_id']==$row2['vendor_id']){ echo "selected";} ?>><?php echo $row2['vendor_name'];?></option>
          <?php 
		   }
		   ?>
        </select></td>
    </tr>
    <tr>
      <td><span class="draggable sticky text-right">Material Name </span></td>
      <td>
        <select class="validate[required] form-control" name="material_id" id="material_id">
          <option value="">select</option>
          <?php
	       include('../db_connect/db_connect.php');
		   $sql1="select * from material";
		   $res1=mysqli_query($conn,$sql1);
		   while($row1=mysqli_fetch_array($res1))
		   {
		   
		   ?>
          <option value="<?php echo $row1['material_id'];?>"<?php if($row1['material_id']==$row['material_id']){ echo "selected";} ?>><?php echo $row1['material_name'];?></option>
          <?php 
		   }?>
        </select></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Quantity</span></td>
      <td><input name="quantity" class="validate[required,custom[onlyNumber]] form-control" type="text" id="quantity" value="<?php echo $row['quantity'];?>"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Purchase Price</span></td>
      <td><input class="validate[required,custom[onlyNumber]] form-control" name="purchase_price" type="text" id="purchase_price" value="<?php echo $row['purchase_price'];?>"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Purchase Date</span></td>
      <td>
      <?php          
      $date_default = "";
     
      if(isset($row['purchase_date']))
      {
        $date_default =$row['purchase_date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



    $myCalendar = new tc_calendar("purchase_date", true, false);
    $myCalendar->setIcon("calendar/images/iconCalendar.gif");
    $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
    
    $myCalendar->setPath("calendar/");
    $myCalendar->setYearInterval(1800, date('Y'));
    $myCalendar->setAlignment('left', 'bottom');
    $myCalendar->writeScript();   
    ?></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
          <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
</div>

           
          </div>
        </div>
        
</main>
  
  <?php include('footer.php');?>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
<?php include('val.php');?>

  </body>
</html>

