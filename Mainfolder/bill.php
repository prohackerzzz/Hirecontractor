<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bill.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Reciept</title>
</head>
<body>
    <label><?php echo $_SESSION["Name"];?> &nbsp &nbsp hired </label>&nbsp
    <label><?php echo $_GET['q'];?> for</label>
    

    <h1>$<?php echo $_GET['count'] ?>/hr</h1>
    <h3 class="date">Date</h3>
    <h3 class="sign">Receiver's Sign</h3>
    
</body>
<script>window.print()</script>
</html>