<?php

require "./OtherPages/Databaseconfig.php";

if(isset($_POST['Add']))
{


function GetImageExtension($imagetype) {
    if(empty($imagetype)) return false;
    
    switch($imagetype) {
        case 'img/users/gif': return '.gif';
        case 'img/users/jpg': return '.jpg';
        case 'img/users/png': return '.png';
        default: return false;
    }
}



$name = $_POST['name'];
$address =$_POST['address'];
$salary = $_POST['salary'];






if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=$_FILES["uploadedimage"]["name"];
    $img = "img/users/".$imagename;


    if(move_uploaded_file($temp_name,$img)) {

        $addData="INSERT into employees(name,address,salary,img)
        VALUES('$name','$address','$salary','$img')";
        $conn->query($addData);
        header("Location: index.php");
        
    
   

        
    } 

    
    }


    else if (empty($_FILES["uploadedimage"]["name"])) {
        $img="img/users/default.png";
        $addData="INSERT into employees(name,address,salary,img)
            VALUES('$name','$address','$salary','$img')";
            $conn->query($addData);
            header("Location: index.php");
}
  






}















?>