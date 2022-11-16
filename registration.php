<?php
 session_start();

 $con =mysqli_connect('localhost','root');

 if($con){
    echo "connection seccesfull";
 }else{
    echo "no connection";
 }
 mysqli_select_db($con,'testing');

$name = $_POST['fullname'];
$user = $_POST['username'];
$email = $_POST['emails'];
$pass = $_POST['password'];

$q= "select * from register_login where Full_Name='$name'  && User_Name ='$user' && email='$email' && Password ='$pass'   ";

$result =mysqli_query($con ,$q);
$num=mysqli_num_rows($result);

if($num==1){
    echo "dublicate data";
}else{
$qy =" INSERT INTO `register_login`(`Full_Name`, `User_Name`, `email`, `Password`) VALUES ('$name','$user','$email','$pass')";

mysqli_query($con ,$qy);

}

?>