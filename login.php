<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: rgb(255,2,90);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: rgb(255,2,90);
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  font-size: 16px;
  float: right;
  padding-top: 16px;
}

a {
  text-decoration: none;
  color: rgb(255,2,90)
}

@media screen and (min-width: 700px) {
  .container{
    width: 60%;
    margin-left: 20%;
    text-align: left ;
  }
}

@media screen and (max-width: 600px) {
  .imgcontainer {
  width: 100%;
  text-align: center;
  margin: 4px 0 2px 0;
}

img.avatar {
  width: 70%;
  border-radius: 50%;
}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body style="text-align: center">

<h2>Login Form</h2>

<form action="Homepage.php" method="post">
  <div class="imgcontainer">
    <a href="HomeUnlogged.php"><img src="font/1622072964755.png" alt="Avatar" class="avatar"></a>
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

    <span class="psw"> Don't have an account?<a href="signup.php"> Create Account</a></span>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="reset" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password? </a></span>
    
  </div>
</form>

</body>
</html>
