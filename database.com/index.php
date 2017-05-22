
<html>
<body>

<?php
//database connection
$server="localhost";
$user="root";
$pass="";
$dbname="inventory_system";

$con=new mysqli($server,$user,$pass,$dbname);

if($con->connect_error){
die("Connection failed:".$con->connection_error);
}
else echo"CONNECTION SUCCESSFUL";


//Creating database
$sql="CREATE DATABASE inventory_system";
if($con->query($sql)===TRUE){
	echo"NEW DATABASE ADDED";
	}
else echo "FAILED!";
//$con->close();

//create table
$sql="Create Table employee(
emp_id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
lastname VARCHAR(50) NOT NULL,
firstname VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
regdate TIMESTAMP
)";

if ($con->query($sql)===TRUE) {
	echo"NEW TABLE CREATED";
	}
	else echo"FAILED!";
	$con->close();
?>
</body>
</html>