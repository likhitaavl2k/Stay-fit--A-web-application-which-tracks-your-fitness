<!DOCTYPE html>
<html>
<head>
	<title>User Registration/login</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/userlogin.css">
</head>
<body>
	<header style="position: absolute;top: 1%;">
		<a href="access.html"><i class="fa fa-home fa-5x" ></i></a>
	</header>

	<div style="position: absolute;top: 6%;left: 30%">
		<img src="images/user1.png" width="30%">
		<h3 id="h3tag" >User Registration and Login</h3>
	</div>
	<div class="container">

    <form id="signup" action="insertuser.php" method="post">

      <div class="header">

        <h3>SIGN UP</h3>
        
      </div>
      
      <div class="sep"></div>

      <div class="inputs">
       <label style="color: black;font-family: cursive;font-size: 15px;"><b>Email:</b></label>
       <input type="email" name="email" placeholder="Enter Email" required>
       <label style="color: black;font-family: cursive;font-size: 15px;"><b>Password:</b></label>
       <input type="password" name="password" id="password" placeholder="Enter Password" required >

       <input type="checkbox" onclick="myFunction()" ><label style="color: black;" ><b>Show Password</b></label>
       <button class="button" name="signup"><span>SIGN UP</span></button>
       <!-- style="position: relative;left: -125px;" -->
       <!-- style="color: white;position: relative;left: 24px;top: -22px;" -->
     </div>

   </form>

 </div>

 <div class="container2">

  <form id="signup" action="uservalidate.php" method="post">

    <div class="header">

      <h3>LOGIN</h3>
      
    </div>
    
    <div class="sep"></div>

    <div class="inputs">
     <label style="color: black;font-family: cursive;font-size: 15px;"><b>Email:</b></label>
     <input type="email" name="email" placeholder="Email" required>
     <label style="color: black;font-family: cursive;font-size: 15px;"><b>Password:</b></label>
     <input type="password" name="password" id="password2" placeholder="Password" required>
     
     <!-- <a id="submit" href="#" style="width: 25%;font-size: 15px;position: relative;left: 30%;font-family: cursive;color: blue;background-color: blue;"><b>LOGIN</b></a> -->
     <input type="checkbox" onclick="myFunction1()" ><label style="color: black;" ><b>Show Password</b></label>
     <button class="button " type="submit" name="login"><span style="font-size: 17px;">LOGIN</span></button>
     
   </div>

 </form>

</div>
​
<script>
  function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>

<script>
  function myFunction1() {
    var x = document.getElementById("password2");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>

</body>
</html>