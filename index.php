<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" type="image/png" href="images/icon.png">
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300&family=IBM+Plex+Sans&family=Roboto&display=swap" rel="stylesheet">
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Assistant', sans-serif;
font-family: 'IBM Plex Sans', sans-serif;
font-family: 'Roboto', sans-serif;
display:"flex";
}
.accoutn_main .video{
    position: fixed;
    z-index: -100;
    width: 100%;
    height: auto;
}
            #btn 
            {
                
            cursor: pointer;
            padding: 5px;
            width: 2cm;
            height: 1cm;
            margin-left:2cm;
            background-color:#0a0a23;
           color: #fff;
           border-radius:10px;
}
  input[type=text],[type=password]{
        align:"center";
        margin: 8px 0;
        padding: 7px 10px;
        display: inline-block;
        border:1px solid ;
        box-sizing: border-box;
}
h3 {
    font-size:1cm;
    color:white;
    width: 100%;
    background-color:rgba(0,0,0,0.7);
    font-weight: 100;
}
hr {
    border: 1px solid black; 
}
table
        {
            padding-top: 5cm;
            
            padding-left:17cm;   
          background-color:content-box ;        
        }
        .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: whitesmoke;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd; 
  color: black;
}

.topnav a.active {
  background-color:rgb(84,108,255);
  color: white;
}
a:link, a:visited {
  background-color:  #333;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: black;
}
     </style>
     <script>
   function validateform() {
  var x = document.forms["myForm"]["Name"].value;
  var y = document.forms["myForm"]["Phone"].value;
  var a = document.forms["myForm"]["Email"].value;
  
  var c = document.forms["myForm"]["Password"].value;
  if (x == "" || x == null || y == "" || y == null || a == "" || a == null || b == "" || b == null || c == "" || c == null) {
    alert("fill all the fields data");
    return false;
  }
  var Phone = /^\d{10}$/;
  if((inputtxt.value.match(Phone))
        {
      return true;
        }
      else
        {
        alert("message");
        return false;
        }
}
   
</script>

</head>
<body>

<div class="accoutn_main">
        <video muted loop autoplay class="video">
            <source src="images/pexels-mikhail-nilov-7677447-1920x1080-25fps.mp4" type="video/mp4">
        </video>
        
        <form action="regconn.php" method="post" name="myForm" onsubmit="return validateform()">
        <table>
      
    <tr> <td> <h3 align="center">Register Here</h3> <br>   
<hr> </td></tr> 
  <tr> <td> <input type="text" id="Name" name="Name"  placeholder="Name" size="40" required> </td></tr>
  <tr> <td> <input type="text" id="Phone" name="Phone"  placeholder="Phone" size="40" required> </td></tr>
  <tr> <td> <input type="text" id="Email" name="Email"  placeholder="Email" size="40" required> </td></tr>
    <tr><td><input type="password" id="pass" name="pass"  placeholder="Password" size="40" required> </td> </tr>
 <tr><td><input type="submit" name="save" id="btn" value="Register"/></td></tr>
  
<a href="http://localhost/foodfinal/login.php">Log-in</a>
    </table>
</form>
</body>
</html>