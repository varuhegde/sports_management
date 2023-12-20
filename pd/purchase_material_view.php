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
          <h1><i class="fa fa-th-list"></i> <span class="draggable sticky">Purchase</span> <span class="draggable sticky right">Material</span></h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
        </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
      </div>
    <a href="purchase_material_form.php" class="btn btn-primary">ADD NEW</a>
    <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
      
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
    <tr>
      <th>Sl No</th>
      <th><span class="draggable sticky right">Vendor Name</span></th>
      <th><span class="draggable sticky right">Material Name</span></th>
      <th><span class="draggable sticky">Quantity</span></th>
      <th><span class="draggable sticky">Purchase Price</span></th>
	   <th><span class="draggable sticky">Total Rate</span></th>
      <th><span class="draggable sticky">Purchase Date</span></th>
	 
     
      <th>Delete</th>
    </tr>
     </thead>
  <tbody>
	<?php
	include('../db_connect/db_connect.php');
	$tot=0;
	$sql="select * from purchase_material pm,vendor v,material m where pm.vendor_id=v.vendor_id and m.material_id=pm.material_id";
	$res=mysqli_query($conn,$sql);
	$no=1;
	while($row=mysqli_fetch_array($res))
	{
	$tot=$tot+($row['quantity']*$row['purchase_price']);
	?>
    <tr>
      <td>&nbsp;<?php echo $no++;?></td>					
      <td>&nbsp;<?php echo $row['vendor_name'];?></td>
      <td>&nbsp;<?php echo $row['material_name'];?></td>
      <td>&nbsp;<?php echo $row['quantity'];?></td>
	  <td>&nbsp;<?php echo $row['purchase_price'];?></td>
      <td>&nbsp;<?php echo ($row['quantity']*$row['purchase_price'])?></td>
	  <td>&nbsp;<?php echo $row['purchase_date'];?></td>
      <td><a href="purchase_material_delete.php?purchase_material_id=<?php echo $row['purchase_material_id'];?>">Delete</a></td>
    </tr>
    
	<?php
	}
	?>
   </tbody>
   <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Total</strong></td>
      <td>&nbsp;<strong><?php echo $tot; ?></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
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
