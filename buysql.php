<?php
                 $hdfname=$_POST['hdfname'];
             	 $hdfbrand=$_POST['hdfbrand'];
             	 $hdfid=$_POST['hdfid'];
                 $hdfcat=$_POST['hdfcat'];
                 $hdfprice=$_POST['hdfprice'];
             	 $n1=$_POST['n1'];
                 $add1=$_POST['add1'];
                 $city=$_POST['city'];
                 $state=$_POST['state'];
                 $mno=$_POST['mno'];
                 $pin=$_POST['pin'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "ecom");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 


if($link->connect_error){
die('Connection Failed : ');
}
else {
 $stmt = $link->prepare("INSERT INTO `sell`( `productid`, `name`, `add`, `city`, `state`, `mno`, `pin`) VALUES (?,?,?,?,?,?,?)");
 $stmt->bind_param("sssssss",$hdfid,$n1,$add1,$city,$state,$mno,$pin);
 $stmt->execute();

        
         header("Location: b.php");
   exit;
        }
        

 
// Close connection
mysqli_close($link);
?>