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
          <h1><i class="fa fa-edit"></i>Event Request</h1>
          </div>
  </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Event Request</h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>
<?php
include('val.php');
?>
<form id="formID" name="form1" method="post" action="event_request_insert.php">
  <table width="467" height="467" border="0" align="center">
    
    <tr>
      <td width="224">Event Name </td>
      <td width="250"><select class="validate[required] form-control" name="event_id" id="event_id">
	 
	    <?php
	       include('../db_connect/db_connect.php');
		   $event_id=$_REQUEST['event_id'];
		   $sql="select * from event where event_id='$event_id'";
		   $res=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_array($res))
		   {
		   
		   ?>
		   <option value="<?php echo $row['event_id'];?>"><?php echo $row['event_name'];?></option>
		   <?php 
		   }
		   ?> 
      </select></td>
    </tr>
    <tr>
      <td>Student Name </td>
      <td><select class="validate[required] form-control" name="student_id" id="student_id">
	  
	    <?php
		$uname=$_SESSION['uname'];
		   $sql1="select * from student where usn_no='$uname'";
		   $res1=mysqli_query($conn,$sql1);
		   while($row1=mysqli_fetch_array($res1))
		   {
		   
		   ?>
		   <option value="<?php echo $row1['student_id'];?>"><?php echo $row1['student_full_name']." - ".$row1['usn_no'];?></option>
		   <?php 
		   }
		   ?> 
      </select></td>
    </tr>
    <tr>
      <td>Request Date</td>
      <td><input class="validate[required] form-control" value="<?php echo date('Y-m-d');?>" name="request_date" type="text" id="request_date"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
<input class="btn btn-primary" type="submit" name="Submit" value="Request To Event">
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

