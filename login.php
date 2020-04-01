<?php
include("connect.php");


$uname=$_POST['uname'];
$password=$_POST['psw'];

$query = mysqli_query($connect,"select * from users where username='$uname'AND password='$password'");
$numrows = mysqli_num_rows($query);
if($numrows!=0)
{
    while($user=  mysqli_fetch_assoc($query))
{

        $_SESSION['uname']= $user['username'];
        $_SESSION['id']= $user['id'];
        $_SESSION['role']=$user['Role'];
        
    
    }
echo 'Login successful';

   header('Location:index.php'); 
}
else{
$_SESSION['error'] = 'Incorrect username or password';
    header('Location:login.php');
}


?>