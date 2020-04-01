

<?php 

$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$pdesc=$_POST['pdesc'];

 $html_test =<<<EOT
     
     <html>
<head>
<title> add product</title>

</head>


<body>
<h1>product</h1>
<form class="cf" action=updateproducts-s.php method = "POST">
  <div class="half left cf">
    <input type="text" name="pname" placeholder="product Name" value= $pname>
    <input type="text" name="pprice" placeholder="price" value= $pprice>
  </div>
  <div class="half right cf">
    <input  type="text" name="pdesc" placeholder="Description" value= $pdesc>
  </div>  
  <input type="submit" value="Submit" id="input-submit">
</form>
</body>
</html>
     
EOT;

echo $html_test;
?>
