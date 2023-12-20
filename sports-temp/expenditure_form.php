
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
<!--
.style5 {font-size: medium; font-style: italic; font-weight: bold; }
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
          <h1><i class="fa fa-edit"></i>Expenditure</h1>
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
            <h3 class="tile-title">Expenditure</h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>
<form name="form1" method="post" action="expenditure_insert.php" id="formID">
  <table width="538" height="406" border="0" align="center">
    <tr>
      <td width="104"><span class="style5">Name:</span></td>
      <td width="207"><input name="exp_name" type="text" id="exp_name" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td><span class="style5">Description:</span></td>
      <td><textarea name="exp_description" id="exp_description" class="validate[required] form-control"></textarea></td>
    </tr>
    <tr>
      <td><span class="style5">Amount:</span></td>
      <td><input name="amount" type="text" id="amount" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td><span class="style5">Date:</span></td>
	  <td><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date", true, true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
     
    </tr>
    <tr>
      <td height="42" colspan="2"><div align="center">
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
