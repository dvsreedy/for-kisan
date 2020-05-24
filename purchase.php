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
    
    if(isset($_POST["submit1"])) 
   {

  $id=$_POST['pid'];
  $weight=$_POST['weight'];
  $sl = " SELECT pqty,pweight from product where pid=$id";
  $rsult=$conn->query($sl); 
  $rw = $rsult->fetch_assoc();
  if($weight<=$rw['pqty']){
    
      # code...

              ?>
      <script>
        window.alert("Weight less than min Quantity");
        window.open("chome.php","_self");
      </script>
<?php

  }
  elseif ($weight>=$rw['pweight']) {

                  ?>
      <script>
        window.alert("Weight more than given");
        window.open("chome.php","_self");
      </script>
<?php


}
  else{
$sql = " SELECT * FROM vcustomer where pid=$id";
          $result=$conn->query($sql);
        if (mysqli_query($conn,$sql)) 
          {
          $row = $result->fetch_assoc();
          $tprice=$row['pprice']*$weight;
          $ccid=$_SESSION['cid'];

          $query= "insert into purchase (pid,cid,tprice,tweight)values('$id','$ccid','$tprice','$weight')";
          $id=$_POST['pid'];
          $sq = " SELECT pweight FROM product where pid=$id";
          $result=$conn->query($sq);
          $ro = $result->fetch_assoc();
          $wei=$ro['pweight']-$weight;
          $que= "UPDATE product SET pweight = $wei where pid = $id";
          $w=mysqli_query($conn, $que);
          //$rw1= $w->fetch_assoc();
          ?>
<?php


    if(mysqli_query($conn, $query))
    {
      //echo "Data Inserted Successful";
      
?>
      <script>
        window.alert("Product is added Successfully");
        window.open("chome.php","_self");
      </script>
<?php
        
    }
    else
    {
      ?>
      <script >
      window.alert("Product is not added");
      window.open("fhome.php","_self");
      </script>
<?php     
    }
          }
          else
          {
          ?>
          
          <?php
            echo "ERROR: couldn't able to log in $sql.".mysqli_error($conn);
            header('location:chome.php');
          }
    }}
    else
    {
    mysqli_close($conn);
            //$sql1 = " SELECT * FROM farmer where fid= $row['fid']";
    }        
?>            