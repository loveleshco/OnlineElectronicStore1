<!DOCTYPE html>
<html>
<head>
 <?php
    include("connect.php");
    
    ?>
  <title>Login</title>
  <?php
  if(isset($_SESSION['uname'])){
    
    die("<h1>user already logged in</h1>");
}


?>
</head>
<link rel = "stylesheet"
   type = "text/css"
   href = "l.css" />
<body>
<form action="login.php" method=post>
  <div class="imgcontainer">
    <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>