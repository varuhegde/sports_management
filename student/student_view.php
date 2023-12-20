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
          <h1><i class="fa fa-th-list"></i> <span class="draggable sticky">Student</span> View</h1>
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
        <div class="col-md-14">
          <div class="tile">
      
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
    <tr>
      <th>Sl No </th>
      <th><span class="draggable sticky">Student Photo</span></th>
      <th><span class="draggable sticky">Student Name</span></th>
      <th><span class="draggable sticky">USN No</span></th>
      <th><span class="draggable sticky">Address</span></th>
      <th><span class="draggable sticky">Email Id</span></th>
      <th><span class="draggable sticky right">Contact No</span></th>
      <th><span class="draggable sticky">Gender</span></th>
      <th><span class="draggable sticky">Date Of Birth</span></th>
      <th><span class="draggable sticky">Admission Year</span></th>
      <th><span class="draggable sticky">Branch Name</span></th>
     
    </tr>
     </thead>
  <tbody>
	<?php
	include('../db_connect/db_connect.php');
	$uname=$_SESSION['uname'];
	$sql="select * from student sd,branch br where sd.branch_id=br.branch_id and sd.usn_no='$uname'";
	$res=mysqli_query($conn,$sql);
	$no=1;
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $no++;?></td>
      <td>&nbsp;<img src="../images/<?php echo $row['student_photo'];?>" width="100" height="120"></td>
      <td>&nbsp;<?php echo $row['student_full_name'];?></td>											
      <td>&nbsp;<?php echo $row['usn_no'];?></td>
      <td>&nbsp;<?php echo $row['address'];?></td>
      <td>&nbsp;<?php echo $row['email_id'];?></td>
      <td>&nbsp;<?php echo $row['contact_no'];?></td>
      <td>&nbsp;<?php echo $row['gender'];?></td>
      <td>&nbsp;<?php echo $row['date_of_birth'];?></td>
      <td>&nbsp;<?php echo $row['admission_year'];?></td>
      <td>&nbsp;<?php echo $row['branch_name'];?></td>
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
