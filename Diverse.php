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

.button10 {
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
}
p.main{
  color: white;
   position: absolute;
   left:500px;
   top:45px;
   font-size: 34px;
   font-weight: bold;
}
h2.breakfast{
  color: white;
   position: absolute;
   left:375px;
   top:125px;
}
h2.lunch{
  color: white;
   position: absolute;
   left:375px;
   top:375px;
}
h2.dinner{
  color: white;
   position: absolute;
   left:375px;
   top:565px;
}
h3.lunch1 {
  color: white;
  position: absolute;
   left:390px;
   top:420px;
  
}
h3.breakfast1 {
  color: white;
  position: absolute;
   left:390px;
   top:160px;
}
h3.dinner1 {
 color: white;
  position: absolute;
   left:390px;
   top:610px;
}

p.main1{
  color: white;
   position: absolute;
   left:975px;
   top:45px;
   font-size: 34px;
   font-weight: bold;
}
h2.cool{
  color: white;
   position: absolute;
   left:950px;
   top:125px;
}
h3.cool2 {
  color: white;
  position: absolute;
   left:975px;
   top:160px;
}
h4.cool3{
  color: white;
   position: absolute;
   left:1000px;
   top:205px;
}
h2.cool4{
  color: white;
   position: absolute;
   left:950px;
   top:325px;
}
h3.cool5 {
  color:white;
  position: absolute;
   left:975px;
   top:360px;
}
p.main2{
  color: white;
   position: absolute;
   left:1400px;
   top:45px;
   font-size: 34px;
   font-weight: bold;
}
h2.desserts{
  color: white;
   position: absolute;
   left:1340px;
   top:125px;
}
p.main3{
  color: white;
   position: absolute;
   left:1340px;
   top:220px;
   font-size: 34px;
   font-weight: bold;
}
h2.others{
  color: white;
   position: absolute;
   left:1340px;
   top:285px;
}
h3.price1{
  color:yellow;
  position: absolute;
   left:785px;
   top:160px;
}
h3.price2 {
 color:yellow;
  position: absolute;
   left:785px;
   top:420px;
}
h3.price3 {
 color:yellow;
  position: absolute;
   left:785px;
   top:610px;
}
 
h3.price4 {
  color:yellow;
  position: absolute;
   left:1175px;
   top:160px;
} 
h4.price5{
  color:yellow;
   position: absolute;
   left:1175px;
   top:205px;
}

h3.price6 {
  color:yellow;
  position: absolute;
   left:1175px;
   top:360px;
}
h2.price7{
  color:yellow;
   position: absolute;
   left:1580px;
   top:125px;
}
h2.price8{
  color:yellow;
   position: absolute;
   left:1580px;
   top:285px;
}

</style>
</head>
<body>

<h1>Menu </h1>
<p class="main">Main courses</p>
  <h2 class="breakfast">Breakfast</h2>
  <h3 class="breakfast1">
    Rice with three curries <br>
    Sweet potato with lunumiris <br>
    Milk rice with lunumiris <br>
    Roti with different flavours <br>
    String hoppers with polsambola and curry<br>
    Pancake<br>
    Thosai with sambola and curry<br>
    Sandwitch<br>
    Parota</h3>
  
  
  <h2 class="lunch">Lunch</h2>
  <h3 class="lunch1">
    
    Rice with three curries<br>(including chicken,sausages or fish)<br>
    Noodles<br>
    Shorteats<br>
    
  </h3>

  <h2 class="dinner">Dinner</h2>
  <h3 class="dinner1">
    Egg rice<br>
    Chicken rice<br>
    Noodles<br>
    Koththu<br>
    Parota<br>
    Shorteats<br>
  </h3>

  <p class="main1">Drinks</p>
  <h2 class="cool">Cool drinks</h2>
  <h3 class="cool2">Iced coffee<br> Fruit juices</h3>
  <h4 class="cool3">
    Avacado<br>
    Papaya<br>
    Lemon<br>
    Orange<br>
    Watermelon<br>
    Passion fruit
  </h4>
  <h2 class="cool4">Hot drinks</h2>
  <h3 class="cool5">Tea(black & green)<br>Coffee<br>Nestomalt<br>Sago</h3>

   <p class="main2">Desserts</p>
    <h2 class="desserts">Fruit salad<br>Vanilla Sundae<br>Chocalate Sundae<br></h2>
     <p class="main3">Others</p>
     <h2 class="others">Achcharu<br>Moju<br>Sweets</h2>

     <h3 class="price1">
     Rs.150/=<br>
     Rs.80/=<br>
     Rs.50/=<br>
     Rs.50/=<br>
     Rs.100/=<br>
     Rs.50/=<br>
     Rs.80/=<br>
     Rs.70/=<br>
     Rs.70/=</h3>
     <h3 class="price2">
    
     Rs.250/=<br><br>
     Rs.200/=<br>
     Rs.70/=<br>
    
  </h3>

  <h3 class="price3">
    Rs.300/=<br>
    Rs.350/=<br>
    Rs.300/=<br>
    Rs.500/=<br>
    Rs.70/=<br>
    Rs.70/=<br>
  </h3>
  

  <h3 class="price4">Rs.200/=</h3>

  <h4 class="price5">
    Rs.150/=<br>
    Rs.150/=<br>
     Rs.130/=<br>
     Rs.130/=<br>
     Rs.100/=<br>
     Rs.130/=
  </h4>

  <h3 class="price6">Rs.50/=<br>Rs.70/=<br>Rs.120/=<br>Rs.80/=</h3>

   
    <h2 class="price7">Rs.150/=<br>Rs.320/=<br>Rs.320/=<br></h2>
    
     <h2 class="price8">Rs.150/=<br>Rs.150/=<br>Rs.120/=</h2>




<a href="Diverse.php"button class="button">Diverse Menu</button>

  

    <a href="Customization.php"button class="button2">Customization Options</button>

      <a href="Special.php"button class="button3">Special Offers</button>

        

            <a href="discount.php"button class="button6">Discount     </button>

              
               
                  <a href="add_new.php"button class="button10">Call Us</button>
                   <a href="about.php"button class="button4">Back    </button>


</body>
</html> 
