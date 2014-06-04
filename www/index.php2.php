
 <?php 
 // Connects to your Database 
 mysql_connect("localhost:8888", "root", "root") or die(mysql_error()); 
 mysql_select_db("Test") or die(mysql_error()); 

 //Sample on how to query the database
 $data = mysql_query("SELECT * FROM friends WHERE pet='Cat'") 
 or die(mysql_error()); 
 Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<th>Name:</th> <td>".$info['name'] . "</td> "; 
 Print "<th>Color:</th> <td>".$info['fav_color'] . "</td> "; 
 Print "<th>Food:</th> <td>".$info['fav_food'] . "</td> "; 
 Print "<th>Pet:</th> <td>".$info['pet'] . " </td></tr>"; 
 } 
 Print "</table>"; 
 ?> 


<html>
<header><title>This is title</title></header>
<body>
Hello world
</body>
</html>