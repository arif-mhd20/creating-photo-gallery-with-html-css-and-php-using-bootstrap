<?php

$con = mysqli_connect('localhost' , 'root');

if($con){
    echo "connection successful";
}else{
    echo "connection Failed";
}

mysqli_select_db($con , 'photographyphpproject02');

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$query = "INSERT INTO users (name, email, number) VALUES('$name', '$email', '$number')";

mysqli_query($con , $query);
header('location:index.php');


// $conn = mysqli_connect('localhost' , 'root');
// if($conn){
//     echo "connection complete";
// }else {
//     echo "connection failed";
// }
// mysqli_select_db($conn , 'photographyphpproject02');
// $query = "INSERT INTO users (name, email, number) VALUES('$name', '$email', '$number')";
// mysqli_query($conn , $query);
// header('location:index.php');
