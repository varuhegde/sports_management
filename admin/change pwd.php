<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('header.php');?>
    <!-- Sidebar menu-->
<?php include('sidebar.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Change Password</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
        </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
      </div>
    
    <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
      
            <div class="tile-body">
						<form name="form2" method="post" action="changepin.php">
						

						<table width="325" height="242" border="0">
                          <tr>
                            <td>Old Password </td>
                            <td><input type="password" name="old_pwd" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>New password </td>
                            <td><input type="password" name="new_pwd" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>Confirm password </td>
                            <td><input type="password" name="conf_pwd" class="form-control"></td>
                          </tr>
                          <tr>
                            <td colspan="2"><input type="submit" name="Submit" class="btn btn-success" value="Change" /></td>
                          </tr>
                        </table>
						<p>
						  <label>    </label>
                        </p>
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

