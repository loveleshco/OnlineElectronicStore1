

<?php

include("connect.php");
if(isset($_POST['pname'])){
   $pname=$_POST['pname'];
    $query="delete from products where pid='$pname'";
        mysqli_query($connect,$query);
//$query="delete from products where pname='$pname'";
echo "<h2> Product deleted</h2>";
header("location:product.php");   
}




?>