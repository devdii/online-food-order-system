<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
  input[type=text]{
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
     </style>
    
</head>
<body>
<div class="topnav">
  <a href="home1.php">Home</a>
  <a href="aboutus.php">About Us</a>
  <a class="active" href="contact.php">Contact</a>
  <a href="blog.php">Blog</a>
</div>
<div class="accoutn_main">
        <video muted loop autoplay class="video">
            <source src="images/Pexels Videos 2431225.mp4" type="video/mp4">
        </video>
        
        <form action="regcon.php" method="post" name="myForm" onsubmit="return validateform()">
        <table>
      
    <tr> <td> <h3 align="center">Contact Us</h3> <br>   
<hr> </td></tr> 
  <tr> <td> <input type="text" id="Name" name="Name"  placeholder="Name" size="40" required> </td></tr>
  <tr> <td> <input type="text" id="Phone" name="Phone"  placeholder="Phone" size="40" required> </td></tr>
  <tr> <td> <input type="text" id="Email" name="Email"  placeholder="Email" size="40" required> </td></tr>
    <tr><td><input type="text" id="message" name="message"  placeholder="Message" size="40" required> </td> </tr>
 <tr><td><input type="submit" name="save" id="btn" value="Send"/></td></tr>
    </table>
</form>
</body>
</html>