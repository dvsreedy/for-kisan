<?php
session_start();
  $servername = "localhost";
    $username = "project";
    $password = "project";
   
    $conn = mysqli_connect($servername, $username, $password,$username);
  if(isset($_POST["submit1"])) 
   {

      $name=$_POST['pname'];
      $id=$_POST['pid'];
      $price=$_POST['pprice'];
      $qty=$_POST['pqty'];
      $weight= $_POST['pweight'];
      $id1=$_SESSION['fid'];
  
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
      //echo "";
    }
    $query= "insert into product (pname,pid,pprice,pqty,pweight,fid)values('$name','$id','$price','$qty','$weight','$id1')";
    if(mysqli_query($conn, $query))
    {
      //echo "Data Inserted Successful";
      
?>
      <script>
        window.alert("Product is added Successfully");
        window.open("fhome.php","_self");
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




  if(isset($_POST["submit2"])) 
   {

      $name=$_POST['pname'];
      $id=$_POST['pid'];
      $idd=$_SESSION['fid'];
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
    $query= "delete from product where pid = $id";
    if(mysqli_query($conn, $query))
    {
      //echo "";
      
?>
      <script>
        window.alert("Product is Deleted");
        window.open("fhome.php","_self");
      </script>
<?php
        
    }
    else
    {
      ?>
      <script >
      window.alert("Product is not Deleted");
      window.open("fhome.php","_self");
      </script>
<?php     
    }
      }
  




  if(isset($_POST["submit3"])) 
   {

      $name=$_POST['pname'];
      $id=$_POST['pid'];
      $price=$_POST['pprice'];
      $qty=$_POST['pqty'];
      $weight= $_POST['pweight'];
      $idd=$_SESSION['fid'];
    //$servername = "localhost";
    //$username = "project";
    //$password = "project";
   
    //$conn = mysqli_connect($servername, $username, $password,$username);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
      //echo "";
    }
    $query= "UPDATE product SET pweight=$weight,pprice=$price,pqty=$qty WHERE pid = $id";
    if(mysqli_query($conn, $query))
    {
      //echo "Data Inserted Successful";
      
?>
      <script>

        window.alert("Product is Changed");
        window.open("fhome.php","_self");
      </script>
<?php
        
    }
    else
    {
      ?>
      <script >
        window.alert(<?php echo $query;?>);
      window.alert("Product is not Changed");
      window.open("fhome.php","_self");
      </script>
<?php     
    }
      }







       mysqli_close($conn);
   ?>



  