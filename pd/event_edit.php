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
include('../db_connect/db_connect.php');
$event_id=$_REQUEST['event_id'];
$sql="select * from event where event_id=$event_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

?>
<?php
include('val.php');
?>
<blockquote>
<form id="formID" action="event_update.php"  enctype="multipart/form-data" method="post" name="form1">
  <table width="433" border="0" align="center">
    <tr><input  name="event_id" type="hidden" id="event_id" value="<?php echo $row['event_id'];?>">
      <td colspan="2"><div align="center">Event</div></td>
    </tr>
    <tr>
      <td width="157" height="45">Sports Id</td>
      <td width="266"><select class="validate[required] form-control"  name="sports_id" id="sports_id">
	   <option value="">Select</option>
	    <?php
		   $sql2="select * from sports";
		   $res2=mysqli_query($conn,$sql2);
		   while($row2=mysqli_fetch_array($res2))
		   {
		   
		   ?>
		   <option value="<?php echo $row2['sports_id'];?>"<?php if($row2['sports_id']==$row['sports_id']){ echo "selected";} ?>><?php echo $row2['sports_name'];?></option>
		   <?php 
		   }
		   ?>
      </select></td>
    </tr>
    <tr>
      <td height="44">Event Name</td>
      <td><input name="event_name" type="text" class="validate[required] form-control" id="event_name" value="<?php echo $row['event_name'];?>"></td>
    </tr>
    <tr>
      <td height="98">Event Description</td>
      <td><textarea name="event_description" class="form-control" id="event_description"><?php echo $row['event_description'];?></textarea></td>
    </tr>
    <tr>
      <td height="48">Event Date</td>
      <td><?php          
      $date_default = "";
     
      if(isset($row['event_date']))
      {
        $date_default =$row['event_date'];
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
    ?></td>
    </tr>
    <tr>
      <td height="45">Event Photo</td>
      <td><input name="event_photo" class="form-control" type="file" id="event_photo"></td>
    </tr>
    <tr>
      <td height="50">Event Status</td>
      <td><input name="event_status" class="validate[required] form-control" type="text" id="event_status" value="<?php echo $row['event_status'];?>"></td>
    </tr>
    <tr>
      <td height="44">Event Type</td>
      <td>
	  <input name="event_type" class="validate[required] form-control" type="text" id="event_type" value="<?php echo $row['event_type'];?>"></td>
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

