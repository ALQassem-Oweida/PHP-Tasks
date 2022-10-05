<?php

require "./OtherPages/Databaseconfig.php";



if(isset($_POST['update']))
{
    $id =$_POST['id'];
    $name =$_POST['name'];
    $address =$_POST['address'];
    $salary =$_POST['salary'];


    
    $query = "UPDATE employees SET name='$name', address='$address',salary='$salary' WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);
    // header("Location: index.php");
    // exit(0);


   

    // function GetImageExtension($imagetype) {
    //     if(empty($imagetype)) return false;
        
    //     switch($imagetype) {
    //         case 'img/users/gif': return '.gif';
    //         case 'img/users/jpg': return '.jpg';
    //         case 'img/users/png': return '.png';
    //         default: return false;
    //     }
    // }

    // if (!empty($_FILES["uploadedimage"]["name"])) {

        $username=stripslashes($_POST['name']);

        $image=$_POST['uploadedimage'];


        // $file_name=$_FILES["uploadedimage"]["name"];
        // $temp_name=$_FILES["uploadedimage"]["tmp_name"];
        // $imgtype=$_FILES["uploadedimage"]["type"];
        // $ext= GetImageExtension($imgtype);
        // $imagename=$_FILES["uploadedimage"]["name"];
        $img = "img/users/".$image;
   

        // if(move_uploaded_file($temp_name,$img)) {
    
            $addData="UPDATE employees SET img='$img' WHERE id='$id' ";
            $conn->query($addData);
            header("Location: index.php");
            

        // } 
    
        
        }
    
    
    //     else if (empty($_FILES["uploadedimage"]["name"])) {
    //         $img="img/users/default.png";
    //         $addData="UPDATE employees SET img='$img' WHERE id='$id' ";
    //             $conn->query($addData);
    //             // header("Location: index.php");
    // }
      
    


// }




?>
