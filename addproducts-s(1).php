<?php
include("connect.php");


$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$pdesc=$_POST['pdesc'];

$id = $_SESSION['id'];

$query="INSERT INTO products (pname,pdesc,pprice,id) values ('$pname','$pdesc','$pprice','$id')";

mysqli_query($connect,$query) or die(mysqli_error($connect));
 echo("<h1>product added succesfully</h1><br>");
echo("<a href=product.php>BACK</a>");


?>

