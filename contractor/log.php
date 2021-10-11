<?php 
include '../config.php';
if(isset($_POST['submit'])){
    $name=$_POST["email"];
    $pass=$_POST["pass"];

    $sql = "SELECT id,name,email,password from contractor where email='$name'"; 
      $result = $conn->query($sql) or die($conn->error);
      



  while($row = $result->fetch_assoc()) {
      if($row['password']==$pass){
          session_start();
            
          $_SESSION["Name"]=$row["name"];
          $_SESSION["type"]="contractor";
          $_SESSION["id"]=$row["id"];
          
        header("Location: ../Mainfolder/main.php");

          echo "successfulluy logged in ";
      }
      else{
          echo "invalid credentials";
      }
  }
 
$conn->close();
}
    

?>