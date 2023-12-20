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
          <h1><i class="fa fa-th-list"></i> Activity View</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
        </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
      </div>
	  <a href="activity_form.php" class="btn btn-primary">ADD NEW</a><hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>	
                  <tr>
    <th width="121" height="47">S.NO</th>
    <th width="134">Activity name </th>
    <th width="149">Description: </th>
    <th width="133">Photo:</th>
    <th width="153">Date</th>
    <th width="164">Edit</th>
    <th width="160">Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $sn=1;
  include('db_connect.php');
  $sql="select * from  activity";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td height="120"><?php echo $sn++;?></td>
    <td><?php echo $row['activity_name'];?></td>
    <td><?php echo $row['activity_description'];?></td>
    <td><img src="../img/activity/<?php echo $row['activity_photo'];?>" width="75px" height="75px"> </td>
    <td><?php echo $row['activity_date'];?></td>
    <td><div align="center"><a href="activity_edit.php?activity_id=<?php echo $row['activity_id']; ?>" onClick="return confirm('You want to edit ? ');" title="Edit"><img src="img/edit.png" width="35px" height="35px"></a></div></td>
    <td><div align="center"><a href="activity_delete.php?activity_id=<?php echo $row['activity_id']; ?>" onClick="return confirm('You want to Delete ? ');" title="Delete"><img src="img/delete.png" width="35px" height="35px"></a></div></td>
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
