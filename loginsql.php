<?php
$username = $_POST['user'];
$Password = $_POST['password'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vlu");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM usertable where name = '".$username."' and pasword = '".$Password."' ";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
         header("Location: index.php");
   exit;
        }
        echo "No Such Users";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }

 
// Close connection
mysqli_close($link);
?>