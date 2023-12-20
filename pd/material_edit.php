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
          <h1><i class="fa fa-edit"></i>Material</h1>
        </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Material</h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
<?php
include('../db_connect/db_connect.php');
$material_id=$_REQUEST['material_id'];
$sql="select * from material where material_id=$material_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
     <?php
include('val.php');
?>
<form id="formID" enctype="multipart/form-data" action="material_update.php" method="post"  name="form1">
<input type="hidden" name="material_id" value="<?php echo $row['material_id'];?>">
  <table width="450" height="315" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Material</div></td>
    </tr>
    <tr>
      <td width="269">Material Name</td>
      <td width="272"><input class="validate[required] form-control" name="material_name" type="text" id="material_name" value="<?php echo $row['material_name'];?>"></td>
    </tr>
    <tr>
      <td>Material Description</td>
      <td><textarea name="material_description" class="form-control" id="material_description"><?php echo $row['material_description'];?></textarea></td>
    </tr>
    <tr>
      <td>Material Photo</td>
      <td><input name="material_photo" class="form-control" type="file" id="material_photo"></td>
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
