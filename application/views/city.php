<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"marital");
 if($_REQUEST["id"]){
 	$state=$_REQUEST["id"];
 	$rs=mysqli_query($con,"select * from cities where state_id='$state'");
 	echo "<select>";
 	echo"<option>select city</option>";

 	while($r=mysqli_fetch_array($rs)){

 ?>
 <option value="<?php echo $r[1]; ?>"><?php echo $r[1]; ?></option>
<?php

 	}
 	echo "</select>";
 }
 ?>
