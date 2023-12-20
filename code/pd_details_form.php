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
          <h1><i class="fa fa-edit"></i>Phisical Director Deatails</h1>
          </div>
  </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Phisical Director Deatails</h3>
            <div class="tile-body">
      <?php include("cal.php"); ?>
      <?php
include('val.php');
?>
<form id="formID" action="pd_details_insert.php"  enctype="multipart/form-data" method="post" name="form1">
  <br class="Apple-interchange-newline">
  <table width="450" border="0" align="center">
    <tr>
      <td colspan="2"> <div align="center"><strong>Phisical Director Deatails </strong></div></td>
    </tr>
    <tr>
      <td width="172"><span class="draggable sticky">Name</span></td>
      <td width="189"><input  class="validate[required,custom[onlyLetter]] form-control" name="pd_fullname" type="text" id="pd_fullname"></td>
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
      <td><span class="draggable sticky">Qualification</span></td>
      <td><input name="qualification" class="validate[required] form-control" type="text" id="qualification"></td>
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
      <td><span class="draggable sticky">Date Of Joining</span></td>
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



    $myCalendar = new tc_calendar("date_of_joining", true, false);
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
      <td><span class="draggable sticky">Physical Director Photo</span></td>
      <td><input name="pd_photo" class="form-control"  type="file" id="pd_photo"></td>
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

