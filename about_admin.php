<?php

$conn = mysqli_connect('localhost','root','','portfolio');

?>

<!DOCTYPE html>
<html>
<head>
<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  font-size:40px;
}

l
h1{
  
  position:absolute;
	top:40px;
	right:200px;
}
h2{
	position:absolute;
	top:100px;
	right:240px;
}
h3{
	position:absolute;
	top:200px;
	right:1440px;
}
.button-container {
  display: flex; /* Use flexbox */
  justify-content: flex-start; /* Align buttons to the left */
  margin-top: 20px; /* Optional margin to create some space between the section and buttons */
}
.button1 {
  background-color: #007BFF;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  font-size: 16px;
  position:absolute;
  left:200px;
   top:500px;
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
  left:70px;
  top:500px;
}

</style>
</head>
<body>
  <h1>Welcome to Admin Page </h1>
  <h2>Welcome to the Admin Home Page, your control center for managing and shaping the functionality of our system.<br> As an administrator, this is where you'll find the tools you need to facilitate smooth operations, monitor key metrics, and make informed decisions. <br>Let's explore the key features and functionalities:</h2>
  <h3>
  	<ol>
  		<li>User Management</li>
  		<li>Content Management</li>
  		<li>Analytics and Reporting</li>
  		<li>Security and Access Control</li>
  	</ol>
  </h3>

<div class="button-container">
        <a href="diverse.php" class="button1">Customer-Centric Offerings</a>
        <a href="indexf.php" class="button2">Main Page</a>



</body>
</html>
