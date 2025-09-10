<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Input</title> 
<style> 
table,tr,td,th { 
font-size: 20px; 
border: 1px solid black; } 
</style></head> 
<body> 
<form method="post" action="./send8.php"> 
Name:<input type="text" name="name" required><br><br> 
Age:<input type="number" name="age" required><br><br> 
<input type="submit"><br><br> 
</form> 
<table> 
<tr> 
<th>Name</th> 
<th>Age</th> 
</tr> 
<?php 
$conn = new mysqli("localhost","root","","demo1"); 
if($conn->connect_error) { 
echo("Connection failed" . $conn->connection_error); 
} 
$sql = "SELECT name,age from users"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) { 
// output data of each row 
while($row = $result->fetch_assoc()) { 
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["age"]. "</td></tr>"; 
} 
} 
$conn->close(); 
?> </table></body></html> 