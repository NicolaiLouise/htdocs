<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "iot");

$r=mysqli_query($con, "select id from room where 1");

while($row=mysqli_fetch_array($r))
{
  $out[]=$row;
}
print(json_encode($out));
mysqli_close($con);

?>
