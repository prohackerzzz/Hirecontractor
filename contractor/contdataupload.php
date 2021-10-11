<?php
session_start();
if(!isset($_SESSION['Name'])){
    header("location: ../contractor/contractorlogin.php");
}
$target_dir = "../Mainfolder/upload1/";
$target_file = basename($_FILES["image"]["name"]);
$targetFilePath = $target_dir . $target_file;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"]) && !empty($_FILES["image"]["name"])){
    include '../config.php';
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
    
    $charge=$_POST["rate"];
    $work=$_POST["desc"];
    $description=$_POST["text"];
    $name=$_SESSION["Name"];

    $cid = $_SESSION['id'];
    $sql = "INSERT INTO contractorprofile (id,cid,name,Filename,work, descrip, rate)
    VALUES ('',$cid,'$name','$target_file','$work','$description',$charge)";
    $result = $conn->query($sql) or die($conn->error) ;
    if($result === true){
        header("location: ../Mainfolder/main.php");
 
   }
   else{
       echo "error";
   }
}
$conn->close();

}
?>