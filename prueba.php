<?php
function circleOfNumbers($n, $firstNumber){
    while($firstNumber >= 0 && $firstNumber <= $n-1){
        if($n >= 4 && $n <= 20){
            return ($firstNumber + ($n/2) ) % $n;
        }
    }
}

//echo (circleOfNumbers(10,7));

function centuryFromYear($year) {
    return ceil($year / 100);
}

//echo centuryFromYear(1905);

function checkPalindrome($inputString) {
    return strrev($inputString) == $inputString;
}

//echo (checkPalindrome("acaramanamaraca"));

function almostIncreasingSequence($sequence) {
    $mistakes = 0;
    
    for($i = 0; $i < count($sequence) -1; $i++){
        if($sequence[$i] >= $sequence[$i+1]){
            if(count($sequence) > $i+2 && 
               $sequence[$i] >= $sequence[$i+2] &&
               $i > 0 && 
               $sequence[$i-1] >= $sequence[$i+1]){
                   return false;
               }
               else
                    $mistakes++;
        }
        
        if($mistakes > 1)
            return false;
    }
    
    return true;
}

echo almostIncreasingSequence(1, 3, 2, 1);