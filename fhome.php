<?php
session_start();
if(!(isset($_SESSION['fid'])))
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
        <button class="btn btn-outline-info btn-sm" style='margin-right:16px' data-toggle="modal" data-target="#myModal1"><strong>Add</strong></button>
      </li>
      <li class="nav-item">
        <button class="btn btn-outline-info btn-sm" style='margin-right:16px' data-toggle="modal" data-target="#myModal2"><strong>Delete</strong></button>
      </li>
      <li class="nav-item">
        <button class="btn btn-outline-info btn-sm" style='margin-right:16px' data-toggle="modal" data-target="#myModal3"><strong>Modify</strong></button>
      </li>  
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="order.php"><button class="btn btn-outline-info btn-sm" style='margin-right:16px'><strong>My Orders</strong></button></a>
      </li> 
      <li class="nav-item">
        <a href="finfo.php"><button class="btn btn-outline-info btn-sm" style='margin-right:16px'><strong>Notification</strong></button></a>
      </li>      
    <li class="nav-item">
        <a href="logout.php"><button class="btn btn-outline-info btn-sm" style='margin-right:16px'><strong>Logout</strong></button></a>
      </li>
    </ul>
  </div>
</nav>



<!-- The Login Modal -->
<div class="modal fade" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">      	
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Product</h4>
        <br>
        <br>
        <form method="post" action="product.php">
        <input type="text" class="bg-light " name="pname" placeholder="Product name" required="">
        <br>
        <br>
        <input type="text" class="bg-light " name="pid" placeholder="Product id" required="">
        <br>
        <br>
        <input type="number" step="0.01" name="pprice" placeholder="Price" required="">
        <br>
        <br>
        <input type="number" step="0.01" class="bg-light " name="pqty" placeholder="Minimum Quantity" required="">
        <br>
        <br>
        <input type="number" step="0.01" class="bg-light " name="pweight" placeholder="Weight" required="">
        <br>
        <br>
        <button type="submit" name="submit1" class="btn btn-info">Confirm</button>
        </form>
      </div>
    </div>
  </div>
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
        <form method="post" action="product.php">
        <input type="text" class="bg-light " name="pname" placeholder="Product name" required="">
        <br>
        <br>
        <input type="text" class="bg-light " name="pid" placeholder="Product id" required="">
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
        <h4 class="modal-title">Alter Product</h4>
        <br>
        <br>
        <form method="post" action="product.php">
        <input type="text" class="bg-light " name="pname" placeholder="Product Name" required="">
        <br>
        <br>
        <input type="text" class="bg-light " name="pid" placeholder="Product id" required="">
        <br>
        <br>
        <input type="number" step="0.01", name="pprice" placeholder="New Price" required="">
        <br>
        <br>
        <input type="number" step="0.01" class="bg-light " name="pqty" placeholder="New Minimum Quantity" required="">
        <br>
        <br>
        <input type="number" step="0.01" name="pweight" placeholder="New Weight" required="">
        <br>
        <br>
         <button type="submit" name="submit3" class="btn btn-info">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>




<div class="jumbotron">
 <h1> Welcome!</h1>
</div>



<?php 
 $conn = mysqli_connect("localhost", "project", "project","project");
          $id=$_SESSION['fid'];
          $sql = " SELECT * FROM product WHERE fid ='$id'";
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
    $var=1;
         while($row = $result->fetch_assoc())  
        {
          
          ?>
    <tbody>
           <tr>
            <td>
              <h3>
              <?php
            echo $var.". ".$row['pname']?></h3> <?php echo" Product id:".$row['pid'];  
            echo " Price: ".$row['pprice']; 
            echo " Quantity: ".$row['pqty'];
            echo " Weight: ".$row['pweight'];
            $var=$var+1;
            ?>
            </td>
            </tr>
        <?php
        } 
        ?>   
      
    </tbody>
    </div>
  </table>
</div>








  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>