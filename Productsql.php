 <?php
             if(isset($_POST['sub']))
             {
             	$name=$_POST['name'];
             	$cat=$_POST['cat'];
             	$brand=$_POST['brand'];
             	$price=$_POST['price'];
             	
             	$image=$_FILES['img']['name'];
            $image_tmp=$_FILES['img']['tmp_name'];
	        move_uploaded_file($image_tmp,"c/$image");
               
            
                 
           $link = mysqli_connect("localhost", "root", "", "ecom");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$stmt = $link->prepare("insert into product (`name`, `cat`, `brand`, `price`, `image`) Values(?,?,?,?,?)");
 $stmt->bind_param("sssss",$name,$cat,$brand,$price,$image);
 $stmt->execute();
 echo "registration Succssfully Completed......";
    
 $stmt->close();
 $stmt->close();

if($result = mysqli_query($link, $sql)){
    echo $result;
        }


 
// Close connection
mysqli_close($link);
	        
            }
	      
	   
			?>