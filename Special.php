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

<h2><mark>Combo Extravaganza:</mark> Enjoy a perfect blend of flavors with our specially curated combo meals. Indulge in a scrumptious combination of your favorite dishes, complete with a refreshing beverage and a mouthwatering dessert.<br><br><br><br>

<mark>Happy Hour Delights:</mark>Join us during our happy hours and discover a world of delectable treats at unbeatable prices. From appetizers to main courses, there's something for everyone to relish and cherish.<br><br><br><br>



<mark>Weekend Bonanza:</mark> Weekends just got better with our Weekend Bonanza! Dive into a plethora of exclusive dishes and enjoy discounts on our signature weekend specials.<br><br><br><br>



<mark>Loyalty Rewards:</mark> Our loyal customers deserve the best, and that's why we have a loyalty rewards program . Earn points with every visit and redeem them for complimentary treats or discounts on your next meal.<br><br><br><br>



<mark>Birthday Bash:</mark> Celebrate your special day with us and revel in a complimentary treat! <br><br><br><br>

<mark>Limited-Time Offerings: </mark>Keep an eye out for our limited-time specials that showcase experimental flavors and innovative creations. </h2>


  

<a href="Diverse.php"button class="button">Diverse Menu</button>


    <a href="Customization.php"button class="button2">Customization Options</button>

      <a href="Special.php"button class="button3">Special Offers</button>

        

            <a href="discount.php"button class="button6">Discount     </button>
             <a href="add_new.php"button class="button1">Call us</button>
              <a href="about.php"button class="button4">Back    </button>

</body>
</html> 
