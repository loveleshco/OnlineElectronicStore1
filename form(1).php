<?php
include("connect.php");
if(isset($_SESSION['uname'])){
    
    die("<h1>user already logged in</h1>");
}
$uname=$_POST['uname'];
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['psw'];
$confrimPassword = $_POST['psw-repeat'];

if($password!=$confrimPassword)
{
    $_SESSION['registerError'] = "confrim password and password is different ";
    header('Location:register.php');
}

$query="INSERT INTO users values('','$uname','$email','$password','$name','$address')";

mysqli_query($connect,$query) or die("<h1>Registration is failed</h1>");
 echo("<h1>Registration is successful</h1><br>");
echo("<a href=login_form.php>BACK</a>");


?>