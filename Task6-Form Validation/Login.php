
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="./style/Login.css" rel="stylesheet">
</head>    
<body>


<?php 

 session_start(); 

include "./Databaseconfig.php";


if (isset($_POST['email']) && isset($_POST['password'])) {
    $emailErr=$emailErr2=$passErr="";

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname =validate($_POST['email']);
    $pass =validate($_POST['password']);
    

    if (empty($uname)) {
        $emailErr= "Please enter your email";

    }if(empty($pass)){
        $passErr= "Please enter your passwored";

    }
    if(!empty($pass) && !empty($uname)){
        $sql = "SELECT * FROM signup_data WHERE email ='$uname' AND password='$pass'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) === 1) {
            if ($row['email'] === $uname && $row['password'] === $pass && $row['user_type']=="user") {
                echo "Logged in!<br>";

                $_SESSION['firstname'] = $row['first_name'];
                $_SESSION['lastname'] = $row['family_name'];
                $_SESSION['userType'] = $row['user_type'];
                $_SESSION['email'] = $row['email'];
                header("location:MainPage.php");
            }

           else if ($row['email'] === $uname && $row['password'] === $pass && $row['user_type']=="Admin") {
                echo "Logged in!<br>";
           
                $_SESSION['firstname'] = $row['first_name'];
                $_SESSION['lastname'] = $row['family_name'];
                $_SESSION['userType'] = $row['user_type'];
                $_SESSION['email'] = $row['email'];

                header("location:MainPage.php");
           
            



           }

        }else{$emailErr2= "wrong pass or email";}
    }

}






?>

<div class="BackToHome"><a href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
  <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
</svg><a></div>

<div class="grid text-center">
  <div class="g-col-4"><br><br><br><br>
    
  <h3>Log in</h3>
  <p>Welcome Back! Log in with your credentials </p>
  <form action="" method="POST" onsubmit="return validation()"  style="margin-top: 2.5em" >
                      
                              <span class="error"> <?php  echo $emailErr2;?></span>
                            <input type="email" id="email" name="email" placeholder="Email"  >
                            <span class="error"> <?php echo $emailErr;?></span>
                            <input type="password" id="password" name="password" placeholder="Password"  >
                            <span class="error"> <?php echo $passErr;?></span>
                            <button   type="submet" class="log_in">Log in</button><br><br>
                            <p>Dont have an account?<a href="./SignUp.php"> Sign up</a></p>
                      </form><br><br>

  


  </div>

</div>

 <?php include 'footer.php';?> 

</body>
</html>

