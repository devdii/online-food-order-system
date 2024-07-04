<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<link rel="shortcut icon" type="image/png" href="images/icon.png">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.accoutn_main .video{
    position: fixed;
    z-index: -100;
    width: 100%;
    height: auto;
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

.button-29 {
  align-items: center;
  appearance: none;
  background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
  border: 0;
  border-radius: 6px;
  box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 100px;
  width:400px;
  justify-content: center;
  line-height: 1;
 left:16cm;
 top:5cm;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 18px;
}

.button-29:focus {
  box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
}

.button-29:hover {
  box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button-29:active {
  box-shadow: #3c4fe0 0 3px 7px inset;
  transform: translateY(2px);
}
.topnav-right {
  float: right;
}
h1 {
  font-size: 72px;
            background: -webkit-linear-gradient(rgb(188, 12, 241), rgb(212, 4, 4));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            padding-left:8cm;
            padding-top:1cm;
            background-color:white;

}
h2 {
            font-size: 5em;
            font-family:  Arial, Helvetica, sans-serif;
            color: transparent;
            text-align: center;
            animation: effect 2s linear infinite;
            padding-top:3cm;
            
        }
 
        @keyframes effect {
            0% {
                background: linear-gradient(
                        yellow, orange);
                -webkit-background-clip: text;
            }
 
            100% {
                background: linear-gradient(
                        blue, purple);
                -webkit-background-clip: text;
            }
        }
</style>
</head>
<body>
<div class="accoutn_main">
<video muted loop autoplay class="video">
            <source src="images/pexels-vanessa-loring-5866268.mp4" type="video/mp4">
        </video>
</div>
<div class="topnav">
  <a class="active" href="home1.php">Home</a>
  <a href="aboutus.php">About Us</a>
  <a href="contact.php" >Contact</a>
  <a href="blog.php">Blog</a>
  <div class="topnav-right">
    <a href="./admin/admlogin.php">Admin</a>
  </div>
</div>

<div>
        <h2>Welcome To FoodHub!</h2>
    </div>
<button class="button-29"  onClick="window.location.href='http://localhost/foodfinal/products.php';" role="button">Go To Menu</button>

</body>
</html>