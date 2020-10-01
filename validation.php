<?php

session_start();

$serverName = 'localhost';
$userName = 'root';
$password = '';

$conn = mysqli_connect($serverName ,$userName ,$password);



mysqli_select_db($conn , 'registation');

$name = $_POST['username'];

$pass = $_POST['password'];

$s = "select *from usertable where username = '$name' && password = '$pass' " ;

$result = mysqli_query($conn , $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:home.html');

}else{
    header('location:login.html');
   
}
 




?>