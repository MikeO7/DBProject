<?php
$con=mysqli_connect("localhost","root","root","Test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$employee_id = mysqli_real_escape_string($con, $_POST['Employeeid']);


$sql="DELETE FROM Employees WHERE EmployeeId = $employee_id";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 row deleted";

mysqli_close($con);
?>






<!DOCTYPE html>
 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="author">
  <link href="" rel="shortcut icon">
 
  <title>Employees</title><!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
</head>
 
<body>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Employee ID</th>
 
          <th>Last Name</th>
 
          <th>First Name</th>
 
          <th>Job Title</th>
          <th>Mobile Phone</th>
          <th>Email</th>
          <th>Address</th>
          <th>City</th>
          <th>Country</th>
          <th>State</th>
          <th>Postal Code</th>
        </tr>
      </thead>
 
      <tbody>
        <?php
            //set up mysql connection
            mysql_connect("root", "root", "") or die(mysql_error());
            //select database
            mysql_select_db("Test") or die(mysql_error());
            // Retrieve all the data from the "tblstudent" table
            $result = mysql_query("SELECT * FROM Employees") or die(mysql_error());
            // store the record of the "tblstudent" table into $row
 
            while ($row = mysql_fetch_array($result)) {
                // Print out the contents of the entry 
                echo '<tr>';
                echo '<td>' . $row['EmployeeId'] . '</td>';
                echo '<td>' . $row['LastName'] . '</td>';
                echo '<td>' . $row['FirstName'] . '</td>';
                echo '<td>' . $row['JobTitle'] . '</td>';
                echo '<td>' . $row['MobilePhone'] . '</td>';
                echo '<td>' . $row['Email'] . '</td>';
                echo '<td>' . $row['Address'] . '</td>';
                echo '<td>' . $row['City'] . '</td>';
                echo '<td>' . $row['Country'] . '</td>';
                echo '<td>' . $row['PostalCode'] . '</td>';

            }
            ?>      
 
      </tbody>
 
      <tbody></tbody>
    </table>
  </div><!-- /container -->
</body>
</html>