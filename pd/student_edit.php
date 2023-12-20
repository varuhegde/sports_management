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
          <h1><i class="fa fa-edit"></i><strong>Student</strong></h1>
        </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"><strong>Student</strong></h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
  <?php
include('val.php');
?>
<?php
include('../db_connect/db_connect.php');
$student_id=$_REQUEST['student_id'];
$sql="select * from student where student_id=$student_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form id="formID" enctype="multipart/form-data" action="student_update.php" method="post" name="form1">
<input type="hidden" name="student_id" value="<?php echo $row['student_id'];?>">
  <table width="450" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Student</strong></div></td>
    </tr>
    <tr>
      <td width="174"><span class="draggable sticky">Student Full Name</span></td>
      <td width="166"><input name="student_full_name" class="validate[required,custom[onlyLetter]] form-control" type="text" id="student_full_name" value="<?php echo $row['student_full_name'];?>"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">USN No</span></td>
      <td><input name="usn_no" class="validate[required,custom[noSpecialCaracters]] form-control" type="text" id="usn_no" value="<?php echo $row['usn_no'];?>"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Address</span></td>
      <td><textarea name="address" class="validate[required] form-control" id="address"><?php echo $row['address'];?></textarea></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Email Id</span></td>
      <td><input name="email_id" class="validate[required,custom[email]] form-control" type="email" id="email_id" value="<?php echo $row['email_id'];?>"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky text-right">Contact No</span></td>
      <td><input name="contact_no" class="validate[required,custom[mobile]] form-control" type="text" id="contact_no" value="<?php echo $row['contact_no'];?>"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Gender</span></td>
      <td><input name="gender" type="radio" value="Male">
      Male
        <input name="gender" type="radio" value="Female">
      Female</td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Date Of Birth</span></td>
      <td>
      <?php          
      $date_default = "";
     
      if(isset($row['date_of_birth']))
      {
        $date_default =$row['date_of_birth'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



    $myCalendar = new tc_calendar("date_of_birth", true, false);
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
      <td><p class="draggable sticky">Admission Year</p>
      </td>
      <td>
      <?php          
      $date_default = "";
     
      if(isset($row['admission_year']))
      {
        $date_default =$row['admission_year'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



    $myCalendar = new tc_calendar("admission_year", true, false);
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
      <td><span class="draggable sticky">Branch Name </span></td>
      <td>
        <select name="branch_id" class="validate[required] form-control" id="branch_id">
          <option value="">Branch Name</option>
          <?php
	       include('../db_connect/db_connect.php');
		   $sql="select * from branch";
		   $res=mysqli_query($conn,$sql);
		   while($row2=mysqli_fetch_array($res))
		   {
		   
		   ?>
          <option value="<?php echo $row2['branch_id'];?>" <?php if($row['branch_id']==$row2['branch_id']){ echo "selected";} ?>><?php echo $row2['branch_name'];?></option>
          <?php 
		   }
		   ?>
        </select></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Student Photo</span></td>
      <td><input name="student_photo" class="validate[required] form-control" type="file" id="student_photo"></td>
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