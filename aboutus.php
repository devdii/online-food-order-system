<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="shortcut icon" type="image/png" href="images/icon.png">
    <style>
        .wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin: 19px auto;
        padding: 5px 30px;
        width: auto;
        box-shadow: 0 0 5px black;
      }
      .faculties {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 20px;
      }
  
      .unit {
        margin: 25px;
        width: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
  
      .unit img {
        width:200px;
        height:200px;
        margin-bottom: 10px;
      }
  
      .unit p {
        text-align: center;
        margin: 2px;
      }
  
      .unit p:first-of-type {
        font-weight: bolder;
        margin-bottom: 5px;
      }
      .about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  background-color: rgba(0,0,0, 0.8); 
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  height: 100%; 
  background-position: center;
  background-image: url("images/1.jpg"); 
  background-repeat: no-repeat;
  background-size: cover;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
p {
  color:white;
}
h1 {
  color:white;
}
.info {
    padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
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
h3{
  color:white;
}
#tem {
  background-color: rgba(0,0,0,0.7);
  width:100%;
}

    </style>
</head>
<body>
<div class="topnav">
  <a  href="home1.php">Home</a>
  <a class="active" href="aboutus.php">About Us</a>
  <a href="contact.php">Contact</a>
  <a href="blog.php">Blog</a>
</div>
<!-- abt us -->
    <div class="about-section">
  <h1>About Us</h1>
  <p>Food Hub provides fast food delivery to the customers</p>
  <p>Everyday we are tring to improve our quality and give our best to the customers</p>
<br>
<h2>Welcome to the Food Hub!</h2><hr>
<p>Welcome to our online food delivery website, where we bring the finest culinary experiences to your doorstep. Our mission is to provide you with the best quality food and exceptional service, so that you can enjoy delicious meals from the comfort of your home.</p>
<p>Our team is passionate about food and we take great pride in curating a diverse menu that caters to different taste preferences. We work with top-rated restaurants and chefs to bring you an extensive selection of dishes ranging from traditional to contemporary cuisine. Whether you're in the mood for a classic burger, masala fries, or a various Itelian food, we've got you covered.

At our online food delivery website, we understand the importance of convenience and speed. That's why we have created a user-friendly platform that allows you to easily browse our menu, place your order. We use the latest technology to ensure that the vegitable is fresh and your food arrives fresh and hot, every time.</p>

<p>Our commitment to quality extends beyond the food we serve. We strive to provide a seamless and hassle-free experience for our customers, and we are always looking for ways to improve our service. Our customer support team is available 24/7 to assist you with any queries or concerns you may have.</p>

Thank you for choosing   Food Hub. We hope you enjoy your meal and look forward to serving you again soon.
</div>

<!-- Wrpeer -->
    <div class="wrapper">
      <h1  id="tem">-  -  - Our Team -  -  - </h1>
      <div class="faculties">
        <div class="unit">
        <img src="images/ceo.jpg" alt="">
          <h3>Atul Upadhyay, Founder</h3>
          <p>We use eco-friendly packaging and implement practices to minimize food waste.</p>

        </div>
        <div class="unit">
          <img src="images/man.jpg" alt="">
          <h3>David Alex, Restaurant Manager</h3>
          <p>I have over 15 years of experience. Like to manage the restaurant. I am giving my best in this rastaurant.</p>  
        </div>
        <div class="unit">
        <img src="images/chef.jpg" alt="">
          <h3>Shrutika Koli, Executive Chef</h3>
          <p>I made Food as sweet as my nature. I like to serve sweetness to people.</p>
        </div>
      </div>
    </div>

<!-- Review Section -->

<div class="wrapper">
      <h1>-  -  - Customer's Review -  -  - </h1>
      <div class="faculties">
        <div class="unit">
        <img src="images/per2.jpg" alt="">
        <p>This is the best food delivery restaurant in this area.</p>
          <h3>Martin David</h3>
        </div>
        <div class="unit">
          <img src="images/per1.jpg" alt="">
        <p>I am so happy about that The fastest food delivered in just only 8 minutes. </p>
          <h3>Flora Miller</h3>
        </div>
        <div class="unit">
        <img src="images/per4.jpg" alt="">
        <p>Every time they serve fresh food and giving better service as compare to others.</p>
          <h3>Mayur patel</h3>
        </div>
        <div class="unit">
        <img src="images/per6.jpg" alt="">
        <p>They deliver food in use paper bags.so it is nice that they are ecofriendly</p>
          <h3>Olly jenith</h3>
        </div>
        <div class="unit">
        <img src="images/per3.jpg" alt="">
        <p>The best food in their resgtaurant is Red-Cheese Pizza.</p>
          <h3>Gllen Smith</h3>
        </div>
      </div>
    </div>
       
      
</body>
</html>