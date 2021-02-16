<?php
    $temp = "Hi I am Neeraj";
    echo   "a) The length of the string is : ". strlen($temp) . "<br>";
    echo   "b) The number of words in a string is:" . str_word_count($temp) ."<br>" ;
    echo    "c) The reverse of a string is: " . strrev($temp) . "<br>";
    $name = "Neeraj" ; 
    echo    "d) The position of the string 'neer' is : " . strpos($temp,$name) . "<br>";
?>
