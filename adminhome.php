<?php
session_start();
//if(!(isset($_SESSION['fid'])))

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
      <li class="nav-item">
        <button class="btn btn-outline-info btn-sm" style='margin-right:16px' data-toggle="modal" data-target="#myModal2"><strong>Delete Farmer</strong></button>
      </li>
      <li class="nav-item">
        <button class="btn btn-outline-info btn-sm" style='margin-right:16px' data-toggle="modal" data-target="#myModal3"><strong>Delete Customer</strong></button>
      </li>  
    </ul>
    <ul class="navbar-nav ml-auto">   
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
 ?>        





<div class="container">          
  <table class="table table-hover">
    <h3> Product Statistics</h3>
    <thead class="table table-borderless">
      <tr>
        <th class="">Product Name </th>
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
</div>
</table>
</div>





<div class="modal fade" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Product</h4>
        <br>
        <br>
        <form method="post" action="admindelete.php">
        <input type="text" class="bg-light " name="fid" placeholder="Farmer id" required="">
        <br>
        <br>
        <button type="submit" name="submit2" class="btn btn-info">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Customer</h4>
        <br>
        <br>
        <form method="post" action="admindelete.php">
        <input type="text" class="bg-light " name="cid" placeholder="Customer id" required="">
        <br>
        <br>
        <button type="submit" name="submit3" class="btn btn-info">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>