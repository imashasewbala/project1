<?php
$conn = mysqli_connect('localhost', 'root', '', 'portfolio');

if (isset($_POST["submit"])) {
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
  
    $special_instruction = $_POST['message'];
 
    $contact_number = $_POST['contact_number'];

    $sql = "INSERT INTO `crud2`(`id`, `first_name`, `email`, `message`,  `contact_number`) 
            VALUES (NULL, '$first_name', '$email', '$message',  '$contact_number')";

    $result = mysqli_query($conn, $sql);
    $id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;

    if ($result) {
        header("Location: table1.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD Application</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Please Make A Comment
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Complete the form below form</h3>
         
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Albert">
               </div>

              

            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

             <div class="col">
                  <label class="form-label">Message:</label>
                  <input type="text" class="form-control" name="message" placeholder="About...">
               </div>

             

            <div class="col">
                  <label class="form-label">Contact Number:</label>
                  <input type="text" class="form-control" name="contact_number" placeholder="07********">
               </div>

            <br>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="table1.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>