<<?php 
$conn = mysqli_connect("localhost", "root",'',"project");
if(!$conn)
{
	die("Connection failed".mysql_connect_error());
}
else
{
	echo "<h1>Connection Successful</h1>";
}

?>  

