<?php
  require "conn.php";
  $user_name = $_POST["user_name"];
  $user_pass = $_POST["password"];
  $mysql_qry  = "select * from user where name like '$user_name' and surname '$user_pass'";

  $result = mysql_qry($conn, $mysql_qry);

  if(mysqli_num_rows($result) > 0){
    echo "login successful";
  }
  else {
    echo "login failed";
  }

?>
