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
          <h1><i class="fa fa-th-list"></i> Event View</h1>
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
      <th>Sl No </th>
      <th>Sports Name </th>
      <th>Event Name </th>
      <th>Event Description </th>
      <th>Event Date </th>
      <th>Event Photo </th>
      <th>Event Status </th>
      <th>Event Type </th>
      <th>Event Request</th>
      
    </tr>
    </thead>
  <tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl_no=1;
	$sql="select * from event e,sports s where e.sports_id=s.sports_id and e.event_status='Active'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl_no++;?></td>
      <td>&nbsp;<?php echo $row['sports_name'];?></td>
      <td>&nbsp;<?php echo $row['event_name'];?></td>
      <td>&nbsp;<?php echo $row['event_description'];?></td>
      <td>&nbsp;<?php echo $row['event_date'];?></td>
      <td>&nbsp;<img src="../images/<?php echo $row['event_photo'];?>" width="150" height="150"></td>
      <td>&nbsp;<?php echo $row['event_status'];?></td>
      <td>&nbsp;<?php echo $row['event_type'];?></td>
      <td><a href="event_request_form.php?event_id=<?php echo $row['event_id'];?>" class="btn btn-primary">REQUEST NOW</a></td>
      tr>
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
