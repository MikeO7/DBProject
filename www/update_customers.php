<?php
$con=mysqli_connect("localhost","root","root","Test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$customer_id = mysqli_real_escape_string($con, $_POST['Customerid']);
$new_company_name = mysqli_real_escape_string($con, $_POST['CompayName']);
$new_contact_name = mysqli_real_escape_string($con, $_POST['ContactName']);
$new_phone = mysqli_real_escape_string($con, $_POST['Phone']);

mysqli_query($con, "UPDATE Customers SET CompanyName = '$new_company_name', ContactName = '$new_contact_name', MobilePhone = '$new_phone' WHERE CustomerId = $customer_id");

echo "1 record updated";

mysqli_close($con);
?>