<?php
 session_start();

 $con =mysqli_connect('localhost','root');

 if($con){
    echo "connection seccesfull";
 }else{
    echo "no connection";
 }
 mysqli_select_db($con,'testing');

$user = $_POST['username'];  
$pass = $_POST['password'];

$q= "select * from register_login where  User_Name ='$user'  && Password ='$pass'   ";

$result =mysqli_query($con ,$q);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['users']=$user;
    header('location:home.php');
}else{
    header('location:errorPage.php');
}

?>