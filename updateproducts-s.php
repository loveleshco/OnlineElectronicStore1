<?php 

include("connect.php");

$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$pdesc=$_POST['pdesc'];


$query="UPDATE products SET pname='$pname',pdesc='$pdesc',pprice='$pprice' WHERE pname='$pname'";

mysqli_query($connect,$query) or die("<h1>Update failed</h1>");
 echo("<h1>product updated succesfully</h1><br>");
echo("<a href=product.php>BACK</a>");


?>