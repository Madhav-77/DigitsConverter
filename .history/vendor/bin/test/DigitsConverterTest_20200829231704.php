<?php

use PHPUnit\Framework\TestCase;

class DigitsConverterTest extends TestCase{
    
    public function testDigitConversion()
    {
        include('C:\xampp\htdocs\DigitsConverter2\DigitsConverter.php');
        $dc = new DigitsConverter();
        $this->assertEquals("Rs. One Lakh Twenty Three Thousand Four Hundred And Fifty Six  78/100 ONLY", $dc->formatNumber(123456.78));
    }
}

?>