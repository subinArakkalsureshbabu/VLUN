<?php
include("connection.php");
?>
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
	     <p class="pull-right">VLUN the complete store</p>
	   </div>
	   </div>
		<div class="container">
			<h1><font face="Centaur">VLUN</font></h1>
		</div>
		<div class="container">
            <div class="container" style="background: red; color: black;"> 
								<div class="row">  <!-- row start -->

								<div class="col-sm-12 mymenu">
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
								<li><a href="index.php" class="active"><font color="black">Home</font></a></li>
								<li><a href="#"><font color="black">More</font></a></li>
								<li><a href="#"><font color="black">Contact</font></a></li>
								<li><a href="#"><font color="black">For help</a></font></li>
								</ul>
								<div>
								</nav>
                                </div>
                                </div>
                                </div>
         </div>                  
                <div class="container">
                    <h1> Admin login</h1><br><br>
                    <form action=""method="post">
                    <table class="table">
                           <tr>
                            <td>Enter Username</td>
                            <td> <input type="text" name="un" placeholder="Enter username" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                        <td>Enter password</td>
                            <td><input type="text" name="ps" placeholder="Enter password" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="sub" value="Login" class="btn btn-primary"></td>
                        </tr>
                   
                    </table>
                    </form><br><br>
                    <?php
              if(isset($_POST['sub']))
              {
              	   $un=$_POST['un'];
              	   $ps=$_POST['ps'];

              	   $q="select * from admin";
              	   $run=mysqli_query($link,$q);
              	   $row=mysqli_fetch_array($run);
              	   $u=$row['un'];
              	   $p=$row['ps'];
              	   if($un==$u && $ps==$p)
              	   {
              	   	   header("Location:ahome.php");
              	   }

              }
			?>
        </body>
        </html>