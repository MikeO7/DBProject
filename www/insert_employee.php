<?php
$con=mysqli_connect("localhost","root","root","Test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$first_name = mysqli_real_escape_string($con, $_POST['FirstName']);
$last_name = mysqli_real_escape_string($con, $_POST['LastName']);
$job_title = mysqli_real_escape_string($con, $_POST['JobTitle']);
$phone = mysqli_real_escape_string($con, $_POST['Phone']);
$email = mysqli_real_escape_string($con, $_POST['Email']);
$address = mysqli_real_escape_string($con, $_POST['Address']);
$city = mysqli_real_escape_string($con, $_POST['City']);
$state = mysqli_real_escape_string($con, $_POST['State']);
$country = mysqli_real_escape_string($con, $_POST['Country']);
$postal_code = mysqli_real_escape_string($con, $_POST['PostalCode']);

$sql="INSERT INTO Employees (LastName, FirstName, JobTitle, MobilePhone, Email, Address, City, Country, State, PostalCode) VALUES ('$last_name', '$first_name', '$job_title', '$phone', '$email', '$address', '$city', '$country', '$state', '$postal_code')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>