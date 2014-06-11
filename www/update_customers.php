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