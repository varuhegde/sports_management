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
          <h1><i class="fa fa-edit"></i>Branch</h1>
          </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Branch</h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
<?php
include('val.php');
?>
<form name="form1" id="formID" method="post" action="branch_insert.php">
  <table width="450" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Branch</div></td>
    </tr>
    <tr>
      <td width="233">Branch Name </td>
      <td width="411"><input name="branch_name" class="form-control" type="text" id="branch_name" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Branch Description </td>
      <td><textarea name="branch_description" class="form-control" id="branch_description"></textarea>
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

