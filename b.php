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
								<li><a href="index.php" class="active"><font color="white">Home</font></a></li>
								<li><a href="#"><font color="white">About Us</font></a></li>
								<li><a href="#"><font color="white">Contect Us</font></a></li>
								<li><a href="#"><font color="white">Help</a></font></li>
								</ul>
								<div>
								</nav>
								</div>
								</div> <!-- row End -->
								</div> <!-- contener end -->
		</div>

		<div class="container">
				<div class="col-sm-2" style="background-color: black;color: white">
					<h1 align="center">Brands</h1>
                      <center>  <p><a href="dell.php" style="color: white">Dell</a></p><br>
                         <p><a href="hp.php" style="color: white">HP</a></p><br>
                          <p><a href="sam.php" style="color: white">Samsung</a></p><br>
                          <p><a href="cam.php" style="color: white">Canon</a></p><br></center>

					<h1 align="center">Cetegery</h1>
                         <center>  <p><a href="l.php" style="color: white">Laptop</a></p><br>
                         <p><a href="m.php" style="color: white">Mobile</a></p><br>
                          <p><a href="c.php" style="color: white">Camara</a></p><br>
                          <p><a href="tv.php" style="color: white">T.V</a></p><br></center>
				</div>

				<div class="col-sm-10"><br>
					<?php
					$d2=$_GET['id'];
                    $link = mysqli_connect("localhost", "root", "", "ecom");
                            $q="select * from product where id like '%$d2%'";
                            $run=mysqli_query($link,$q);
                            $row=mysqli_fetch_array($run);
                            
                          
                            	$id=$row['id'];
                            	$name=$row['name'];
                            	$img=$row['image'];
                            	$brand=$row['brand'];
                            	$cat=$row['cat'];
                            	$price=$row['price'];
                         ?>
                           
					
					<form action="buysql.php" method="post">
                        <div class="col-sm-4"><center><?php echo "<img src='admin/c/$img' width='150px' height='150px'>"; ?></center><br><br>
						<h3 align="center">Brand :<?php echo $brand; ?></h3>
						<h3 align="center">Name :<?php echo $name; ?></h3>
							<h3 align="center">Price :<?php echo $price; ?></h3>
                        
                        
					</div>
                        <input type="hidden" name="hdfbrand" id="hdfbrand" value="<?php echo $brand; ?>">
                        <input type="hidden" name="hdfname" id="hdfname" value="<?php echo $name; ?>">
                        <input type="hidden" name="hdfid" id="hdfid" value="<?php echo $id; ?>">
                        <input type="hidden" name="hdfprice" id="hdfprice" value="<?php echo $price ?>">
                         <input type="hidden" name="hdfcat" id="hdfcat" value="<?php echo $cat ?>">
					<table class="table">
                        
                        <?php include ("paypal.php");?>
                        
						<tr>
							<td>Enter Name</td>
							<td><input type="text" name="n1" placeholder="Enter Name" class="form-control" required="required"></td>
						</tr>
						<tr>
							<td>Enter Address</td>
							<td><input type="text" name="add1" placeholder="Enter Address" class="form-control" required="required"></td>
						</tr>
						<tr>
							<td>Enter City</td>
							<td><input type="text" name="city" placeholder="Enter City" class="form-control" required="required"></td>
						</tr>
						<tr>
							<td>Enter mobile</td>
							<td><input type="text" name="state" placeholder="Enter mobile no" class="form-control" required="required"></td>
						</tr>
						<tr>
							<td>Enter cd</td>
							<td><input type="text" name="mno" placeholder="Enter cd" class="form-control" required="required"></td>
						</tr>
						<tr>
							<td>Enter Pin </td>
							<td><input type="text" name="pin" placeholder="Enter Pin" class="form-control" required="required"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="sub" value="Buy Now" class="btn btn-primary"></td>
						</tr>
					</table>
					</form>
                    
                    
                
				<?php
                 if(isset($_POST['sub']))
                 {
                 	 $n1=$_POST['n1'];
                 	 $add1=$_POST['add1'];
                 	 $city=$_POST['city'];
                 	 $state=$_POST['state'];
                 	 $mno=$_POST['mno'];
                 	$pin=$_POST['pin'];
                    $link = mysqli_connect("localhost", "root", "", "ecom");
                 	if(mysqli_query($link,"insert into sell(pname,brand,cat,price,name,add,city,state,mno,pin) values('$name','$brand','$cat','$price','$n1','$add','$city','$state','$mno','$pin')"))
                 	{
                 		echo "<script>alert('Data Save')</script>";
                 	}
                 	else
                 	{
                 		echo "<script>alert('Data Not Save')</script>";
                 	}
                 }
				?>
					
				</div>
		</div>
		<div class="container" style="background-color: silver;color: red">
			<h1 align="center">VLUN shop</h1><? php include ("paypal.php");?>
		</div>
	</div>
</body>
</html>