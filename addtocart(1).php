<?php 

include("connect.php");

$pname=$_POST['pname'];
$pid=$products['pid']
//$id=$_SESSION['id'];
$pprice=$_POST['pprice'];

$query="INSERT INTO cart (pname,pid,id,pprice) values ('$pname','$pid','5','$pprice')";

mysqli_query($connect,$query) or die("<h1>Update failed</h1>");
 echo("<h1>product added to cart succesfully</h1><br>");

$query2="select sum(pprice) from cart ";
echo("<a href=product.php>BACK</a>");
$result=mysqli_query($connect,$query2);
echo "Total sum is $result";

?>