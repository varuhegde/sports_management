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
include('val.php');
?>
<form id="formID" action="material_insert.php" enctype="multipart/form-data" method="post"  name="form1">
  <table width="450" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Material</div></td>
    </tr>
    <tr>
      <td width="269">Material Name</td>
      <td width="272"><input name="material_name" class="validate[required] form-control" type="text" id="material_name"></td>
    </tr>
    <tr>
      <td>Material Description</td>
      <td><textarea name="material_description" class="form-control" id="material_description"></textarea></td>
    </tr>
    <tr>
      <td>Material Photo</td>
      <td><input name="material_photo" class="form-control" type="file" id="material_photo"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input class="btn btn-primary" type="submit" name="Submit" value="Submit">      
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

