<?php

$conn = mysqli_connect('localhost','root','','portfolio');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .confirmation-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-info {
            font-weight: bold;
        }
        .thank-you {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            color: #008000;
        }
    </style>
</head>
<body>
    <div class="confirmation-container">
        <p>Please confirm your order by adding a message to the below number:</p>
        <p class="contact-info">0772424254 (Owner)</p>
        <p>You can make your payment online or in cash. This is our account number:</p>
        <p class="contact-info">889812237</p>
        <p>Bank of Ceylon (BOC), Athugalpura branch</p>
        <p>Name: I.S. Balasooriya</p>
        <p>After paying, please send your receipt copy to us via WhatsApp:</p>
        <p class="contact-info">WhatsApp Number: 0772424254</p>
        <p>Mention the date on which you want your order.</p>
        <p class="thank-you">Thank you for your order!</p>
        <p>Have a nice day!</p>
    </div>
</body>
</html>
