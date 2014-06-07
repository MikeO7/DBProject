<?php
$con=mysqli_connect("localhost","root","root","Test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$employee_id = mysqli_real_escape_string($con, $_POST['Employeeid']);
$new_address = mysqli_real_escape_string($con, $_POST['NewAddress']);
$new_city = mysqli_real_escape_string($con, $_POST['NewCity']);
$new_state = mysqli_real_escape_string($con, $_POST['NewState']);
$new_postal_code = mysqli_real_escape_string($con, $_POST['NewPostalCode']);

$sql="INSERT INTO Customers (CompanyName, ContactName, MobilePhone, Email, Address, City, State, Country, PostCode) VALUES ('$company_name', '$contact_name', '$phone', '$email', '$address', '$city', '$state', '$country', '$postal_code')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>