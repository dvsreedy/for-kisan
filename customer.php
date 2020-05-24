<?php

  if(isset($_POST["submit3"])) 
   {
   	 
   		$name=$_POST['cname'];
   		$id=$_POST['cid'];
   		$region=$_POST['cregion'];
   		$phone=$_POST['cphone'];
   		$pass= $_POST['cpassword'];
   		$email= $_POST['cemail'];
		$servername = "localhost";
		$username = "project";
		$password = "project";
		if ($_POST['cpassword'] == $_POST['cfpassword']) 
		{
			
		$conn = mysqli_connect($servername, $username, $password,$username);
		if (!$conn)
		{
    		die("Connection failed: " . mysqli_connect_error());
		}
		else
		{
			echo "Connection Successful";
		}
		$query= "insert into customer (cname,cid,cregion,cphone,cpassword,cemail)values('$name','$id','$region','$phone','$pass','$email')";
		if(mysqli_query($conn, $query))
		{
			echo "Data Inserted Successful";
			
?>
			<script>
			  window.alert("registeration Successful");
			  window.open("index.php","_self");
			</script>
<?php
        
		}
		else
		{
			?>
			<script >
			window.alert("registeration unsuccessfull");
			//window.open("register.php","_self");
			</script>
<?php			
		}
		mysqli_close($conn);
	    }
	else
	{
		echo("registeration not possible");
	}
}
?>
 