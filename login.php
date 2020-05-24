<?php 
  session_start();
include "dt.php"
  if(isset($_POST["submit2"])  
  {

    $conn = mysqli_connect("localhost", "project", "project","project");
  	$id = $_POST['fid'];
  	$password = $_POST['fpassword'];
  	$query = "SELECT * FROM farmer WHERE fid = '$id' AND fpassword = '$password'";
  	if (mysqli_query($conn,$query)) 
  	{
  		echo "<h1> Connection success </h1>";
  	}
  	else
  	{
  		echo "ERROR: couldn't able to log in $query.".mysqli_error($conn);
  	}
  	$run=mysqli_query($conn,$query);
  	$row=mysqli_num_rows($run);
  	if($row<1)
  	{
      ?>
  		<script>
  			window.alert('invalid entry');
  			//window.open('login.php','_self');
  		</script>
    <?php
    }     
    else
    {

         	/*$data = mysqli_fetch_assoc($run);
         	$i_d = $data['fname'];
         	$u_sn = $data['usn'];
         	echo "id".$id;*/

         	$_SESSION["fid"] = $id;
         	//$_SESSION["usn"] = $u_sn;
         	header('location:fhome.php'); 
    }

  }
?>




<?php 
  if(isset($_POST["submit4"])) 
  {

    $conn = mysqli_connect("localhost", "project", "project","project");
    $id = $_POST['cid'];
    $password = $_POST['cpassword'];
    $query = "SELECT * FROM customer WHERE cid = '$id' AND cpassword = '$password'";
    if (mysqli_query($conn,$query)) 
    {
      echo "<h1> Connection success </h1>";
    }
    else
    {
      echo "ERROR: couldn't able to log in $query.".mysqli_error($conn);
    }
    $run=mysqli_query($conn,$query);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
      ?>
      <script>
        window.alert('invalid entry');
        //window.open('login.php','_self');
      </script>
    <?php
    }     
    else
    {

          /*$data = mysqli_fetch_assoc($run);
          $i_d = $data['fname'];
          $u_sn = $data['usn'];
          echo "id".$id;*/

          $_SESSION["cid"] = $id;
          //$_SESSION["usn"] = $u_sn;
          header('location:chome.php'); 
    }

  }
?>




