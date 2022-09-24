<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="./style/SignUp.css" rel="stylesheet">

<?php require_once 'Databaseconfig.php';?>
</head>    
<body>
<?php
// define variables and set to empty values
 $emailErr =$passErr=$passErr2=$emailErr3="";
 $FnameErr =$MnameErr =$LnameErr =$FAMnameErr ="";
$Fname =$Lname =$FAMname =$Mname = $email =$pass= "";
$errorNum = 0;



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["Fname"])) {
    $FnameErr = "First Name is required";
    $errorNum++;
  } else {
    $Fname = test_input($_POST["Fname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Fname)) {
    $FnameErr = "Only letters and space are allowed in First Name filed"; 
    $errorNum++;
    }
  }

  if (empty($_POST["Mname"])) {
    $MnameErr = "Middle Name is required";
    $errorNum++;
  } else {
    $Mname = test_input($_POST["Mname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Mname)) {
     $MnameErr = "Only letters and space are allowed in Middle Name filed";
     $errorNum++;
    }
  }


  if (empty($_POST["Lname"])) {
    $LnameErr = "Last Name is required";
    $errorNum++;
  } else {
    $Lname = test_input($_POST["Lname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Lname)) {
    $LnameErr = "Only letters and space are allowed in Last Name filed";
    $errorNum++;
    }
  }


  if (empty($_POST["FAMname"])) {
    $FAMnameErr = "Family Name is required";
    $errorNum++;
  } else {
    $FAMname = test_input($_POST["FAMname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$FAMname)) {
    $FAMnameErr = "Only letters and space are allowed in Family Name filed";
    $errorNum++;
    }
   
  }


  if (empty($_POST["pass"])) {
        $passErr = "Password is required";
        $errorNum++;
      } else {
  $pass = test_input($_POST["pass"]);
  if( !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/",$pass)  || strlen($pass) < 10 || strlen($pass) > 15 ) {
    $passErr = 'Password should be (10-15) characters in length and should include at least one upper case letter, one number, and one special character.';
    $errorNum++;
   
}if($pass!= $_POST["passc"]){
    $passErr2 =  "Passwords dosent match";
}
}

if ($errorNum == 0 ) {


    try {
        $mobile=$_POST["mobile"];
        $addData="INSERT INTO signup_data(email,mobile,first_name,middle_name,last_name,family_name,password,user_type) 
        VALUES('$email','$mobile','$Fname','$Mname','$Lname','$FAMname','$pass','user')";
        $conn->query($addData);
        header("Location: ./Login.php");
    
    } catch (\Throwable $th) {
    
        $emailErr3= "Please tray anouther First name or Email";
    }
}




}


    
  





function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>




<div class="BackToHome"><a href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
  <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
</svg><a></div>

<div class="grid text-center">
  <div class="g-col-4">
    
  <h3>Sign Up</h3>
  <p>Create an account it's free</p><br>
  <span class="error"> <?php echo $emailErr3;?></span>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return validation()"  style="margin-top: 2.5em" >
                      
                 
                            
                            <input style="width:100%;" type="text" id="email" name="email" placeholder="Email" >
                            <span class="error"> <?php echo $emailErr;?></span>
                            <div id="email_err" style="color: red"></div>
                          

                            <input style="width:100%;" type="number" id="mobile" name="mobile" placeholder="mobile" required >

                            <div >
                            <input  type="text" id="Fname" name="Fname" placeholder="First name"  >
                            <input type="text " id="Mname" name="Mname" placeholder="Middle name"  ></div>
                            <div class="fiftey">
                            <input type="text" id="Lname" name="Lname" placeholder="Last name" >
                            <input type="text" id="FAMname" name="FAMname" placeholder="Family name"  >    
                            <div>
                            <div id="name_err" style="color: red"></div>
                         <div>
                            <span class="error"> <?php echo $FnameErr."&nbsp&nbsp&nbsp&nbsp&nbsp";?></span>
                            <span class="error"> <?php echo $MnameErr;?></span>
                            <span class="error"> <?php echo $LnameErr."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";?></span>
                            <span class="error"> <?php echo $FAMnameErr;?></span>
                         </div>
    

                            <input  type="password" id="password" name="pass" placeholder="Password"  >
                            <input  type="password" id="passwordc" name="passc" placeholder="Confirme Password"  >
                            <span class="error"> <?php echo $passErr;?></span>
                            <span class="error"> <?php echo $passErr2;?></span>
                            <div id="pass_err" style="color: red"></div>

                            <!-- <p id="passwordmessage"> the passowrd must be from 3 to  15 characters  </p> -->
                            <button name="submit" type="submit" class="sign_up">Sign Up</button>
                            <p>Alreday have an account?<a href="./Login.php"> Log in</a></p>
                      </form><br><br>

  


  </div>

</div>

 <?php include 'footer.php';?> 
 <script src="./script/JavaScript.js"></script>





</body>
</html>


