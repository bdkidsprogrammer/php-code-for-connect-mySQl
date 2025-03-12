
<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "user"; 


$connect=mysqli_connect($servername,$username,$password,$database);

if(!$connect){

    echo"Not connected to DB </br>".mysqli_connect_error();

}else{

    echo"connected to database";

}


$sql = "INSERT INTO student(name, roll, email) VALUES('seam', '639077', 'se@gmail.com')";


$result= mysqli_query($connect,$sql);

if(!$result){

    echo"query error";
}



?>
