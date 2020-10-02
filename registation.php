<?php

session_start();

$serverName = 'localhost';
$userName = 'root';
$password = '';

$conn = mysqli_connect($serverName ,$userName ,$password);

header('location:login.html');

mysqli_select_db($conn , 'registation');

$name = $_POST['username'];

$pass = $_POST['password'];

$s = "select *from usertable where username = '$name' " ;

$result = mysqli_query($conn , $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo ' <script> alert("Username is already Taken Choise Another ") </script>' ;

}else{
    $reg =" insert into usertable (username , password) values ('$name', '$pass') " ;
    mysqli_query($conn , $reg);
    echo '<script> alert("Registration Sucessfully!!")</script> ';
}
 




?>