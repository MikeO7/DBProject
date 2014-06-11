


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

<html>
<header><title>Read Without Indexing</title>

<link href="css/bootstrap.css" rel="stylesheet">
</header>
<body>

</body>
</html>


<?php

// EXAMPLE
PrintTable("SELECT * FROM Employees");
function PrintTable($query)
{ 
    // Connect
    $mysqli = new mysqli("localhost", "root", "root");
    if(!$mysqli) {
        die();
    }
    mysqli_select_db($mysqli, "Test");
    if(!$mysqli) {
        die();
    }
    if (!($res = $mysqli->query($query))) {
        if($mysqli) $mysqli->close();
        return;
    }
 
    echo "<table class=\"table table-striped\">"; 
 
    // Print the table's header row
    $numFields = $mysqli->field_count;
    echo "<tr>";
    $finfo = $res->fetch_fields();
    foreach ($finfo as $val) {
        echo "<td><b>" . $val->name . "</b></td>";
    }
    echo "</tr>";
 
    // Print each row
    $i = 0;
    while($row = $res->fetch_row())
    {
        
 
        for($j = 0; $j < $numFields; $j++)
        {
            echo "<td>" . $row[$j] . "</td>";
        }
 
        echo "</tr>";
        $i++;
    }
 
    echo "</table><br/><br/>";  
 
    // Free resources
    if($res) $res->free();    
    if($mysqli) $mysqli->close();   
}


?>