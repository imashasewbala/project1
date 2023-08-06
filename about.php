<?php

$conn = mysqli_connect('localhost','root','','portfolio');

?>

<!DOCTYPE html>
<html>
<head>
    <title>User View Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome To Our Food Corner<br>Hi foodies!</h1>

        <style>
            body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

nav {
    background-color: #444;
    padding: 10px;
    text-align: center;
}

nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
}

.about-section, .facilities-section {
    padding: 20px;

}

.about-section h2, .facilities-section h2 {
    color: #444;
}

.facilities-section ul {
    list-style: none;
    padding: 0;
}

.facilities-section li {
    margin-bottom: 10px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}
/* Add styles for the buttons container */
.button-container {
  display: flex; /* Use flexbox */
  justify-content: flex-start; /* Align buttons to the left */
  margin-top: 20px; /* Optional margin to create some space between the section and buttons */
}

/* Add styles for button1 */
.button1 {
  background-color: #007BFF;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  font-size: 16px;
  position:absolute;
  left:700px;
}

.button2 {
  background-color: #007BFF;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  font-size: 16px;
  position:absolute;
  left:770px;
  top:560px;
}



/* Add active effect for all buttons */
.button1:active, .button2:active, .button3:active {
  background-color: #003d80;
}




        </style>
    </header>

    <nav>
        <!-- You can add navigation links here if needed -->
    </nav>

    <section class="about-section">
        <h2>🎓Who We Are🎓</h2>
        <p>🎓🍳 Where Gastronomy Meets Genius - Unleashing Campus Cuisine!

A tale of innovation and flavor unfolds as we, the tech-savvy minds of Rajarata University's Department of Computing, embrace the culinary quest of a lifetime. What started as an endeavor to save on expenses transformed into a captivating art form, tantalizing taste buds and surpassing all expectations.<br><br>

Our kitchen is now an alchemist's sanctuary, where we blend data and delectables to craft mouthwatering masterpieces. With each dish, we weave technology into taste, and our creations are nothing short of magic.<br><br>

Now, fellow scholars, we invite you to partake in this epicurean adventure, where code meets cuisine and exploration knows no bounds. Savor the wonders of our homemade delights as we redefine the joys of campus camaraderie through food.<br><br>

Join us in this savory symphony, where every bite is a revelation, and every meal is a triumph of creativity. Step into a world where gastronomy meets genius, and together, we shall savor the flavors of brilliance. 🌟🍲🎨<br><br>
At present, we only deliver food around Mihintale and Anuradhapura</p>

    </section>
    <br>
    <br>

   <div class="button-container">
        <a href="diverse.php" class="button1">Customer-Centric Offerings</a>
        <a href="indexf.php" class="button2">Main Page</a>


       
    </div> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer>
        <p>Contact us at: example@example.com</p>
    </footer>
</body>
</html>
         