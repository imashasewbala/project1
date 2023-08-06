<?php

$conn = mysqli_connect('localhost','root','','portfolio');

?>

<!DOCTYPE html>
<html>
  <head>
    

    <style>


body {
    background-image: url("assets/img/portfolio/foody3.jpg");
    background-size: cover;
    background position: inherit;
    font-family: Arial, sans-serif;
    color:white;
    max-width: 960px;
    margin: 0 auto;
    font-weight: bold;
    
    }
   
  form {
  width: 100%;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 200px;
}

label {
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
}

input[type="email"] {
  padding: 0.5rem;
  font-size: 1rem;
  border: 1px solid #aaa;
  border-radius: 4px;
  margin-bottom: 1rem;
  width: 100%;
  }

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 0.5rem;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>

   
   <form method="POST" name="reset" id="reset">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  <label for="password">Password:</label>
  <input type="text" id="password" name="password" required>
  <label for="password">New password:</label>
  <input type="text" id="password1" name="password1" required>
  <input type="submit" value="Reset Password" name="reset" id="reset">
</form>

<?php

if(isset($_POST["reset"])){

  if($_POST["password"] == $_POST["password1"]){
    

    if (!mysqli_query($link,"UPDATE users SET password = '$_POST[password]' WHERE email ='$_POST[email]'"))
                        
                                    {
                                    echo("Error description: " . mysqli_error($link));
                                    
                                    }else{
                                
                                    
                                        ?>
                                        <script>
                                            alert("Password reset Successfully");
                                        
                                        </script>
                                
                                        <?php
                                            echo "<script> window.location = 'login.php'   </script>";
                                
                                    }
} else {
    echo 'Passwords do not match.';
}

}
    ?>

 </body>
</html>
