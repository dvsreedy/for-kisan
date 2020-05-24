<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php
session_start();

 $conn = mysqli_connect("localhost", "project", "project","project");

    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
      //echo "";

    }
    if (isset($_POST['submit2'])) {
    	$id=$_POST['fid'];
    	$sql="CALL `fdelete`($id);";
    	$stmt=$conn->prepare($sql);
    	$stmt->execute();
    	?>
    	<script type="text/javascript">
    		window.alert("Farmer account is deleted <?php ?>");
    	</script>
    	<?php
    	# code...
    }
        if (isset($_POST['submit3'])) {
    	$id=$_POST['cid'];
    	$sql="CALL `cdelete`($id);";
    	$stmt=$conn->prepare($sql);
    	$stmt->execute();
    	?>
    	<script type="text/javascript">
    		window.alert("Farmer account is deleted <?php ?>");
    	</script>
    	<?php
    	# code...
    }
?>
   
 

</body>
</html>









