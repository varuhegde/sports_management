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
          <h1><i class="fa fa-edit"></i><strong>Vendor</strong></h1>
        </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"><strong>Vendor</strong></h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
<?php
include('val.php');
?>
<?php
include('../db_connect/db_connect.php');
$vendor_id=$_REQUEST['vendor_id'];
$sql="select * from vendor where vendor_id=$vendor_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" id="formID" method="post" action="vendor_update.php">
<input type="hidden" name="vendor_id" value="<?php echo $row['vendor_id'];?>">
  <br class="Apple-interchange-newline">
  <table width="450" height="185" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Vendor</strong></div></td>
    </tr>
    <tr>
      <td width="158"><span class="draggable sticky">Vendor Name</span></td>
      <td width="165"><input name="vendor_name" type="text" class="validate[required,custom[onlyLetter]] form-control" id="vendor_name" value="<?php echo $row['vendor_name'];?>"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Vendor Address</span></td>
      <td><textarea name="vendor_address" class="validate[required] form-control" id="vendor_address"><?php echo $row['vendor_address'];?></textarea></td>
    </tr>
    <tr>
      <td><span class="draggable sticky text-right">Vendor Contact No</span></td>
      <td><input name="vendor_contact_no" type="text" class="validate[required,custom[mobile]] form-control" id="vendor_contact_no" value="<?php echo $row['vendor_contact_no'];?>"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Vendor Email Id</span></td>
      <td><input name="vendor_email_id" type="email" class="validate[required,custom[email]] form-control" id="vendor_email_id" value="<?php echo $row['vendor_email_id'];?>"></td>
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
