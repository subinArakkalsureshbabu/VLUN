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
	     <p class="pull-right">E-mail: xxxxxx12@example.com</p>
	   </div>
	   </div>
		<div class="container">
			<h1><font face="Centaur">My Shop</font></h1>
		</div>
		<div class="container">
											<div class="container" style="background: blue; color: white;"> <!--contener start -->
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
				<h1 align="center">Product Inset</h1><br><br>
				<br><br>
				<form action="Productsql.php" method="post" enctype="multipart/form-data">
				<table class="table">
                      <tr>
                      	<td>Name</td>
                      	<td><input type="text" name="name" placeholder="Enter Product Name" class="form-control" required="required"></td>
                      </tr>
                         <tr>
                      	<td>Cat</td>
                      	<td>
                         <select name="cat">
                         	<option>laptop</option>
                         	<option>tv</option>
                         	<option>mobile</option>
                         		<option>camara</option>
                         </select>
                      	</td>
                      </tr>
                         <tr>
                      	<td>Brand</td>
                      	<td>
                      		 <select name="brand">
                         	<option>dell</option>
                         	<option>hp</option>
                         	<option>sam</option>
                         		<option>can</option>
                         </select>
                      	</td>
                      </tr>
                         <tr>
                      	<td>img</td>
                      	<td><input type="file" name="img"></td>
                      </tr>
                         <tr>
                      	<td>Price</td>
                      	<td><input type="text" name="price" placeholder="Enter Price" class="form-control" required="required"></td>
                      </tr>
                         <tr>
                      	<td colspan="2"><input type="submit" name="sub" value="Save"></td>
                      	
                      </tr>

				</table>
			</form>
			
		</div>
		<div class="container" style="background-color: silver;color: white">
			<h1 align="center">My Project HD</h1>
		</div>
	</div>
</body>
</html>