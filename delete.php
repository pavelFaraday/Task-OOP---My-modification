<?php 


$connection  = mysqli_connect('localhost','root', '' , 'geo_phones'); 
	
$userObj  = mysqli_query($connection , 'SELECT * FROM `products`');




if(isset($_POST['data'])){
	$dataArr = $_POST['data'] ; 

	foreach($dataArr as $id){
		mysqli_query($connection , "DELETE FROM products where id='$id'");
	}
	echo 'record deleted successfully';
}



?>

