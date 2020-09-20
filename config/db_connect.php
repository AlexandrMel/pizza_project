<?php 
//connect to database

$conn = mysqli_connect('localhost', 'Alex', 'test1234', 'pizza_website');

//check the connection
if(!$conn){
echo 'Connection error' . mysqli_connec_error();
}

?>