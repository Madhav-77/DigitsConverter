<?php

// Write a console application in the choice of your 
// programming language that takes in a currency value 
// (Min Value 00, Max Value 9,99,999.99) and prints out a text. 
// For ex. If provided "123456.78", it should print out 
// "Rs. One Lakh Twenty Three Thousand Four Hundred And Fifty Six 78/100 ONLY". 
// And provide unit tests that do a code coverage of 90%. 
// Share the output via Github with clear instructions 
// on how to run it locally with the right prerequisites.

class DigitsConverter {
    // Function to conver digits into words
    public function numberToWords($number, $pos)
    {
        $units = array("Zero", "One",  "Two", "Three", "Four", 
        "Five", "Six", "Seven", "Eight", 
        "Nine", "Ten", "Eleven", "Twelve",  
        "Thirteen", "Fourteen", 
        "Fifteen", "Sixteen", "Seventeen", 
        "Eighteen", "Nineteen");
        $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninty");
        $tens_power = array("", "Lakh", "Thousand", "Hundred");
        if($number == 0){
            return null;
        } else if ($number > 19){
            return $tens[$number / 10]." ".$units[$number%10]." ".$tens_power[$pos]." ";
        } else {
            return $units[$number]." ".$tens_power[$pos]." ";
        }
    }

    public function formatNumber($number){
        $converted_str = "";
        
        // getting the number after decimal
        $paise = substr(strrchr($number, "."), 1);
        
        // getting length of the number after decimal for validation
        $decimal_places = strlen($paise);
        
        if($decimal_places > 2){
            echo "Format incorrect! Please follow (XXXXXX.XX) format";
        } else {
            if($number < 0 || $number > 999999.99){
                echo "Please input numbers in the range of 0.00 - 999999.99";
            } else if($number == 0){
                echo "Zero";
            } else {
                $converted_str = 
                $this->numberToWords(($number / 100000)%100, 1)
                    .$this->numberToWords(($number / 1000)%100, 2)
                    .$this->numberToWords(($number / 100)%10, 3);
                
                // adding "And" if the digit has non-zero numbers at units and tens place
                if (($number > 100) && ($number % 100 != 0)) {
                    $converted_str = $converted_str."And ";
                }
                $converted_str = $converted_str.$this->numberToWords($number%100, 0);
            }
        }
        $converted_str = "Rs. ".$converted_str.$paise."/100 ONLY";
        return $converted_str;
    }
}
$dc = new DigitsConverter();
$number = (float)readline("Enter any number between 0.00 - 999999.99");
printf($dc->formatNumber($number));
?>