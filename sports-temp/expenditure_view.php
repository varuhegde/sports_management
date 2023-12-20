<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tag.php');?>
  <style type="text/css">
<!--
.style1 {
	font-size: large;
	font-weight: bold;
}
-->
  </style>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('header.php');?>
    <!-- Sidebar menu-->
<?php include('sidebar.php');?>
<?php include("cal.php"); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Expenditure View</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
        </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
      </div>
	  <a href="expenditure_form.php" class="btn btn-primary">ADD NEW</a><hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
			  <form name="form1" method="post" action="expenditure_view_next.php">
			    <table width="968" border="0">
  <tr>
    <td width="139">From Date: </td>
    <td width="255"><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date1", true, false);
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
    <td width="161">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Date :
&nbsp;&nbsp;&nbsp;</td>
    <td width="350"><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date2", true, false);
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
    <td width="249"><input type="submit" name="Submit" class="btn btn-primary" value="SEARCH"></td>
  </tr>
</table>		  
			  </form>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <td height="47"><span class="style1">S.No</span></td>
    <td><span class="style1">Name</span></td>
    <td><span class="style1">Description</span></td>
    <td><span class="style1">Amount</span></td>
    <td><span class="style1">Date</span></td>
    <td><span class="style1">Edit</span></td>
    <td><span class="style1">Delete</span></td>
	</thead>
  </tr>
  <tbody>
  <?php
  $sn=1;
  $tot=0;
  include('db_connect.php');
  $sql="select * from  expenditure";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+$row['amount'];
  ?>
  <tr>
    <td height="53"><?php echo $sn++;?></td>
    <td><?php echo $row['exp_name'];?></td>
    <td><?php echo $row['exp_description'];?></td>
    <td><?php echo $row['amount'];?></td>
    <td><?php echo $row['date'];?></td>
    <td><div align="center"><a href="expenditure_edit.php?exp_id=<?php echo $row['exp_id'];?>"onClick="return confirm('You want to edit ? ');" title="Edit"><img src="img/edit.png" width="35px" height="35px"></a></div></td>
    <td><div align="center"><a href="expenditure_delete.php?exp_id=<?php echo $row['exp_id'];?>"onClick="return confirm('You want to Delete ? ');" title="Delete"><img src="img/delete.png" width="35px" height="35px"></a></div></td>
	<?php
	}
	?>
  
            </tbody>
			                  <tr>
    <td height="47">&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong><h4 style="color:#0000CC ">Total Amount </h4></strong></td>
    <td><div ><h4 style="color:#0000CC "><?php echo $tot; ?></h4></strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	</thead>
  </tr>

              </table>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>
 
</body>
</html>
