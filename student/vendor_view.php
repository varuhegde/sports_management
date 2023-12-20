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
          <h1><i class="fa fa-th-list"></i> <span class="draggable sticky right">Vendor</span> View</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
        </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
      </div>
    <a href="vendor_form.php" class="btn btn-primary">ADD NEW</a>
    <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
      
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
    <tr>
      <th>Sl No </th>
      <th><span class="draggable sticky">Vendor Name</span></th>
      <th><span class="draggable sticky">Vendor Address</span></th>
      <th><span class="draggable sticky right">Vendor Contact No</span></th>
      <th><span class="draggable sticky">Vendor Email Id</span></th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
     </thead>
  <tbody>
		<?php
	include('../db_connect/db_connect.php');
	$sql="select * from vendor";
	$res=mysqli_query($conn,$sql);
	$no=1;
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $no++;?></td>
      <td>&nbsp;<?php echo $row['vendor_name'];?></td>
      <td>&nbsp;<?php echo $row['vendor_address'];?></td>				
      <td>&nbsp;<?php echo $row['vendor_contact_no'];?></td>
      <td>&nbsp;<?php echo $row['vendor_email_id'];?></td>
      <td><a href="vendor_edit.php?vendor_id=<?php echo $row['vendor_id'];?>">edit</a></td>
      <td><a href="vendor_delete.php?vendor_id=<?php echo $row['vendor_id'];?>">delete</a></td>
    </tr>
	<?php
	}
	?>
   </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
  <?php include('footer.php'); ?>
  </body>
</html>

