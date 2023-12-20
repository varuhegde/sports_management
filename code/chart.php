<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php'); ?>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('header.php'); ?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Students</h4>
			  <?php
  include('db_connect.php');
  $sql="select count(std_id) as cnt from  student_details";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
  $student_count=$row['cnt'];
  
  ?>
              <p><b><?php echo $student_count; ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Donors</h4>
			  <?php
  
  $sql1="select count(donor_id) as cnt1 from  donor_details";
  $res1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_array($res1);
  
  $donor_count=$row1['cnt1'];
  
  ?>
              <p><b><?php echo $donor_count; ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Staff Details</h4>
			   <?php
  
  $sql2="select count(staff_id) as cnt2 from  staff_details";
  $res2=mysqli_query($conn,$sql2);
  $row2=mysqli_fetch_array($res2);
  
  $staff_count=$row2['cnt2'];
  
  ?>
              <p><b><?php echo $staff_count; ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Activities</h4>
			   <?php
  
  $sql3="select count(activity_id) as cnt3 from  activity";
  $res3=mysqli_query($conn,$sql3);
  $row3=mysqli_fetch_array($res3);
  
  $activity_count=$row3['cnt3'];
  
  ?>
              <p><b><?php echo $activity_count; ?></b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Monthly Salary</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Fund Status</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
    
    </main>
   <?php
  
  $sql4="select sum(donation_amt) as dsum from  donation_details";
  $res4=mysqli_query($conn,$sql4);
  $row4=mysqli_fetch_array($res4);
  
  $dsum=$row4['dsum'];
  
  
  $sql5="select sum(amount) as esum from  expenditure ";
  $res5=mysqli_query($conn,$sql5);
  $row5=mysqli_fetch_array($res5);
  
  $esum=$row5['esum'];
  
  
  $tot1=0;
  $tot2=0;
  $tot3=0;
  $tot3=0;
  $tot4=0;
  $tot5=0;
  $year=date('Y');
  
  
  $sql="select * from  staff_salary_details where staff_year='$year'  ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $month=$row['staff_month'];
  
  if($month=="01")
  {
  $tot1=$tot1+$row['net_salary'];
	}
	
	if($month=="02")
  {
  $tot2=$tot2+$row['net_salary'];
	}
	
	if($month=="03")
  {
  $tot3=$tot3+$row['net_salary'];
	}
	
	if($month=="04")
  {
  $tot4=$tot4+$row['net_salary'];
	}
	
	if($month=="05")
  {
  $tot5=$tot5+$row['net_salary'];
	}
	
	
	}
	
	
	
 ?>
  
  
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
				
      			data: [ <?php echo $tot1; ?>, <?php echo $tot2; ?>, <?php echo $tot3; ?>, <?php echo $tot4; ?>, <?php echo $tot5; ?>]
				
		    		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [0, 0, 0, 0, 0]
      		}
      	]
      };
	  
      var pdata = [
      	{
      		value: <?php echo $dsum; ?>,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Donation"
      	},
      	{
      		value: <?php echo $esum; ?>,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "Expenditure"
      	}
		
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>