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
          <h1><i class="fa fa-edit"></i>Activity</h1>
          <!-- <p>Sample forms</p> -->
        </div>
       <!--  <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul> -->
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Activity</h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>
<form action="activity_insert.php" method="post" enctype="multipart/form-data"  name="form1" id="formID">
    <table width="567" height="357" border="0" align="center">
    <tr>
      <td width="97"><span class="style3">Name</span></td>
      <td width="273"><input name="activity_name" type="text" id="activity_name" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td><span class="style3">Discription</span></td>
      <td><textarea name="activity_description" id="activity_description" class="validate[required,custom[onlyLetter]] form-control"></textarea></td>
    </tr>
    <tr>
      <td><span class="style3">Photo </span></td>
      <td><input name="activity_photo" type="file" id="activity_photo" class="validate[required] form-control" required></td>
    </tr>
    <tr>
      <td><span class="style3">Date</span></td>
	   <td><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y');
	  $syear=date('Y')+2;



	  $myCalendar = new tc_calendar("activity_date", true, true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$year-01-01");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2020, date('Y')+1);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
      <td width="183">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
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