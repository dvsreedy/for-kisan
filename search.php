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
      <li class="nav-item">
        <a class="nav-link" href="#">My cart</a>
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
          //$id=$_SESSION['fid'];
          $sql = " SELECT * FROM vcustomer";
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
       if(isset($_POST["submit"])) {
        $aa=$_POST['name'];
                   $pp="SELECT MIN(pprice) FROM product WHERE pname=$aa" ;
                $resul=$conn->query($pp);
                //$r = $resul->fetch_assoc();
                //echo($r);
                ?>
          <script type="text/javascript"> 
          window.alert("<?php echo($resul);?>");
          </script>
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

            <?php
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
      
    </div>
  </table>
</div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>