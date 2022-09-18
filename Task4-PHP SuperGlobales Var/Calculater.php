<html>
    <head>
        <title>Calculator</title>
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
            button{
                width:100px;
            }
            body{
                background-color:black;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label > Num 1 : <input type="text" id="num1" name="n1" required ></label><br>
        <label > Num 2 : <input type="text" id="num2" name="n2" required></label><br><br>
        <div>
            <label ><input required type="radio" id="sum" name="operation"   value="sum"> Sum (+) </label>
            <label ><input required type="radio" id="sub" name="operation"   value="sub"> Sub (-) </label>
            <label ><input required type="radio" id="mult" name="operation"   value="mult"> Mult (x) </label>
            <label ><input required type="radio" id="divide" name="operation"   value="divide"> Divied (÷) </label></div><br>
            <button>Calculate</button><br>
<?php

$n1=0;
$n2=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$n1 = ($_REQUEST['n1']);
$n2 = ($_REQUEST['n2']);
$operation = ($_REQUEST['operation']);


echo "Result : ";
if($operation=='sum'){echo "The sum =  ". $n1+$n2;}
else if($operation=='sub'){echo "The sub =  ". $n1-$n2;}
else if($operation=='mult'){echo "The mult =  ". $n1*$n2;}
else if($operation=='divide'){echo "The division =  ". $n1/$n2;}       
else {echo "Please enter a valid operation(+ , - , / , *)";} }
?>
        </form>


        
    </body>
</html>

