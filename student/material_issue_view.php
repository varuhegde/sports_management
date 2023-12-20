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
          <h1><i class="fa fa-th-list"></i> Material IssueView</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
        </div>
      </div>
    <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
      
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
    <tr>
      <th>Sl No </th>
      <th>Material Name </th>
      <th>Student Name </th>
      <th>Physical Direcror  Name </th>
      <th>Issue Date </th>
      <th>Issue Status </th>
      <th>Return</th>
    </tr>
     </thead>
  <tbody>
	<?php
	include('../db_connect/db_connect.php');
	$uname=$_SESSION['uname'];
	$sql="select * from material_issue mi,material m,student s,pd_details pd where mi.material_id=m.material_id and mi.student_id=s.student_id and mi.pd_id=pd.pd_id and s.usn_no='$uname'  ORDER BY mi.material_issue_id DESC";
	$res=mysqli_query($conn,$sql);
	$no=1;
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $no++;?></td>
      <td>&nbsp;<?php echo $row['material_name'];?></td>
      <td>&nbsp;<?php echo $row['student_full_name'];?></td>
      <td>&nbsp;<?php echo $row['pd_fullname'];?></td>
      <td>&nbsp;<?php echo $row['issued_date'];?></td>
      <td>&nbsp;<div class="btn btn-info"><?php echo $row['issued_status'];?></div></td>
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

