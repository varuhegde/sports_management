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
          <h1><i class="fa fa-edit"></i>Student</h1>
          </div>
  </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Student</h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
  <?php
include('val.php');
?>
<form action="student_insert.php" enctype="multipart/form-data" id="formID" method="post" name="form1">
  <table width="450" height="919" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Student</strong></div></td>
    </tr>
    <tr>
      <td width="174"><span class="draggable sticky">Student Name</span></td>
      <td width="166"><input name="student_full_name"  class="validate[required,custom[onlyLetter]] form-control" type="text" id="student_full_name"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">USN No</span></td>
      <td><input name="usn_no"  class="validate[required,custom[noSpecialCaracters]] form-control" type="text" id="usn_no"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Address</span></td>
      <td><textarea name="address" class="validate[required] form-control" id="address"></textarea></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Email Id</span></td>
      <td><input name="email_id" class="validate[required,custom[email]] form-control" type="email" id="email_id"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky text-right">Contact No</span></td>
      <td><input name="contact_no" class="validate[required,custom[mobile]] form-control" type="text" id="contact_no"></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Gender</span></td>
      <td><input name="gender" type="radio" value="Male">
      Male
        <input name="gender"  type="radio" value="Female">
      Female</td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Date Of Birth</span></td>
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



    $myCalendar = new tc_calendar("date_of_birth", true, false);
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
      <td><span class="draggable sticky">Admission Year</span></td>
      <td>
      <?php         
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
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
    ?> </td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Branch Name </span></td>
      <td><select name="branch_id" class="validate[required] form-control" id="branch_id">
	  <option value="">select</option>
	  <?php
	       include('../db_connect/db_connect.php');
		   $sql="select * from branch";
		   $res=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_array($res))
		   {
		   
		   ?>
		   <option value="<?php echo $row['branch_id'];?>"><?php echo $row['branch_name'];?></option>
		   <?php 
		   }
		   ?>
      </select></td>
    </tr>
    <tr>
      <td><span class="draggable sticky">Student Photo</span></td>
      <td><input class="validate[required] form-control" name="student_photo" type="file" id="student_photo"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
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
