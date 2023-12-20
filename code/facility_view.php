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
          <h1><i class="fa fa-th-list"></i> Facility View</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
        </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
      </div>
    <a href="facility_form.php" class="btn btn-primary">ADD NEW</a>
    <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
      
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
    <tr>
      <th>Sl No </th>
      <th>Facility Name</th>
      <th>Facility Description </th>
      <th>Facility Photo </th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl_no=1;
	$sql="select * from facility";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl_no++;?></td>
      <td>&nbsp;<?php echo $row['facility_name'];?></td>
      <td>&nbsp;<?php echo $row['facility_description'];?></td>
      <td>&nbsp;<img src="../images/<?php echo $row['facility_photo'];?>" width="200" height="200"></td>
      <td><a href="facility_edit.php?facility_id=<?php echo $row['facility_id'];?>">edit</a></td>
      <td><a href="facility_delete.php?facility_id=<?php echo $row['facility_id'];?>">delete</a></td>
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

