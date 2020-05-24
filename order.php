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
        <a class="nav-link" href="#">Orders <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <br>
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
  $id=$_SESSION['fid'];
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
    
  $sql = " SELECT * FROM vpurchase where fid='$id'";
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
        while($row = $result->fetch_assoc())  
        {
        ?>
    <tbody>
        <tr>
          <td>

            <?php
                  # code...
            echo " Product Name: ".$row['pname'];
            echo " Product Id: ".$row['pid'];
            echo " Customer Name: ".$row['cname'];
            echo " Customer Id: ".$row['cid'];
            echo " Customer Phone: ".$row['cphone'];
            echo " Price: ".$row['tprice']; 
            echo " Weight: ".$row['tweight'];
            }
            ?>

          </td>
        </tr>
    </tbody>
  </div>
</table>
</div>
</body>
</html>        