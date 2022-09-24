<?php
session_start();
include "./Databaseconfig.php";



if(isset($_POST['update']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $name1 = mysqli_real_escape_string($conn, $_POST['name1']);
    $name2 = mysqli_real_escape_string($conn, $_POST['name2']);
    $name3 = mysqli_real_escape_string($conn, $_POST['name3']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $type = mysqli_real_escape_string($conn, $_POST['user_type']);

    
    $query = "UPDATE signup_data SET first_name='$name', middle_name='$name2',last_name='$name1',
    family_name='$name3',email='$email',mobile='$mobile', password='$pass',user_type='$type' WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);
    header("Location: MainPage.php");
    exit(0);


   
    // 


}




?>
