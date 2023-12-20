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
include('../db_connect/db_connect.php');
$branch_id=$_REQUEST['branch_id'];
$sql="select * from branch where branch_id=$branch_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<?php
include('val.php');
?>
<blockquote>
<form name="form1" id="formID" method="post" action="branch_update.php">
 <input type="hidden" name="branch_id" value="<?php echo $row['branch_id'];?>">
  <table width="453" height="343" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Branch</div></td>
    </tr>
    <tr>
      <td width="235" height="75">Branch Name </td>
      <td width="467"><input name="branch_name" type="text" id="branch_name" class="validate[required] form-control" value="<?php echo $row['branch_name'];?>"></td>
    </tr>
    <tr>
      <td height="119">Branch Description </td>
      <td><textarea name="branch_description" class="form-control" id="branch_description"><?php echo $row['branch_description'];?></textarea></td>
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

