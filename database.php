<?php
$con=mysqli_connect ("localhost","root",'','bidding');
if(!$con)
{ 
 die('could not connect:' .mysql_error());
}

mysqli_select_db($con,'bidding');
?>