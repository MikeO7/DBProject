<?php
 mysql_connect("localhost", "root", "root") or die(mysql_error()); 
 mysql_select_db("Test") or die(mysql_error());
 
 $query = $_POST["query"];
 echo 'Your query: ' . $query;
 
 $data = mysql_query($query) or die(mysql_error()); 
 
 Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<th>Last Name:</th> <td>".$info['LastName'] . "</td> ";
 Print "<th>First Name:</th> <td>".$info['FirstName'] . "</td> ";
 Print "<th>Job Title:</th> <td>".$info['jobTitle'] . "</td> "; 
 } 
 Print "</table>"; 
 
?>