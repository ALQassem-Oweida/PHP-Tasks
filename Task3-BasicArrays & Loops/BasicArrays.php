<?php

//1   ******************************************************************************************************************************************
echo "1. <br><br>";

$color = array('white', 'green', 'red'); 
function ChangeColor($array){
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $array[0] carpet, the $array[1] lawn, the $array[2] house, the leaden sky.
 The new president and his first lady. - Richard M. Nixon"."<br><br>";
}
ChangeColor($color);


 //2  ******************************************************************************************************************************************


 echo "2. <br><br>";
function colorSort($Array){
 $color = array('white', 'green', 'red' , 'Yallow');
 echo "<ul>";
 for($i=0; $i<count($color); $i++){
 echo "<li>$color[$i]</li>";
 }
 echo "</ul>";
}colorSort($color);


//3  ******************************************************************************************************************************************

echo "3. <br><br>";
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
  "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
   "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

   
   foreach($cities as $contry => $contry_value) {
    echo "The capital of $contry is $contry_value  ";
    echo '<br>';
  }
   echo '<br>';

//4  ******************************************************************************************************************************************


echo "4. <br><br>"; 
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color);
echo '<br><br>';


//5  ******************************************************************************************************************************************

echo "5. <br><br>"; 

$nArray=array();
function Add($nArray,$addValue,$Location){
  array_splice( $nArray, $Location-1, 0, $addValue );
  print_r ($nArray); 
  echo '<br>'; 
  for($i=0; $i<count($nArray); $i++){
    echo $nArray[$i]. " ";}

};
Add([1,2,3,4,5],"$",4);
echo '<br><br>';

//6  ******************************************************************************************************************************************

echo "6. <br><br>"; 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as $i => $i_value) {
    echo  $i . " = " . $i_value;
    echo "<br>";}
    echo '<br><br>';


//7  ******************************************************************************************************************************************

echo "7. <br><br>"; 

function AvrTemp($Temp){

    $ave=array_sum($Temp)/count($Temp);
    echo "Average Temperature is : $ave <br>";
    $newArray=array_unique($Temp);
    sort($newArray);

    echo  "List of Five lowest temperatures : " ;
    for($i=0; $i<5; $i++) {
        echo $newArray[$i]. ' ';
        }echo "<br>";
     echo  "List of Five highest temperatures : ";
    for($i=count($newArray)-1; $i>(count($newArray)-6); $i--){
        echo $newArray[$i]. ' ';
       
    }echo "<br>";
}
AvrTemp([78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73]);


//8  ******************************************************************************************************************************************

echo "8. <br><br>"; 

function Mearg($array1,$array2){
    $MeargdArray = array_merge($array1, $array2);
    print_r($MeargdArray);

}
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
Mearg($array1,$array2);
echo '<br><br>';



//9  ******************************************************************************************************************************************

echo "9. <br><br>"; 

function upper($array){
    $newArray =[];
for($i=0; $i<count($array); $i++){
    array_push($newArray,strtoupper($array[$i]));
}
print_r($newArray);
}
upper(["red","blue","white","yellow"]);
echo '<br><br>';

//10  ******************************************************************************************************************************************

echo "10. <br><br>"; 

function lower($array){
    $newArray =[];
for($i=0; $i<count($array); $i++){
    array_push($newArray,strtolower($array[$i]));
}
print_r($newArray);
}
lower(["RED","BLUE", "WHITE","YELLOW"]);
echo '<br><br>';


//11  ******************************************************************************************************************************************

echo "11. <br><br>"; 

echo implode(",",range(200,250,4)) ;
echo '<br><br>';

 
//12  ******************************************************************************************************************************************

echo "12. <br><br>"; 

$words =  array("abcd","abc","de","hjjj","g","wer");
$StrLengthArray = array_map('strlen',$words);
echo "The shortest array length is : " . min($StrLengthArray). "<br>";
echo "The longest array length is : " . max($StrLengthArray);
echo '<br><br>';


//13  ******************************************************************************************************************************************

echo "13. <br><br>"; 

function unique($n1,$n2){
$randomNum=range($n1,$n2);    
shuffle($randomNum);
for ($i=0; $i< 10; $i++)
{
echo $randomNum[$i]. ' ';
}}
unique(11,20);
echo '<br><br>';


//14  ******************************************************************************************************************************************

echo "14. <br><br>";  

function lowestInteger ($Array){
    sort($Array);
    if($Array[0]==0){
        echo "The lowest number in the matrix other than the zero is : ( $Array[1] ) ";
    }else{
        echo "The lowest number in the array is : ( $Array[0] )<br><br>  ";
    }

}
lowestInteger([2, 0, 10, 12, 6]);
"<br><br>"; 


//15  ******************************************************************************************************************************************

echo "15. <br><br>"; 

$words =  array("d2","c2","de3","hjjj","s3","3");

$y=strlen($words[0]);
$x=strlen($words[0]);
for($i=0; $i<count($words); $i++){

if($x>strlen($words[$i])){
    $x=strlen($words[$i]);
}
if($y<strlen($words[$i])){
    $y=strlen($words[$i]);
}


}
echo "Min =  $x";
echo "<br>";
echo "Max = $y";






?>