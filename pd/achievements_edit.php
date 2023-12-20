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
          <h1><i class="fa fa-edit"></i>Achievements</h1>
          </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Achievements</h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>
<?php
include('val.php');
?>
<?php
include('../db_connect/db_connect.php');
$achievement_id=$_REQUEST['achievement_id'];
$sql="select * from achievements where achievement_id=$achievement_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<blockquote>
  <form id="formID" name="form1" method="post" action="achievements_update.php">
  <input type="hidden" name="achievement_id" value="<?php echo $row['achievement_id'];?>">
    <table width="447" border="0" align="center">
      <tr>
        <td colspan="2"><div align="center">Achievements</div></td>
      </tr>
      <tr>
        <td width="178" height="47">Student Name </td>
        <td width="253">
          <select class="validate[required] form-control" name="student_id" size="1" id="student_id">
		    <option value="">Student Name</option>
	    <?php
		include('../db_connect/db_connect.php');
		   $sql1="select * from student";
		   $res1=mysqli_query($conn,$sql1);
		   while($row1=mysqli_fetch_array($res1))
		   {
		   
		   ?>
		   <option value="<?php echo $row1['student_id'];?>" <?php if($row['student_id']==$row1['student_id']){ echo "selected";} ?> ><?php echo $row1['student_full_name']." - ".$row1['usn_no'];?></option>
		   <?php 
		   }
		   ?> 
              </select></td>
      </tr>
      <tr>
        <td height="52">Sports Name </td>
        <td>
		<select class="validate[required] form-control" name="sports_id" id="sports_id">
		  <option value="">Sports Name</option>
	    <?php
	       
		   $sql="select * from sports";
		   $res=mysqli_query($conn,$sql);
		   while($row2=mysqli_fetch_array($res))
		   {
		   
		   ?>
		   <option value="<?php echo $row2['sports_id'];?>" <?php if($row['sports_id']==$row2['sports_id']){ echo "selected";} ?>><?php echo $row2['sports_name'];?></option>
		   <?php 
		   }
		   ?> 
        </select></td>
      </tr>
      <tr>
        <td height="95">Achievement Details</td>
        <td><textarea name="achievement_details" class="form-control" id="achievement_details"><?php echo $row['achievement_details'];?></textarea></td>
      </tr>
      <tr>
        <td height="42">Achievement Date</td>
        <td><?php          
      $date_default = "";
     
      if(isset($row['achievement_date']))
      {
        $date_default =$row['achievement_date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



    $myCalendar = new tc_calendar("achievement_date", true, false);
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

