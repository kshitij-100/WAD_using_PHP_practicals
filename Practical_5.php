<?php
//1
$name = "Kshitij";
echo "Kshitij<br>";
echo "Length of str is ".strlen($name);

//2
$str = "I am a php developer";
echo "<br>";
$words = 1;
for($i=0; $i<=strlen($str); $i++)
{
    if($str[$i] == ' '){
        $words++;
    }
}
echo "<br>";
echo "Number of words in ".$str." is ".$words;

//3
echo "<br><br>Various str functions...";
$sub = "PHP is a server side scripting language";
echo "<br>";
echo strlen($sub);
echo "<br>".str_word_count($sub);
echo "<br>".strrev($sub);
echo "<br>".strpos($sub,"server");
echo "<br>".str_replace("PHP","JAVA",$sub);

?>