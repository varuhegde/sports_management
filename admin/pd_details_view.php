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
          <h1><i class="fa fa-th-list"></i> <span class="draggable sticky">Physical Director</span></h1>
          <p></p>
        </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
      </div>
    <a href="pd_details_form.php" class="btn btn-primary">ADD NEW</a>
    <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
      
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
    <tr>
      <th>Sl No</th>
      <th><span class="draggable sticky">Physical Director Name</span></th>
      <th><span class="draggable sticky">Date Of Birth</span></th>
      <th><span class="draggable sticky">Qualification</span></th>
      <th><span class="draggable sticky">Email Id</span></th>
      <th><span class="draggable sticky right">Contact Number</span></th>
      <th><span class="draggable sticky">Date Of Joining</span></th>
      <th><span class="draggable sticky">Physicsl Director Photo</span></th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
     </thead>
  <tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sql="select * from pd_details";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $row['pd_id'];?></td>								
      <td>&nbsp;<?php echo $row['pd_fullname'];?></td>
      <td>&nbsp;<?php echo $row['date_of_birth'];?></td>
      <td>&nbsp;<?php echo $row['qualification'];?></td>
      <td>&nbsp;<?php echo $row['email_id'];?></td>
      <td>&nbsp;<?php echo $row['contact_no'];?></td>
      <td>&nbsp;<?php echo $row['date_of_joining'];?></td>
      <td>&nbsp;<img src="../images/<?php echo $row['pd_photo'];?>" width="120" height="100"></td>
      <td><a href="pd_details_edit.php?pd_id=<?php echo $row['pd_id'];?>" class="btn btn-primary">Edit</a></td>
      <td><a href="pd_details_delete.php?pd_id=<?php echo $row['pd_id'];?>" class="btn btn-danger">Delete</a></td>
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

