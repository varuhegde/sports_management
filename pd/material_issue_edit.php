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
          <h1><i class="fa fa-edit"></i>Material Issue</h1>
        </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Material Issue</h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
       <?php
include('val.php');
?>
<?php
include('../db_connect/db_connect.php');
$material_issue_id=$_REQUEST['material_issue_id'];
$sql="select * from material_issue where material_issue_id=$material_issue_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" id="formID" method="post" action="material_issue_update.php">
  <div align="center"></div>
  <table width="450" height="437" border="0" align="center">
    <tr>
	<input name="material_issue_id"  type="hidden" id="material_issue_id" value="<?php echo $row['material_issue_id'];?>">
      <td colspan="2"><div align="center">Material Issue</div></td>
    </tr>
    <tr>
      <td width="253">Material Name </td>
      <td width="293"><select class="validate[required] form-control" name="material_id" id="material_id">
        <option value="">select</option>
        <?php
	      
		   $sql3="select * from material";
		   $res3=mysqli_query($conn,$sql3);
		   while($row3=mysqli_fetch_array($res3))
		   {
		   
		   ?>
        <option value="<?php echo $row3['material_id'];?>"<?php if($row['material_id']==$row3['material_id']){ echo "selected";} ?>><?php echo $row3['material_name'];?></option>
        <?php 
		   }
		   ?>
      </select></td>
    </tr>
    <tr>
      <td>Student Name </td>
      <td><select class="validate[required] form-control" name="student_id" id="student_id">
        <option value="">Select</option>
        <?php
	       
		   $sql1="select * from student";
		   $res1=mysqli_query($conn,$sql1);
		   while($row1=mysqli_fetch_array($res1))
		   {
		   
		   ?>
        <option value="<?php echo $row['student_id'];?>"<?php if($row['student_id']==$row1['student_id']){ echo "selected";} ?>><?php echo $row1['student_full_name']." - ".$row1['usn_no'];?></option>
        <?php 
		   }
		   ?>
      </select></td>
    </tr>
    <tr>
      <td>Physical Director Name </td>
      <td><select class="validate[required] form-control" name="pd_id" id="pd_id">
        <option value="">select</option>
        <?php
	       
		   $sql2="select * from pd_details";
		   $res2=mysqli_query($conn,$sql2);
		   while($row2=mysqli_fetch_array($res2))
		   {
		   
		   ?>
        <option value="<?php echo $row2['pd_id'];?>"<?php if($row['pd_id']==$row2['pd_id']){ echo "selected";} ?>><?php echo $row2['pd_fullname'];?></option>
        <?php 
		   }
		   ?>
      </select></td>
    </tr>
    <tr>
      <td>Issue Date</td>
      <td>
      <?php          
      $date_default = "";
     
      if(isset($row['issued_date']))
      {
        $date_default =$row['issued_date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



    $myCalendar = new tc_calendar("issued_date", true, false);
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
      <td>Issue Status</td>
      <td><input class="validate[required,custom[onlyLetter]] form-control" name="issue_status" type="text" id="issue_status" value="<?php echo $row['issued_status'];?>"></td>
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



