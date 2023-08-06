<?php

$conn = mysqli_connect('localhost','root','','portfolio');

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
* {box-sizing: border-box}
body {
  background-image: url("assets/img/images2.jpeg");
  background-size:200%;
  background-repeat: no-repeat;
  background-position: center;
  font-family: Arial, sans-serif;
  color: #fff;
  position: relative;
}

.button {
      background-color: #000; /* Green */
      border: none;
      color: white;
      padding: 18px 68px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 32px;                                                   
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 10px;
      top:50px;
      position: absolute;
    }

.button1 {
      background-color: green; /* Green */
      border: none;
      color: white;
      padding: 18px 33px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 32px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 10px;
      top:800px;
      position: absolute;
      left:1650px;
    }

    .button2 {
      background-color: #000; /* Green */
      border: none;
      color: white;
      padding: 18px 5px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 32px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 10px;
      top:300px;
      position: absolute;
    }

    .button3 {
      background-color: #000; /* Green */
      border: none;
      color: white;
      padding: 18px 65px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 32px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 10px;
      top:425px;
      position: absolute;
    }

    .button4 {
      background-color: green; /* Green */
      border: none;
      color: white;
      padding: 18px 50px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 32px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 10px;
      top:800px;
      position: absolute;
      left:1450px;
    }

    .button5 {
      background-color: #000; /* Green */
      border: none;
      color: white;
      padding: 18px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 32px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 10px;
      top:675px;
      position: absolute;
    }

    .button6 {
      background-color: #000; /* Green */
      border: none;
      color: white;
      padding: 18px 105px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 32px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 10px;
      top:800px;
      position: absolute;
    }

h2{
  color: white;
   position: absolute;
   left:500px;
   top:50px;
}


</style>
</head>
<body>

<h2>■Welcome to our culinary haven, where taste is an adventure and creativity knows no bounds! Embrace the pleasure of personalized dining as you curate your own gastronomic journey. Prepare to be the master of your meal, for here, the power to customize is in your hands!<br><br>

■Unleash your culinary imagination and design your perfect plate. Add a dash of indulgence or a sprinkle of health, just the way you like it. Whether it's a symphony of flavors or a delicate dance of spices, we have a menu that caters to your every craving.<br><br>

■No more settling for pre-set dishes; we believe in granting your culinary wishes. Select from a medley of mouthwatering dishes, and our culinary artisans will craft your culinary dreams into reality. Fear not, for every dish is made with love and dedication, tailored to your taste buds' whims.<br><br>

■In our realm, food isn't just a meal—it's an enchanting experience. Savor the excitement of sipping on the elixirs of creativity, and let our delectable offerings transport you to a realm of culinary wonder.<br><br>

■So, come forth and let your taste buds dance to the symphony of your desires. Your culinary canvas awaits, and we promise that every bite will be a masterpiece, as unique as you are. Indulge, explore, and relish the delight of a dining experience like no other. Welcome to the realm of limitless flavors, where your cravings meet their match!                   ></h2>


  

<a href="Diverse.php"button class="button">Diverse Menu</button>

 

    <a href="Customization.php"button class="button2">Customization Options</button>

      <a href="Special.php"button class="button3">Special Offers</button>

       
            <a href="discount.php"button class="button6">Discount     </button>

<a href="add_new.php"button class="button1">Call us</button>
   <a href="about.php"button class="button4">Back    </button>


</body>
</html> 
