<?php
//1 
$Name1 ='qassem<br>' ;
$Name2 ='QASSEM<br>' ;

echo "1.<br><br>";
echo "a. ". strtoupper($Name1);
echo "b. ". strtolower($Name2);
echo "c. ". ucfirst($Name1);   //ucwords
echo "d. ". lcfirst($Name2);  //lcwords

//2 
echo "<br><br>";
echo "2.<br><br>";
$Time ='085119' ;
echo rtrim(chunk_split($Time,2,":"), ":");

//3 
echo "<br><br>";
echo "3.<br><br>";
$stringx='I am a full stack developer at orange coding academy';

if(strpos($stringx,'orange') !== false){
    echo "Word Found!";
} else{
    echo "Word Not Found!";
}

//4 
echo "<br><br>";
echo "4.<br><br>";
$Link='www.orange.com/index.php';
echo basename($Link);

//5 
echo "<br><br>";
echo "5.<br><br>";
$email= 'info@orange.com';
echo (strstr($email,'@',true));

//6 
echo "<br><br>";
echo "6.<br><br>";
$email= 'info@orange.com';
echo (substr($email, -3));

//7 
echo "<br><br>";
echo "7.<br><br>";
$Pass= '1234567890ABCDEFGHIJKLMNOPabcdesghijklmnop';
echo substr(str_shuffle($Pass),0,16);

//8 
echo "<br><br>";
echo "8.<br><br>";


$stringx2='That new tranee is so genius';
$Replace_str="Our";

$firstWord=strstr($stringx2,' ',false);
echo  '<br>'.$Replace_str. $firstWord;


//9 
echo "<br><br>";
echo "9.<br><br>";
$string1='dragonball';
$string2='dragonboll';
$position = strspn($string1 ^ $string2, "\0");
printf(
    'First difference at position %d: "%s" vs "%s"',
    $position, $string1[$position], $string2[$position]
);


//10 
echo "<br><br>";
echo "10.<br><br>";
$stringA='Twinkle twinkle, little star.';
$Array=explode(' ', $stringA);
echo var_dump($Array);



//11 
echo "<br><br>";
echo "11.<br><br>";
$char = 'M';
echo ++$char;


//12 
echo "<br><br>";
echo "12.<br><br>";
$stringFox = 'The brown fox';
$addString ='quick';
$positionS = 4;
echo 'a. '. substr_replace( $stringFox, $addString.' ', $positionS, 0);
echo '<br> b. '. strstr($stringFox,' ',true);


//13 
echo "<br><br>";
echo "13.<br><br>";
$num = 0000657022.24;
echo str_replace(0, '', $num);


//14 
echo "<br><br>";
echo "14.<br><br>";
$stringFox2 = 'The quick brown fox jumps over the lazy dog';
$wordToRemove='fox';
echo str_replace($wordToRemove, '', $stringFox2);


//15 
echo "<br><br>";
echo "15.<br><br>";
$stringFox3 = 'The quick brown fox jumps----over the lazy dog---';
echo str_replace('-', '', $stringFox3);
echo '<br>'. trim($stringFox3,"-");// ltrim,rtrim

//16 
echo "<br><br>";
echo "16.<br><br>";
$stringSpecial = '\"\1+2/3*2:2-3/4*3';
echo preg_replace("/[^0-9]/", ' ', $stringSpecial);


//17 
echo "<br><br>";
echo "17.<br><br>";
$stringFox4 = 'The quick brown fox jumps over the lazy dog';
$words = str_word_count($stringFox4, 1);

// print_r ($words);
$newString='';
for ($i=0;$i<5;$i++){
    $newString=$newString. " ". $words[$i];
};
echo $newString;



//////////////////////////////////////////////////////////////


echo "<br><br>";
echo "( 17+16 ). Code challenge : <br><br>";


$stringFox5 = 'سThe/quick*brown+fox-jumps1over45the@lazy!dog';
$newStringx = preg_replace("/[^A-Z a-z]/", ' ', $stringFox5);
$words2 = str_word_count($newStringx , 1);

echo $stringFox5. '<br><br>';
// print_r ($words2);

$newString2='';
for ($i=0;$i<5;$i++){
    $newString2=$newString2. " ". $words2[$i];
};
echo $newString2;


///////////////////////////////////////////////////////////////////

//18 
echo "<br><br>";
echo "18.<br><br>";
$num2 = '2,543.12';
echo str_replace(",", '', $num2);


//19 
echo "<br><br>";
echo "19.<br><br>";
$char2='a';
$alpha='a';
for ($i=1;$i<26;$i++){
    $alpha=$alpha. " ". ++$char2; 
}
echo  $alpha;

?>