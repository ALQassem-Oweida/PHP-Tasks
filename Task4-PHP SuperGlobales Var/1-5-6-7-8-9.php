



<!DOCTYPE HTML>  
<html>
<head>
<style>
            form {
                display:flex;
                flex-direction:column;
                margin:auto;
                align-items:center;
                margin-top:200px;
                border:solid;
                width:40%;
                padding: 30px;
                background-color:white;
                border-radius:20px;
            }
         
            body{
                background-color:black;
            }
            #sub{
              width:100px;
            }
        </style>
</head>
<body>  



<h2>User and email Form </h2>

<form method="GET" action="./1_ActionPage.php">  
  Name :  <input type="text" name="name" ><br>
 E-mail: <input type="text" name="email" ><br>
  
  <input id="sub" type="submit" name="submit" value="Submit">  

  <?php

$visitors = file_get_contents('visitors.txt');
$visitors = $visitors+1;

file_put_contents('visitors.txt',$visitors);

$content = file_get_contents('visitors.txt');
echo "<br><br><br><br>The number of visitors is: (". $content. ")";

?>


</form>





</body>
</html>



