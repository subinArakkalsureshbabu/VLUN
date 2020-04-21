<?php
$Email = $_POST['user'];
$Pass = $_POST['password'];


//Database connection

$conn = new mysqli('localhost','root','','ecom');
if($conn->connect_error){
die('Connection Failed : ');
}
else {
 $stmt = $conn->prepare("insert into usertable Values(?,?)");
 $stmt->bind_param("ss",$Email,$Pass);
 $stmt->execute();
 echo "registration Succssfully Completed......";
    
 $stmt->close();
 $stmt->close();

}

?>