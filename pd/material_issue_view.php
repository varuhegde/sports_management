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
    <a href="material_issue.php" class="btn btn-primary">ADD NEW MATERIAL ISSUE</a>
	<div align="right"><a href="material_issue__return_view.php"  class="btn btn-info">VIEW RETURN MATERIALS</a></div>
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
      <th>Delete</th>
    </tr>
     </thead>
  <tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sql="select * from material_issue mi,material m,student s,pd_details pd where mi.material_id=m.material_id and mi.student_id=s.student_id and mi.pd_id=pd.pd_id and mi.issued_status='ISSUED'  ORDER BY mi.material_issue_id DESC";
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
      <td><a href="material_issued_status.php?material_id=<?php echo $row['material_id'];?>&material_issue_id=<?php echo $row['material_issue_id'];?>" class="btn btn-success">Return</a></td>
      <td><a href="material_issue_delete.php?material_issue_id=<?php echo $row['material_issue_id'];?>" class="btn btn-danger">Delete</a></td>
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

