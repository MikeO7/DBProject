<?php
$con=mysqli_connect("localhost","root","root","Test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



mysqli_query($con, "ALTER TABLE Employees ADD INDEX `LastName` (`LastName`)");

echo "index made";

mysqli_close($con);
?>