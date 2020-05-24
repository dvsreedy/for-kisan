<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">




</head>
<body>


<!-- BEGINNING OF NAVBAR-->	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h4>Project</h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
         <button type="button" class="btn btn-info btn-sm"><a class="navbar-brand" href="#">About Us</a></button> 

      </li>  
    </ul>
  </div>
</nav>



<div class="jumbotron">
<div class="container">
 <div class="card-columns">
  	<div class="container" style="margin-left: -10%">
    <div class="card" style="width:500px">
    <img class="card-img-top rounded radius 10px" src="images/far2.jpg" alt="canteen image" style="width:100% height:70%">
    <div class="card-body">
      <h4 class="card-title">Farmer</h4>
      <p>
      <button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#myModal1"><strong>Sign Up</strong></button>
      <button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#myModal2"><strong>Login</strong></button>
      </p>
    </div>
  </div>
</div>

<div class="container" style="margin-left: 70%">
    <div class="card" style="width:500px">
    <img class="card-img-top rounded radius 10px" src="images/far3.jpg" alt="canteen image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Customer</h4>
      <p>
      	<button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#myModal3"><strong>Sign Up</strong></button>
        <button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#myModal4"><strong>Login</strong></button>
      </p>
    </div>
  </div>
 </div>
</div>
</div>
</div>




<!-- The Login Modal -->
<div class="modal fade" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">      	
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
        <br>
        <br>
        <form method="post" action="login.php">
        <input type="text" class="bg-light " name="fid" placeholder="Farmer id" required="">
        <br>
        <br>
        <input type="password" name="fpassword" placeholder="password" required="">
        <br>
        <br>
        <button type="submit" name="submit2" class="btn btn-info">Login To Account</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- The Login Modal -->
<div class="modal fade" id="myModal4">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">      	
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
        <br>
        <br>
        <form method="post" action="login.php">
        <input type="text" class="bg-light " name="cid" placeholder="Customer id" required="">
        <br>
        <br>
        <input type="password" name="cpassword" placeholder="password" required="">
        <br>
        <br>
        <button type="submit" name="submit4" class="btn btn-info">LOGIN TO ACCOUNT</button>
        </form>
      </div>
    </div>
  </div>
</div>




<!-- The Login Modal -->
<div class="modal fade" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">      	
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up</h4>
        <br>
        <br>
        <form method="post" action="farmer.php">
        <input type="text" class="bg bg-light bg-borderless" name="fname" placeholder="Username" required="">
        <br>
        <br>
        <input type="text" name="fid" placeholder="farmer id" required="">
        <br>
        <br>
        <input type="text" name="fphone" placeholder="phone number" required="">
        <br>
        <br>
        <input type="text" name="fregion" placeholder="Region" required="">
        <br>
        <br>
        <input type="password" name="fpassword" placeholder="password" required="">
        <br>
        <br>
        <input type="password" name="cfpassword" placeholder="confirm password" required="">
        <br>
        <br>
        <button type="submit" name="submit1" class="btn btn-info">Sign Up</button>
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
        <h4 class="modal-title">Sign Up</h4>
        <br>
        <br>
        <form method="post" action="customer.php">
        <input type="text" class="bg bg-light bg-borderless" name="cname" placeholder="Username" required="">
        <br>
        <br>
        <input type="text" name="cid" placeholder="Customer id" required="">
        <br>
        <br>
        <input type="text" name="cphone" placeholder="phone number" required="">
        <br>
        <br>
        <input type="text" name="cregion" placeholder="Region" required="">
        <br>
        <br>
        <input type="email" name="cemail" placeholder="Email" required="">
        <br>
        <br>   
        <input type="password" name="cpassword" placeholder="password" required="">
        <br>
        <br>
        <input type="password" name="cfpassword" placeholder="confirm password" required="">
        <br>
        <br>
        <button type="submit" name="submit3" class="btn btn-info">Sign Up</button>
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