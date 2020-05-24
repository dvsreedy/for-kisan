<?php

  if(isset($_POST["submit1"])) 
   {

   		$name=$_POST['fname'];
   		$id=$_POST['fid'];
   		$region=$_POST['fregion'];
   		$phone=$_POST['fphone'];
   		$pass= $_POST['fpassword'];
		$servername = "localhost";
		$username = "project";
		$password = "project";
		if ($_POST['fpassword'] == $_POST['cfpassword']) 
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
		$query= "insert into farmer (fname,fid,fregion,fphone,fpassword)values('$name','$id','$region','$phone','$pass')";
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
 