<?php
session_start();
if(!(isset($_SESSION['cid'])))
{
  ?>
  <script type="text/javascript">
    window.open("index.php","_self");
  </script>
  <?php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">




</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <input class="form-control mr-sm-2" type="search" name="name" placeholder="Search by product name" aria-label="Search">
      <input class="form-control mr-sm-2" type="search" name="region" placeholder="Search by Region" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
    </form>
    <br>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <button class="btn btn-outline-info btn-sm" style='margin-right:16px' data-toggle="modal" data-target="#myModal4"><strong>Order Now</strong></button>
    </li>
      <li class="nav-item">
        <a href="myorder.php"><button class="btn btn-outline-info btn-sm" style='margin-right:16px'><strong>My Orders</strong></button></a>
      </li>    
    <li class="nav-item">
        <a href="logout.php"><button class="btn btn-outline-info btn-sm" style='margin-right:16px'><strong>Logout</strong></button></a>
      </li>
    </ul>  
  </div>
</nav>




<div class="jumbotron">
 <h1> Welcome!</h1>
</div>



<?php 
 $conn = mysqli_connect("localhost", "project", "project","project");
          //$id=$_SESSION['fid'];
          $sql = " SELECT * FROM vcustomer order by fregion,pname";
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
    <div>
       <?php 
       $di=0;
       if(isset($_POST["submit"])) {
    $var=1;
         while($row = $result->fetch_assoc())  
        {
          
              if ($_POST['name']!=NULL && $_POST['region']!=NULL) {
              
                if ($_POST['name'] == $row['pname'] && $_POST['region'] == $row['fregion']) {
    ?>
    <tbody>
        <tr>
          <td>

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

        <?php
                     echo $var.".".$row['pname'];
             echo " Product Id".$row['pid'];
            echo " Price: ".$row['pprice']; 
            echo " Quantity: ".$row['pqty'];
            echo " Weight: ".$row['pweight'];
            echo " Farmer Name: ".$row['fname'];
            echo " Farmer Region: ".$row['fregion'];
            echo " Farmer Phoneno: ".$row['fphone'];  # code...
                
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



   }
  else{
    $var=1;
         while($row = $result->fetch_assoc())  
        {
          
          ?>
    <tbody>
           <tr>
            <td>
              <?php
            echo $var.".".$row['pname'];
             echo " Product Id".$row['pid'];
            echo " Price: ".$row['pprice']; 
            echo " Quantity: ".$row['pqty'];
            echo " Weight: ".$row['pweight'];
            echo " Farmer Name: ".$row['fname'];
            echo " Farmer Region: ".$row['fregion'];
            echo " Farmer Phoneno: ".$row['fphone'];
            $di=$row['pid'];
            //$sql1 = " SELECT * FROM farmer where fid= $row['fid']";
            $var=$var+1;
            ?>
            </td>
            </tr>
          </tbody>


        <?php
 }     



  } 

        ?>   
 

<div class="container">          
  <table class="table table-hover">
    <thead class="table table-borderless">
      <tr>
        <th class="">Product Name</th>
        <th class="">Product count</th>
        <th class="">Product Min Price</th>
        <th class="">Product Max Price</th>
      </tr>
    </thead>
    <div>
    <?php
     $ql="SELECT COUNT(pid),MIN(pprice),MAX(pprice),pname FROM product GROUP BY pname";
     $relt=$conn->query($ql);
     while ($ow = $relt->fetch_assoc()) 
     {
      ?>


       <tbody>
        <tr>
          <td>
        <?php
        echo $ow['pname'];
        //echo " Product Count: ".$ow['COUNT(pid)'];
        ?>
         </td>
          <td>
        <?php
        //echo "Product Name: ".$ow['pname'];
        echo $ow['COUNT(pid)'];
        //echo $ow['MIN(pprice)'];
        ?>
         </td>
         <td>
        <?php
        //echo "Product Name: ".$ow['pname'];
       // echo $ow['COUNT(pid)'];
        echo $ow['MIN(pprice)'];
        ?>
         </td>
         <td>
        <?php
        //echo "Product Name: ".$ow['pname'];
        //echo $ow['COUNT(pid)'];
        echo $ow['MAX(pprice)'];
        ?>
         </td>
        </tr>
    </tbody>
     <?php 
   }
   ?>


<!-- The Login Modal -->
<div class="modal fade" id="myModal4">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Order</h4>
        <br>
        <br>
        <form method="post" action="purchase.php">
        <input type="text" class="bg-light " name="pid" placeholder="Product Id">
        <br>
        <br>
        <input type="number" step="0.01" class="bg-light " name="weight" placeholder="Weight">
        <br>
        <br>
        <button type="submit" name="submit1" class="btn btn-info">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>



     
    </div>
  </table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>