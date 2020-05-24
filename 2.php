<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">




</head>
<body>
<?php
session_start();
  $servername = "localhost";
    $username = "project";
    $password = "project";
   
    $conn = mysqli_connect($servername, $username, $password,$username);  
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
      //echo "";
    }
          $sql = " SELECT * FROM  vcustomer";
          $result=$conn->query($sql);
          if (mysqli_query($conn,$sql)) 
          {
            //echo "comnn";
          }
          else
          {
          ?>
          <script type="text/javascript"> 
          window.alert("hw");
          </script>

          <?php
            echo "ERROR: couldn't able to log in $sql.".mysqli_error($conn);
          }
         ?>

<div class="container">          
  <table class="table table-hover">
    <thead class="table table-borderless">
      <tr>
        <th class="">Your Products</th>
      </tr>
    </thead>
    <?php 
    $var=1;
         while($row = $result->fetch_assoc())  
        {
          
              if ($_POST['name']!=NULL && $_POST['region']!=NULL) {
              
              	if ($_POST['name'] == $row['pname'] && $_POST['region'] == $row['fregion']) {
    ?>
    <tbody>
        <tr>
          <td>
            
              	<script type="text/javascript">
              		window.alert("ashjgdhsg");
              	</script>
            <?php
              		# code...
              	
	# code...

            echo $var.".".$row['pname'];
             echo " Product Id".$row['pid'];
            echo " Price: ".$row['pprice']; 
            echo " Quantity: ".$row['pqty'];
            echo " Weight: ".$row['pweight'];
            echo " Farmer Name: ".$row['fname'];
            echo " Farmer Region: ".$row['fregion'];
            echo " Farmer Phoneno: ".$row['fphone'];
            //$sql1 = " SELECT * FROM farmer where fid= $row['fid']";
            $var=$var+1;
            ?>
          </td>
        </tr>
    </tbody>      
        <?php
	        }
        } 
        
              elseif ($_POST['name']!=NULL && $_POST['region']==NULL) {

          
              	if ($_POST['name'] == $row['pname']) {
        ?>
    <tbody>
        <tr>
          <td>    
              	<script type="text/javascript">
              		window.alert("ashjgdhsg");
              	</script>
        <?php
              	     echo $var.".".$row['pname'];
             echo " Product Id".$row['pid'];
            echo " Price: ".$row['pprice']; 
            echo " Quantity: ".$row['pqty'];
            echo " Weight: ".$row['pweight'];
            echo " Farmer Name: ".$row['fname'];
            echo " Farmer Region: ".$row['fregion'];
            echo " Farmer Phoneno: ".$row['fphone'];	# code...
              	
	# code...

           
            //$sql1 = " SELECT * FROM farmer where fid= $row['fid']";
            $var=$var+1;
        ?>
          </td>
        </tr>
    </tbody> 
        <?php
	        }
        } 
              elseif ($_POST['name']==NULL && $_POST['region']!=NULL) {
              
              	if ($_POST['region'] == $row['fregion']) {
        ?>
    <tbody>
        <tr>
          <td>     
              	<script type="text/javascript">
              		window.alert("ashjgdhsg");
              	</script>
        <?php
              		# code...
              	
	# code...

            echo $var.".".$row['pname'];
             echo " Product Id".$row['pid'];
            echo " Price: ".$row['pprice']; 
            echo " Quantity: ".$row['pqty'];
            echo " Weight: ".$row['pweight'];
            echo " Farmer Name: ".$row['fname'];
            echo " Farmer Region: ".$row['fregion'];
            echo " Farmer Phoneno: ".$row['fphone'];
            //$sql1 = " SELECT * FROM farmer where fid= $row['fid']";
            $var=$var+1;
        ?>
          </td>
        </tr>
    </tbody>         

        <?php
	        }
        }
    }
        ?>  
      

    
</table>
</div>
</body>
</html>
