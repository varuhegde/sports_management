<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('header.php');?>
    <!-- Sidebar menu-->
<?php include('sidebar.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Achievement View</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
        </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
      </div>
	  <a href="achievements_form.php" class="btn btn-primary">ADD NEW</a>
	  <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
    <tr>
      <th width="73" height="40">Sl no </th>
      <th width="133">Student Name</th>
      <th width="116">Sports Name</th>
      <th width="246">Achievement details </th>
      <th width="259">Achievement date</th>
      <th width="112">Edit</th>
      <th width="92">Delete</th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl_no=1;
	$sql="select * from achievements a,sports s,student st where a.sports_id=s.sports_id and a.student_id=st.student_id";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl_no++;?></td>
     <td>&nbsp;<?php echo $row['student_full_name'];?></td>
      <td>&nbsp;<?php echo $row['sports_name'];?></td>
      <td>&nbsp;<?php echo $row['achievement_details'];?></td>
      <td>&nbsp;<?php echo $row['achievement_date'];?></td>
      <td><a href="achievements_edit.php?achievement_id=<?php echo $row['achievement_id'];?>">Edit</a></td>
      <td><a href="achievements_delete.php?achievement_id=<?php echo $row['achievement_id'];?>">delete</a></td>
    </tr>
	<?php
	}
	?>
	 </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>
  </body>
</html>

  </table>
</form>
</body>
</html>
