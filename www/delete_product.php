<?php
$con=mysqli_connect("localhost","root","root","Test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$product_id = mysqli_real_escape_string($con, $_POST['Productid']);


$sql="DELETE FROM Products WHERE ProductId = $product_id";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 row deleted";

mysqli_close($con);
?>