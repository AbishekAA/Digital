
<?php
  $con3 = mysqli_connect('localhost','root','','digital_contract');
  
  if ($con3->connect_error) {
    die("Connection failed: " . $con3->connect_error."<br>");
  }
?>