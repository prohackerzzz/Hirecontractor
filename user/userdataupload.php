<?php
session_start();
if(!isset($_SESSION['Name'])){
    header("location: ../user/userlogin.php");
}

$target_dir = "../Mainfolder/uploads/";
$target_file = basename($_FILES["image"]["name"]);
$targetFilePath = $target_dir . $target_file;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"]) && !empty($_FILES["image"]["name"])){
    include '../config.php';
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
    
    $charge=$_POST["rate"];
    $work=$_POST["desc"];
    $description=$_POST["text"];
    $uid = $_SESSION["id"];
    $name=$_SESSION["Name"];

    $sql = "INSERT INTO userprofile (id,userid,name,Filename,work, descrip, rate)
    VALUES ('',$uid,'$name','$target_file','$work','$description',$charge)";
    $result = $conn->query($sql) or die($conn->error) ;
    if($result === true){
        header("location: ../Mainfolder/main.php");
        echo "Successsfully uploaded";
 
   }
   else{
       echo "error";
   }
}
$conn->close();

}
?>