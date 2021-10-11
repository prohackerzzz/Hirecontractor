<?php 
session_start();
if(!isset($_SESSION['Name'])){
    header("location: ../user/userlogin.php");
}
else{
  $name=$_SESSION["Name"];
  $type=$_SESSION["type"];
  $opposite = "contractor";
  $profile="contractorprofile";
  $fold="upload1";
  if($type=="contractor"){
      $opposite="user";
      $profile="userprofile";
      $fold="uploads";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
</head>
<body>
<?php include 'Navbar.php';?>
    
    <h3>Welcome  <p id="checker"><?php echo $type;?></p>&nbsp <?php echo $name;?></h3>
    <h1 class="cent">Your <?php echo $opposite;?> list</h1>

       <?php 
       include "../config.php";
       $sql = "SELECT * FROM $profile";
       $result = $conn->query($sql) or die($conn->error);

       while($row=$result->fetch_assoc()){
           $name = $row["Name"];

       ?>
        <div class="cards">
        <div class="row1">
             
             <?php
             $img = $row['Filename'];
            ?>
            
            <img src="<?php echo './'.$fold.'/'.$img;?>" width=50px>
            <label id="checkers"><?php echo $row["Name"];?></label>
        </div>
        <div class="row2">
            Ratings : 
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
           <div class="work">
               Works include : <?php echo $row["work"];?>
               <div>
                   Rate : <?php echo $row["rate"];?>$ / hr
                </div>
           </div>
        </div>
        <div class="row3">
            Description : <?php echo $row["descrip"];?>
            <div class="new"><a class="but" href="bill.php?q=<?php echo $row['Name'];?>&count=<?php echo $row['rate'];?>">
            <?php 
            if($type=="user"){
                echo "Hire";
            }
            else{
                echo "Send Proposal";
            }
            ?></a></div>
        </div>
        
    </div>
    <?php }?>

    <!--2nd cards-->

    <!--<div class="cards">
        <div class="row1">
            <img src="avatar.png" width=50px>
            <label>John Doe</label>
        </div>
        <div class="row2">
            Ratings : 
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
           <div class="work">
               Works include : Architect Plumbing Electrician Painter
               <div>
                   Rate : 5$ / hr
                </div>
           </div>
        </div>
        <div class="row3">
            Description : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto expedita aperiam asperiores sed repellat sapiente et quae molestias! Nostrum aliquam minima, similique voluptas ipsa voluptatem excepturi, vel, alias accusamus iure eum doloremque molestias! Obcaecati!
            <button id="but">Hire</button>
        </div>
    </div>-->
    <?php require "Footer.php";?>

</body>
<script src="main.js"></script>
</html>