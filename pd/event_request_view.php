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
          <h1><i class="fa fa-th-list"></i> Event Request View</h1>
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
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
    <tr>
      <th width="38">Sl No </th>
      <th width="102">Event Name </th>
      <th width="126">Student Name </th>
      <th width="158">Request Date </th>
      <th width="174">Request Status </th>
      <th width="73">SELECTED</th>
      <th width="112">NOT SELECTED</th>
    </tr>
     </thead>
  <tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl_no=1;
	$sql="select * from event_request er,event e,student s where er.event_id=e.event_id and er.student_id=s.student_id";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl_no++;?></td>
      <td>&nbsp;<?php echo $row['event_name'];?></td>
      <td>&nbsp;<?php echo $row['student_full_name'];?></td>
      <td>&nbsp;<?php echo $row['request_date'];?></td>
      <td>&nbsp;<div class="btn btn-info"><?php echo $row['event_request_status'];?></div></td>
      <td><a href="event_request_select.php?event_request_id=<?php echo $row['event_request_id'];?>" class="btn btn-primary">SELECT</a></td>
      <td><a href="event_request_not_select.php?event_request_id=<?php echo $row['event_request_id'];?>" class="btn btn-primary">NOT SELECT</a></td>
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