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
          <h1><i class="fa fa-edit"></i>Sports</h1>
          </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Sports</h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
    <?php
include('val.php');
?>
<form name="form1" enctype="multipart/form-data" id="formID" method="post" action="sports_insert.php">
  <table width="450" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Sports</strong></div></td>
    </tr>
    <tr>
      <td width="128"><span class="draggable sticky">Sports Name</span></td>
      <td width="130"><input name="sports_name" type="text" class="validate[required] form-control" id="sports_name"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Sports Description</span></td>
      <td><textarea name="sports_description" class="form-control"></textarea></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Sports Photo</span></td>
      <td><input name="sports_photo" class="form-control" type="file" id="sports_photo"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Sports Type</span></td>
      <td><input name="sports_type" class="validate[required] form-control" type="text" id="sports_type"></td>
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

