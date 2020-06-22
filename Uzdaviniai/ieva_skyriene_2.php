<?php

$name = 'Bradley';
$surname = 'Cooper';

if(strlen($name)>strlen($surname)){
    echo "1. $surname";
}
else echo "1. $name";
echo '<br>';

//2 uzdavinys
$nameUpper = strtoupper($name);
$surnameLower = strtolower($surname);
echo "2. ".$nameUpper." ".$surnameLower;

echo '<br>';

//3 uzdavinys
$name = 'Bradley';
$surname = 'Cooper';
$firstLetters = substr($name, -7,1).substr($surname, -6,1);
echo "3. $firstLetters";
echo '<br>';

//4 uzdavinys
$name = 'Bradley';
$surname = 'Cooper';
$lastThreeLetters = substr($name, -3).substr($surname, -3);
echo "4. $lastThreeLetters";
echo '<br>';

//5 uzdavinys
$text =  'An American in Paris';

$text = str_replace("A","*", $text);
$text = str_replace("a","*", $text);
echo "5. $text";
echo '<br>';

//6 uzdavinys
$text =  'An American in Paris';
$aLetters = substr_count($text, 'a');
$ALetters = substr_count($text, 'A');
echo "6. Tekste yra $aLetters a mazosios ir $ALetters A didziosios raides.";
echo '<br>';

//7 uzdavinys
$stringas = "An American in Paris";
$balses = array("A","a","E","e","I","i","O","o","U","u","Y","y", " ");
$stringas = str_replace($balses, " ", $stringas);
echo "<br>";
echo "7. $stringas";

$text =  "Breakfast at Tiffany's";

$text = str_replace($balses, " ", $text);
echo '----';
echo $text;

echo '<br>';

$text =  "Breakfast at Tiffany's";
$text = str_replace($balses, " ", $text);
echo $text;
echo '<br>';

$text =  "2001: A Space Odyssey";
$text = str_replace($balses, " ", $text);
echo $text;
echo '<br>';

$text =  "It's a Wonderful Life";
$text = str_replace($balses, " ", $text);
echo $text;
echo '<br>';

//8 uzdavinys

$starWars = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$episodeNumber = substr($starWars, -14,1);
echo "8. Epizodo numeris yra: $episodeNumber";

//9 uzdavinys
$text = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$text2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$words = explode(" ", $text);
$words2 = explode(" ", $text2);
$counter = 0;
$counter2 = 0;
foreach($words as $word){
    if(mb_strlen($word)<=5){
        $counter++;
    }
}
foreach($words2 as $word2){
    if(mb_strlen($word2)<=5){
        $counter2++;
    }
}
echo '<br>';
echo "9. Don't Be a Menace to South Central While Drinking Your Juice in the Hood|| Yra $counter";
echo '<br>';
echo "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale || Yra $counter2";
echo '<br>';


//10 uzdavinys
$letter1 = chr(rand(97,122));
$letter2 = chr(rand(97,122));
$letter3 = chr(rand(97,122));
echo "10. $letter1$letter2$letter3";
echo '<br>';
echo '<br>';
echo '11 uzdavinys';
echo '<br>';

//11 uzdavinys

array_push($words, ...$words2);
shuffle($words);
$arrray10 = array_slice($words,0,10);
echo join(" ", $arrray10);


