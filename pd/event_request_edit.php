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
include('../db_connect/db_connect.php');
$event_request_id=$_REQUEST['event_request_id'];
$sql="select * from event_request where event_request_id=$event_request_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<?php
include('val.php');
?>

<form id="formID" name="form1" method="post" action="event_request_update.php">
  <table width="490" height="357" border="0" align="center">
    <tr>
	<input name="event_request_id" type="hidden" id="event_request_id" value="<?php echo $row['event_request_id'];?>">
      <td colspan="2"><div align="center">Event Request</div></td>
    </tr>
    <tr>
      <td width="224">Event Name </td>
      <td width="250">        <select class="validate[required] form-control" name="event_id" id="event_id">
          <option value="">select</option>
          <?php
		   $sql2="select * from event";
		   $res2=mysqli_query($conn,$sql2);
		   while($row2=mysqli_fetch_array($res2))
		   {
		   
		   ?>
          <option value="<?php echo $row2['event_id'];?>" <?php if($row['event_id']==$row2['event_id']){ echo "selected";} ?>><?php echo $row2['event_name'];?></option>
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
        <option value="<?php echo $row1['student_id'];?>"<?php if($row['student_id']==$row1['student_id']){ echo "selected";} ?>><?php echo $row1['student_full_name']." - ".$row1['usn_no'];?></option>
        <?php 
		   }
		   ?>
      </select></td>
    </tr>
    <tr>
      <td>Request Date</td>
      <td>
      <?php          
      $date_default = "";
     
      if(isset($row['request_date']))
      {
        $date_default =$row['request_date'];
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
    ?></td>
    </tr>
    <tr>
      <td>Event Request Status</td>
      <td><input name="event_request_status" class="validate[required] form-control" type="text" id="event_request_status" value="<?php echo $row['event_request_status'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
<input type="submit" class="btn btn-primary" name="Submit" value="Submit">
<input type="reset" class="btn btn-danger" name="Reset" value="Reset">
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


