<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge" />
	<meta name="viewport" content="width=device-width" />
	<title>Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	
</head>
<body>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<div class="container-fluid">
		<div class="container-fluid" style="background-color: black;color: white;">
		<div class="container">
	     <p class="pull-right">VLUN shop</p>
	   </div>
	   </div>
		<div class="container">
			<h1><font face="Centaur">VLUN</font></h1>
		</div>
		<div class="container">
												<div class="container" style="background: red; color: white;"> <!--contener start -->
								<div class="row">  <!-- row start -->

								<div class="col-sm-12 mymanu">
								<nav class="navbar ">
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mystyle">
								<span class="icon-bar">--</span>
								<span class="icon-bar">--</span>
								<span class="icon-bar">--</span>
								</button>
								</div>
								<div class="collapse navbar-collapse" id="mystyle">
								    <ul class="nav navbar-nav">
								<li><a href="ahome.php" class="active"><font color="white">Home</font></a></li>
								<li><a href="pro.php"><font color="white">Product</font></a></li>
								<li><a href="sell.php"><font color="white">Sell</font></a></li>
								<li><a href="index.php"><font color="white">Logout</a></font></li>
								</ul>
								<div>
								</nav>
								</div>
								</div> <!-- row End -->
								</div> <!-- contener end -->
		</div>

		<div class="container">
				<h1>Sell Book List</h1><br><br>
				<table class="table">
                 <tr>
                         <td>Name</td>
                      <td>Brand</td>
                       <td>Cat</td>
                        <td>Price</td>
                       
                        
                 </tr>
                 <?php
                  $q="select * from product";
                  $run=mysqli_query($link,$q);
                  while($row=mysqli_fetch_array($run))
                  {

                       $name=$row['name'];
                       $brand=$row['brand'];
                       $cat=$row['cat'];
                       $price=$row['price'];
                  

                  ?>
                  <tr>
                  	<td><?php echo $name; ?></td>
                  	<td><?php echo $brand; ?></td>
                  	<td><?php echo $cat; ?></td>
                  		<td><?php echo $price; ?></td>
                  
                  <?php
                  }
                 ?>
				</table>
				
		</div>
		<div class="container" style="background-color: silver;color: red">
			<h1 align="center">VLUN shop</h1>
		</div>
	</div>
</body>
</html>