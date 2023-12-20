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
          <h1><i class="fa fa-edit"></i>Event</h1>
          </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Event</h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
<?php
include('val.php');
?>
<form id="formID" enctype="multipart/form-data" action="event_insert.php" method="post" name="form1">
  <table width="450" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Event</div></td>
    </tr>
    <tr>
      <td width="177">Sports Name</td>
      <td width="192"><select class="validate[required] form-control" name="sports_id" id="sports_id">
	  <option value="">Select</option>
	    <?php
	       include('../db_connect/db_connect.php');
		   $sql="select * from sports";
		   $res=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_array($res))
		   {
		   
		   ?>
		   <option value="<?php echo $row['sports_id'];?>"><?php echo $row['sports_name'];?></option>
		   <?php 
		   }
		   ?> 
      </select></td>
    </tr>
    <tr>
      <td>Event Name</td>
      <td><input name="event_name" type="text" class="validate[required] form-control" id="event_name"></td>
    </tr>
    <tr>
      <td>Event Description</td>
      <td><textarea name="event_description" class="form-control" id="event_description"></textarea></td>
    </tr>
    <tr>
      <td>Event Date</td>
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



    $myCalendar = new tc_calendar("event_date", true, false);
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
      <td>Event Photo</td>
      <td><input name="event_photo" class="form-control" type="file" id="event_photo"></td>
	 
    </tr>
    <tr>
      <td>Event Status</td>
      <td><input name="event_status" class="validate[required] form-control" type="text" id="event_status"></td>
    </tr>
    <tr>
      <td>Event Type</td>
      <td><input name="event_type" class="validate[required] form-control" type="text" id="event_type"></td>
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

