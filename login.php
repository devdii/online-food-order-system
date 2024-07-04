<?php
    $connect = mysqli_connect("localhost","root","","food") or die ("connection fail");
    if(!empty($_POST['save']))
    {
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $query="select * from users where phone='$phone' and password='$password'";
        $result=mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            echo '<script type="text/javascript">';
            echo ' alert("Login Successfully")'; 
            echo '</script>';
            header('Location: home1.php');

        }
        else 
        {
            echo '<script type="text/javascript">';
            echo ' alert("Password does not match")';  
            echo '</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
  background-image: url("images/abt.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
 .login_oueter {
    width: 360px;
    max-width: 100%;
}
.logo_outer{
    text-align: center;
}
.logo_outer img{
    width:120px;
    margin-bottom: 40px;
}
#btn {
  background-color:rgb(41,128,185);
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid skyblue;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-top:5px;
  margin-left:5px;
}

a:hover, a:active {
  background-color:Rgb(41,128,185) ;
  color: white;
}
 </style>
<script>
  function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
</script>
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

<div class="href" align="left">
<a href="http://localhost/foodfinal/index.php">Back</a>
</div>

<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center m-0" style="height: 100vh;">
    <div class="login_oueter">
      
      <form action="" onsubmit="return validateForm()" method="post" id="login" autocomplete="off" class="bg-light border p-3">
      <h4 align="center">  Login</h4><hr>
        <div class="form-row" align="center">
          
          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input name="phone" type="text"  class="input form-control" id="phone" placeholder="Phone" aria-label="phone" aria-describedby="basic-addon1" required>
            </div>
          </div>
          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="password" type="password" class="input form-control" id="password" placeholder="Password" required="true" aria-label="password" aria-describedby="basic-addon1" required>
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-12">
          <input type="submit" name="save" id="btn" value="Login"/>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
