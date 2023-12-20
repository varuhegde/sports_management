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
<form name="form1" id="formID" method="post" action="material_issue_insert.php">
  <div align="center"></div>
  <table width="450" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Material Issue</div></td>
    </tr>
    <tr>
      <td width="253"><p>Material Name       </p>
      </td>
      <td width="293"><select class="validate[required] form-control" name="material_id" id="material_id">
        <option value="">select</option>
        <?php
	       include('../db_connect/db_connect.php');
		   $sql="select * from material";
		   $res=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_array($res))
		   {
		   
		   ?>
        <option value="<?php echo $row['material_id'];?>"><?php echo $row['material_name'];?></option>
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
		   while($row=mysqli_fetch_array($res1))
		   {
		   
		   ?>
        <option value="<?php echo $row['student_id'];?>"><?php echo $row['student_full_name']." - ".$row['usn_no'];?></option>
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
		   <option value="<?php echo $row2['pd_id'];?>"><?php echo $row2['pd_fullname'];?></option>
		   <?php 
		   }
		   ?> 
	  </select></td>
    </tr>
    <tr>
      <td>Issue Date</td>
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



    $myCalendar = new tc_calendar("issue_date", true, false);
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
      <td>Issue Status</td>
      <td><input name="issue_status" class="validate[required,custom[onlyLetter]] form-control" type="text" id="issue_status"></td>
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

