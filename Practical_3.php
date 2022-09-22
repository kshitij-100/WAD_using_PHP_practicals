<?php
    echo "While statement";
    echo "<br>";
    $number = 0;
    while($number < 5)
    {
        echo "The value of number is ";
        echo $number+1;
        echo "<br>";
        $number++;
    }

    echo "<br><br>";
    echo "Do-While statement";
    echo "<br>";
    $a = 25;
    do
    {
        echo "The value of number is ";
        echo $a;
        echo "<br>";
        $a++;
    }while($a < 30);


    echo "<br><br>";
    echo "For statement";
    echo "<br>";
    for($i = 2; $i<=10; $i++)
    {
        echo " ".$i."<br>";
        $i += 1;
    }


    echo "<br><br>";
    echo "For-Each statement";
    echo "<br>";
    $arr = array('Lion','Tiger','Wolf','Elephant','Zebra');
    foreach($arr as $array)
    {
        echo "$array.<br>";
    }
?>