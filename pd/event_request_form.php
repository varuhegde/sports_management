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
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Event Request</h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>
<?php
include('val.php');
?>
<form id="formID" name="form1" method="post" action="event_request_insert.php">
  <table width="450" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Event Request</div></td>
    </tr>
    <tr>
      <td width="224">Event Name </td>
      <td width="250"><select class="validate[required] form-control" name="event_id" id="event_id">
	  <option value="">select</option>
	    <?php
	       include('../db_connect/db_connect.php');
		   $sql="select * from event";
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
	  <option value="">select</option>
	    <?php
		   $sql1="select * from student";
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
      <td><?php         
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



    $myCalendar = new tc_calendar("request_date", true, false);
    $myCalendar->setIcon("calendar/images/iconCalendar.gif");
    $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
    
    $myCalendar->setPath("calendar/");
    $myCalendar->setYearInterval(1800, date('Y'));
    $myCalendar->setAlignment('left', 'bottom');
    $myCalendar->writeScript();   
    ?> </td>
    </tr>
    <tr>
      <td>Event Request Status</td>
      <td><input class="validate[required] form-control" name="event_request_status" type="text" id="event_request_status"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
<input class="btn btn-primary" type="submit" name="Submit" value="Submit">
<input class="btn btn-danger" type="reset" name="Reset" value="Reset">
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

