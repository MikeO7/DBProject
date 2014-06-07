<?php
$con=mysqli_connect("localhost","root","root","Test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$company_name = mysqli_real_escape_string($con, $_POST['CompanyName']);
$contact_name = mysqli_real_escape_string($con, $_POST['ContactName']);
$phone = mysqli_real_escape_string($con, $_POST['Phone']);
$email = mysqli_real_escape_string($con, $_POST['Email']);
$address = mysqli_real_escape_string($con, $_POST['Address']);
$city = mysqli_real_escape_string($con, $_POST['City']);
$state = mysqli_real_escape_string($con, $_POST['State']);
$country = mysqli_real_escape_string($con, $_POST['Country']);
$postal_code = mysqli_real_escape_string($con, $_POST['Postalcode']);
$sales_rep_id = mysqli_real_escape_string($con, $_POST['SalesRepid']);

$sql="INSERT INTO Customers (CompanyName, ContactName, MobilePhone, Email, Address, City, State, Country, PostCode) VALUES ('$company_name', '$contact_name', '$phone', '$email', '$address', '$city', '$state', '$country', '$postal_code')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>