<?php

//1 Prime numbers : 

echo "1. Prime numbers :<br><br>";
function IsPrime($n)
{
 for($i=2; $i<$n; $i++){
     if($n %$i ==0){return 0;
    }else{return 1;}}
   
   }
$a = IsPrime(5);

if ($a==0){
echo 'This is not a Prime Number.....'."<br><br>";}
else{
echo 'This is a Prime Number..'."<br><br>";}


//2 Reverse a string : 

echo "2. Reverse a string :<br><br>";
function ReverseString($string){
    return strrev($string);
}
$wordToReverse="hello" ; 
echo 'Orignal word : '. $wordToReverse. '<br>';
echo 'Reversed word : '. ReverseString($wordToReverse). '<br><br>';



//3 check for lower case : 

echo "3. check for lower case :<br><br>";
function check_lowerCase($string){
if (ctype_lower($string)) {
    echo "$string consists of all lowercase letters. <br><br>";
 }else {
    echo "$string does not have all lowercase letters. <br><br>";
 }
}
check_lowerCase('qassem');


//4 swap variables : 

echo "4. swap variables : <br><br>";

function swap($x,$y){
  echo ' X ='. $x. ' , '. ' Y = '. $y. '<br><br>';
  $newX=$y;
  $y=$x;
  $x=$newX;
  echo ' new X ='. $x. ' , '. ' new Y = '. $y. '<br><br>';

}
swap(1,4);


//6 check for Armstrong number : 

echo "6. Check for Armstrong number : <br><br>";

function Armstrong($n){
    $sum=0;
    for ($i = 0; $i < strlen($n); $i++){
        $sum+=substr($n, $i, 1)**3;
}
if($sum == $n){
    return 'The number is an Armstrong number <br><br>' ;
}
else{
    return 'The number is not an armstrong number <br><br>';
}
}
echo Armstrong(407);


//7 check for palindrome : 

echo "7. Check for palindrome : <br><br>";

function Palindrome($str){
    $st=str_replace(" ", '',strtolower( preg_replace("/[^A-Z a-z]/","", $str)));
      $Rst=strrev($st);
    
    if($Rst==$st){
      echo  "this string is palindrome <br><br>";
    }
    else{
       echo "this string is not palindrome <br><br>";
    }
}
Palindrome("Eva, can I see bees in a cave?");


//8 check for palindrome : 

echo "8. Check for double : <br><br>";

function removeDouble($array){
    echo print_r(array_unique($array));
    }
    removeDouble([1,2,2,2,3,4,5,4,5]);




?>