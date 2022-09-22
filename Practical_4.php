<?php
$array1 = array("Lion","Tiger","Leapord","Elephant");
echo "Indexed Array...<br>";
for ($i=0; $i < count($array1); $i++) { 
    echo $array1[$i]." is an Animal.";
    echo "<br>";
}


$array2 = array('Maths' => '91','Physics' => '85','Chemistry' => '88','Biology' => '93');
echo "<br>Associative Array...<br>";
foreach ($array2 as $subject => $marks) {
     echo "I got ".$marks." in ".$subject;
     echo "<br>";
}


$array3 = array(array("Ram",18),
array("Sham",19),
array("Lakshman",20));
echo "<br>Multi-Dimentional Array...<br>";

echo "Name: ".$array3[0][0].", Age: ".$array3[0][1];
echo "<br>";
echo "Name: ".$array3[1][0].", Age: ".$array3[1][1];
echo "<br>";
echo "Name: ".$array3[2][0].", Age: ".$array3[2][1];


?>