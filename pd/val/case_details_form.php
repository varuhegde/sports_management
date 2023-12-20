 <?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="case_details_insert.php">
  <table width="419" height="464" border="0" align="center">
  
    <tr>
      <td><strong>Name</strong></td>
      <td><input name="case_name" class="validate[required,custom[onlyLetter]] form-control" type="text" id="case_name"></td>
    </tr>
	
    <tr>
      <td><strong>Parti One </strong></td>
      <td><input name="parti_1" class="validate[required,custom[onlyLetter]] form-control"type="text" id="parti_1"></td>
    </tr>
    <tr>
      <td><strong>Parti Two </strong></td>
      <td><input name="parti_2" class="validate[required,custom[onlyLetter]] form-control" type="text" id="parti_2"></td>
    </tr>
    <tr>
      <td><strong>Location</strong></td>
      <td><input name="location" class="validate[required,custom[onlyLetter]] form-control" type="text" id="location"></td>
    </tr>
    <tr>
      <td><strong>Case Work </strong></td>
      <td><input name="case_work_id" class="validate[required,custom[onlyLetter]] form-control"type="text" id="case_work_id"></td>
    </tr>
    <tr>
      <td><strong>Police Station Id </strong></td>
      <td><select name="police_stat_id" class="validate[required] form-control"id="police_stat_id">
	  <option value="">select police Station Id</option>
	  <?php
	  include('db_connect.php');
	  $sql="select * from police_station";
	  $res=$conn->query($sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['police_stat_id'];?>"><?php echo $row['police_stat_name'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger  btn"></td>
    </tr>
  </table>
</form>

   





</body>
</html>