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
          <h1><i class="fa fa-edit"></i>Facility</h1>
        </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Facility</h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
<?php
include('../db_connect/db_connect.php');
$facility_id=$_REQUEST['facility_id'];
$sql="select * from facility where facility_id=$facility_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
     <?php
include('val.php');
?>
<form id="formID" enctype="multipart/form-data" action="facility_update.php" method="post"  name="form1">
  <table width="489" height="342" border="0" align="center">
    <tr>
	   <input name="facility_id" type="hidden" id="facility_id" value="<?php echo $row['facility_id'];?>">
      <td colspan="2"><div align="center">Facility</div></td>
    </tr>
    <tr>
      <td width="241">Facility Name</td>
      <td width="256"><input class="validate[required] form-control" name="facility_name" type="text" id="facility_name" value="<?php echo $row['facility_name'];?>"></td>
    </tr>
    <tr>
      <td>Facility Description</td>
      <td><textarea name="facility_description" class="form-control" type="text" id="facility_description"><?php echo $row['facility_description'];?></textarea> </td>
    </tr>
    <tr>
      <td>Facility Photo</td>
      <td><input name="facility_photo" class="form-control" type="file" id="facility_photo"></td>
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
