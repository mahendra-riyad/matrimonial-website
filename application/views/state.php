<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"marital");
 if($_REQUEST["id"]){
 	$country=$_REQUEST["id"];
 	$rs=mysqli_query($con,"select * from states where country_id='$country'");
 	echo "<select>";
 	echo "<option>select state</option>";
 	while($r=mysqli_fetch_array($rs)){

 ?>
 <option value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
<?php

 	}
 	echo "</select>";
 }
 ?>
