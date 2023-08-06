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

h1{
  color: white;
   position: absolute;
   left:800px;
   top:100px;
}
.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    position: absolute;
    bottom:250px;
    right:400px;
  }

  .discount-card {
    padding: 0px;
    background-color: #f9f9f9;
    border-radius: 5px;
    margin: 10px 0;
  }

  h2 {
    text-align: center;
    color: #333;
  }

  p {
    color: #555;
  }

</style>
</head>
<body>

<h1></h1>


  

<a href="Diverse.php"button class="button">Diverse Menu</button>

  

    <a href="Customization.php"button class="button2">Customization Options</button>

      <a href="Special.php"button class="button3">Special Offers</button>

        
            <a href="discount.php"button class="button6">Discount     </button>
<a href="add_new.php"button class="button1">Call us</button>
   <a href="about.php"button class="button4">Back    </button>


 <div class="container">
    <h1>Special Discounts</h1>
    <div class="discount-card">
      <h2>If your order is higher than <br><mark>Rs.4000</mark> we give <mark>15%</mark> of any</h2>
      <p>Next chance is yours!</p>
  
    </div>

    
  </div>

</body>
</html> 
