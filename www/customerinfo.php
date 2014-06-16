<html>
<header><title>Read Customer Payment & Invoice Info</title>

<link href="css/bootstrap.css" rel="stylesheet">
</header>
<body>

</body>
</html>


<?php

// EXAMPLE
PrintTable("SELECT companyName, contactName, phone, orderID, shippedDate, paymentDate, amount FROM Customers c JOIN Orders o ON c.customerID=o.customerID JOIN Payments p ON o.orderID = p.orderID");
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