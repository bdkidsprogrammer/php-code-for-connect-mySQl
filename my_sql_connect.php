
<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "user"; 

$name=$_GET['n'];
$r=$_GET['r'];
$e=$_GET['e'];


$connect=mysqli_connect($servername,$username,$password,$database);

if(!$connect){

    echo"Not connected to DB </br>".mysqli_connect_error();

}else{

    echo"connected to database";

}


$sql = "INSERT INTO student(name, roll, email) VALUES('$name', '$roll', '$email')";


$result= mysqli_query($connect,$sql);

if(!$result){

    echo"query error";
}



?>
