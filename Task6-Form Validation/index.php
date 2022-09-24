<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body{
            background-color:#FAFAFA;
        }
img{
    width:25%;
    height: 40%;
    margin:50px;
}
h5{
    text-align:center;
}
.log_in{
    margin-top:20px;
    width:20%;
    border-radius:30px;
    background-color:#3D5AFE;
    color:white;
    padding:10px;
    border:none;

}
.sign_up{
    margin-bottom:30px;
    width:20%;
    border-radius:30px;
    background-color:#FF5252;
    color:white;
    padding:10px;
    border:none;
   

}
p{
color: #B1B1B1;
}

    </style>


</head>    
<body>
 <!-- include 'header.php';
// require_once 'Databaseconfig.php'; -->

<div class="grid text-center">
  <div class="g-col-4">.
    
  <h1>Hello There!</h1>
  <p>Automattic identity verification which enable you to verify your identity</p>
  <img src="./img/Landing.png"><br>

  <form action="./Login.php" >
  <button   type="submet" class="log_in">Log in</button><br></form>
  <form action="./SignUp.php" >
  <button type="submet" class="sign_up">Sign Up</button></form>

  </div>

</div>

 <?php include 'footer.php';?> 

</body>
</html>



