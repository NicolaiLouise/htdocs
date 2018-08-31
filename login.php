<?php
require "conn.php";
$user_name = "admin";
$user_pass = "admin";
$mysql_qry = "select * from admin where uName like '$user_name' and uPass like '$user_pass';";
$result = mysqli_query($conn, $mysql_qry);
if(mysqli_num_rows($result) > 0) {
  echo "Login successful";
}else{
  echo "Login failed";
}

?>
