<?php
$con=mysqli_connect("localhost","root","root","Test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$employee_id = mysqli_real_escape_string($con, $_POST['Employeeid']);
$new_address = mysqli_real_escape_string($con, $_POST['Address']);
$new_city = mysqli_real_escape_string($con, $_POST['City']);
$new_state = mysqli_real_escape_string($con, $_POST['State']);
$new_postal_code = mysqli_real_escape_string($con, $_POST['PostalCode']);

mysqli_query($con, "UPDATE Employees SET Address = '$new_address', City = '$new_city', State = '$new_state', PostalCode = '$new_postal_code' WHERE EmployeeId = $employee_id");

echo "1 record updated";

mysqli_close($con);
?>