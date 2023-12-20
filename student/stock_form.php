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
          <h1><i class="fa fa-edit"></i>Stock</h1>
          </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Stock</h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
    <?php
include('val.php');
?>
<form name="form1" id="formID" method="post" action="stock_insert.php">
  <table width="450" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Stock</strong></div></td>
    </tr>
    <tr>
      <td width="146"><span class="draggable sticky text-right">Material Name </span></td>
      <td width="140"><select class="validate[required] form-control" name="material_id" id="material_id">
	  <option value="">select</option>
	    <?php
	       include('../db_connect/db_connect.php');
		   $sql="select * from material";
		   $res=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_array($res))
		   {
		   
		   ?>
		   <option value="<?php echo $row['material_id'];?>"><?php echo $row['material_name'];?></option>
		   <?php 
		   }
		   ?> 
      </select></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Stock</span></td>
      <td><input name="stock" class="validate[required] form-control" type="text" id="stock"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
          <input class="btn btn-danger" type="reset" name="Reset" value="Reset">
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

