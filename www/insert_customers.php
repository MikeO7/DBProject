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
$postal_code = mysqli_real_escape_string($con, $_POST['PostalCode']);
$sales_rep_id = mysqli_real_escape_string($con, $_POST['SalesRepid']);

$sql="INSERT INTO Customers (CompanyName, ContactName, MobilePhone, Email, Address, City, State, Country, PostCode) VALUES ('$company_name', '$contact_name', '$phone', '$email', '$address', '$city', '$state', '$country', '$postal_code')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

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
PrintTable("SELECT * FROM Customers");
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