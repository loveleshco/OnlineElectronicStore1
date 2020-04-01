<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
    
    session_start();
    
    ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Online Electronic Store</title>
</head>

<body>
<div id="container">
		<div id="mainpic">
        	<h1>Quick<span class="lightblue">Stack</span></h1>
            <h2>Online Electronic Store</h2>
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php">Home</a></li>
                <li class="menuitem"><a href="About.html">About</a></li>
                <li class="menuitem"><a href="Register.php">Register</a></li>
                
                <?php
                if(isset($_SESSION['uname']))
                {
                echo'<li class="menuitem"><a href="Logout.php">'.$_SESSION['uname'].'</a></li>';
                }
                else
                {
                echo'<li class="menuitem"><a href="Login1.php">Login</a></li>';
                }
                
                
                ?>
                <li class="menuitem"><a href="product.php">Products</a></li>
              <li class="menuitem"><a href="Contacts.html">Contacts</a></li>
            </ul>
        </div>
        
		<div id="content">
        	<h2>Online Solution For All Your Electronics Problems </h2>
        	<p>&nbsp;</p>
           	<p>&nbsp;</p>
       	  <h3>Why Us</h3>
        	<p>Our Online Electronic Store records and manages all the products information from Purchase Requisition to Issue as well as provides decision making and analytical information timely and accurately.This is one of the most robust and flexible suites of Inventory. The software modules deal with all aspects your business. And no matter how complex your business might be, chances are we can adapt ourselves to your needs. Inventory Management System will improve turnaround times, reduce risks and boost Profitability. Our Client-Server based Inventory Management System provides a competitive edge in todays rapidly changing marketplace. This is well secured Oracle Based and web baised Robust System.</p>
        	<p>&nbsp;</p>
	<p>&nbsp;</p>
	
	
<h3>More information</h3>
        	<p>You can view the about us</p>
        	<p>&nbsp;</p>
        	<p>&nbsp;</p>
	
	
        	<h3>Features</h3>
            <p><ul>
	<li>Minimal upfront cost</li>
	<li>Flexible customization</li>
	<li>Our Online Electronic Store increases profitability</li>
	<li>Customer satisfaction</li>
	<li>Supplier satisfaction</li>
	<li>Better Rates</li>
	<li>No displacemnt Uptill now</li>	
	</ul></p>
            <p>&nbsp;</p>
            	<p>&nbsp;</p>
	<p>&nbsp;</p>
	
	
		
        	<h3>More information</h3>
            <p>I decided to leave the content portion open for the templates users to do as they wish with a blank canvas. I don't like to restrict my users too much, and for this reason I leave the defining of any content related styles to you.</p>
            <p>&nbsp;</p>
        	<p>&nbsp;</p>
        	<p>&nbsp;</p>
<p>&nbsp;</p>
            
            <div id="footer"><center><h3>Copyright YLA productions</center></h3></div>
      </div>
   </div>
</body>
</html>
