<?php
   echo "If statement";
   $age = 63;
   if($age>=60){
    echo "<br>";
    echo "You are a Senior Citizen !";
   }

   echo "<br><br>";
   echo "If-Else statement";
   $age = 20;
   If($age>=18){
    echo "<br>";
    echo "You can vote!";
   }
   else{
    echo "You can not vote!";
   }

   echo "<br><br>";
   echo "Switch statement";
   echo "<br>";
   $age = 36;
   
   switch($age)
   {
     case 12:
        echo "You are 12 years old";
        break;
     case 24:
        echo "You are 24 years old";
        break;
     case 36:
        echo "You are 36 years old";
        break;
     case 48:
        echo "You are 48 years old";
        break;
     default:
     echo "You are 24 years old";
   } 
?>
