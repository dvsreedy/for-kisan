    <?php
session_start();
  $servername = "localhost";
    $username = "project";
    $password = "project";
   
    $conn = mysqli_connect($servername, $username, $password,$username);
    $id=$_SESSION['fid'];

    $sql="SELECT * FROM product where fid=$id";
    $result=$conn->query($sql);
    $flag=0;
    while($row = $result->fetch_assoc())
    {
      if($row['pqty']>$row['pweight'])
      {
      	echo "Min Quantity requirement failed for Product id: $row[pid]";
      	$flag=1;
      }
        
    }
    if ($flag==0) {
    	echo "No Notification";
    }
?>
