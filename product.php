<html>
<head>
<?php
    include("connect.php");
    
    ?>
<title>My Products</title>
</head>
<body>
</br></br></br>

<a href="addproducts.php">Add Product</a> 

<table cellpadding=2 cellspacing=2 border=1>
   <tr>
    <th>Name</th>
    <th>description</th>
       <th>price</th><th>Action</th></tr>
       <?php
       
       
    
$id=$_SESSION['id'];
$query = mysqli_query($connect,"select * from products");
    
while($products=  mysqli_fetch_assoc($query))
{
    if($id<=3)
    {
    echo '<tr>';
    
    
    echo "<td>".$products['pname']."</td>";
    
    echo "<td>".$products['pdesc']."</td>";
    
    echo "<td>".$products['pprice']."</td>";
    
    
  
     echo "<td> <form method='post' action='deleteproducts.php'> <input type='hidden' value='".$products['pid']."' name='pname'><input type='submit' value = 'remove'> </form></td>";
    
    echo "<td> <form method='post' action='updateproducts.php'> <input type='hidden' value='".$products['pname']."' name='pname'> <input type='hidden' value='".$products['pdesc']."' name='pdesc'> <input type='hidden' value='".$products['pprice']."' name='pprice'><input type='submit' value = 'update'> </form></td>";
    
    echo '</tr>';
}
    else
    {
        echo '<tr>';
    
    
    echo "<td>".$products['pname']."</td>";
    
    echo "<td>".$products['pdesc']."</td>";
    
    echo "<td>".$products['pprice']."</td>";
        
         echo "<td> <form method='post' action='addtocart.php'> <input type='hidden' value='".$products['pid']."' name='pname'><input type='submit' value = 'addtocart'> </form></td>";
    
    
    }
    
}

    

    
    
    
    ?>
</table>

</body>
</html>