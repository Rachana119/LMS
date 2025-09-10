<?php 
$conn = new mysqli("localhost","root","","demo1"); 
if($conn->connect_error) { 
echo("Connection failed" . $conn->connection_error); 
} 
$name=$_POST["name"]; 
$age=$_POST["age"]; 
$sql = "INSERT INTO users(name,age) values('$name','$age')"; 
if($conn->query($sql)==true) { 

header("Location: ./prog8.php"); 
} else { echo "failed"; 
} $conn->close();?> 