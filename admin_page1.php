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

li a {
  display: block;
  width: 160px; /* Increase the width to make the navigation bar wider */
  height: 200px; /* Increase the height to make the navigation bar taller */
  line-height: 70px; /* Center the text vertically within the navigation bar */
  background-color: #dddddd;
  text-align: center; /* Center the text horizontally within the navigation bar */
  text-decoration: none;
  color: #333; /* Set the text color */
}

li a:hover {
  background-color: #555; /* Change the background color on hover */
  color: #fff; /* Change the text color on hover */
}
h1{
  text-align: center;
}

</style>
</head>
<body>
  <h1>Welcome to Admin Page </h1>

<ul>
  <li><a href="about_admin.php">About</a></li>
  <li><a href="user_admin.php">User</a></li>
  <li><a href="progress_admin.php">Progress</a></li>
  <li><a href="contact_admin.php">Contact</a></li>
</ul>

<!DOCTYPE html>
<html>
<head>
<style>
  .graph-container {
    width: 400px;
    height: 200px;
    border: 1px solid #ccc;
    padding: 10px;
  }

  .bar {
    width: 30px;
    height: 150px;
    background-color: #4CAF50;
    margin: 0 10px;
    display: inline-block;
    position: relative;
  }

  .bar-label {
    text-align: center;
    margin-top: 5px;
  }
</style>
</head>
<body>
  <div class="graph-container">
    <div class="bar" style="height: 120px;"></div>
    <div class="bar" style="height: 80px;"></div>
    <div class="bar" style="height: 100px;"></div>
    <div class="bar" style="height: 60px;"></div>
    <div class="bar" style="height: 140px;"></div>
    <div class="bar" style="height: 50px;"></div>
    <div class="bar" style="height: 90px;"></div>
  </div>

  <div class="graph-labels">
    <span class="bar-label">Bar 1</span>
    <span class="bar-label">Bar 2</span>
    <span class="bar-label">Bar 3</span>
    <span class="bar-label">Bar 4</span>
    <span class="bar-label">Bar 5</span>
    <span class="bar-label">Bar 6</span>
    <span class="bar-label">Bar 7</span>
  </div>
</body>
</html>


</body>
</html>
