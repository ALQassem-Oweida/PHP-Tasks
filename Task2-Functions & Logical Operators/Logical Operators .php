<?php

//1 
echo "1. Check for leap Year : <br><br>";

function leapYear($year){
    if((0 == $year % 4) ){echo "$year : This year is  a leap year <br><br>";}    
    else {echo "$year : This year is not a leap year <br><br>";    } 

}
leapYear(1996);
    

//2 
echo "2. Check for season : <br><br>";

function season($temp){
    if(($temp <20 ) ){echo "We are in the winter <br><br>";}    
    else {echo "We are in the summer <br><br>"; } 

}
season(16);


//3 
echo "3. Sumation : <br><br>";

function sum($n1,$n2){
    if(($n1==$n2) ){echo "The sumation of $n1 & $n2 = ". ($n1+$n2)*3;}    
    else {echo "The sumation of $n1 & $n2 = ". ($n1+$n2) ; } 
}
sum(2,1);

//4 
echo "<br><br>";
echo "4. Sumation2 : <br><br>";

function sum2($n1,$n2){
    if(($n1+$n2)==30 ){echo "The sumation of $n1 & $n2 = ". ($n1+$n2);}    
    else {echo "False"; } 
}
sum2(15,15);


//5 
echo "<br><br>";
echo "5. multiple : <br><br>";

function mult($n){
    if($n%3==0 ){echo "True";}    
    else {echo "False"; } 
}
mult(30);


//6 
echo "<br><br>";
echo "6. check range : <br><br>";

function checkRange($n){
    if($n>19 && $n<51 ){echo "True";}    
    else {echo "False"; } 
}
checkRange(27);

//7 
echo "<br><br>";
echo "7. largest number  : <br><br>";

function largest($n1,$n2,$n3){
    if($n1>$n2 && $n1>$n3 ){echo "The largest number is : $n1";}
    else if($n2>$n1 && $n2>$n3 ){echo "The largest number is : $n2";}       
    else {echo "The largest number is : $n3";} 
}
largest(11,32,8);


//8 
echo "<br><br>";
echo "8. monthly electrisity bill  : <br><br>";

function elecBill($unites){
    if($unites<51 && $unites>=0){echo "The bill =  ". $unites*2.5;}
    else if($unites>51 && $unites<151 ){echo "The bill =  ". $unites*5;}
    else if($unites>150 && $unites<251 ){echo "The bill =  ". $unites*6.2;}  
    else if($unites>250 ){echo "The bill =  ". $unites*6.2;}       
    else {echo  "Unites Cant be negative value";} 
}
elecBill(-50);


//9 
echo "<br><br>";
echo "9. Calculater  : <br><br>";

function calc($n1,$n2,$operation){
    if($operation=='+'){echo "The sum =  ". $n1+$n2;}
    else if($operation=='-'){echo "The sub =  ". $n1-$n2;}
    else if($operation=='*'){echo "The mult =  ". $n1*$n2;}
    else if($operation=='/'){echo "The division =  ". $n1/$n2;}       
    else {echo "Please enter a valid operation(+ , - , / , *)";} 
}
calc(1,2,'+');

//10 
echo "<br><br>";
echo "10. Vote check  : <br><br>";

function vote($Age){
    if($Age>17){echo "You can vote";} 
    else if($Age<17 && $Age>0){echo "You can't vote";} 
    else {echo "Age can't be zero or less";}    
}
vote(45);


//11 
echo "<br><br>";
echo "11. type of number  : <br><br>";

function type($n){
    if($n>0){echo "( $n ) is a positive number";}    
    else if($n<0){echo "( $n ) is a nigative number";}    
    else {echo "The number you enterd is a Zero";} 
}
type(0);


//12 
echo "<br><br>";
echo "12. grade for the student  : <br><br>";

function grade($Array){

    $ave=array_sum($Array)/count($Array);
    if($ave<60 && $ave>=0){echo  "Your grade is : ( F )" ; }
    else if($ave<70 && $ave>59){echo  "Your grade is : ( D )" ; }
    else if($ave<80 && $ave>69){echo  "Your grade is : ( C )" ; }
    else if($ave<90 && $ave>79){echo  "Your grade is : ( B )" ; }
    else if($ave<=100 && $ave>89){echo  "Your grade is : ( A )" ; }
    else {echo  "Please check that you entered the your grades correctly" ;} 

}
grade([60,86,95,63,55,74,79,62,50]);


?>