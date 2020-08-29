<?php

use PHPUnit\Framework\TestCase;

class DigitsConverterTest extends TestCase{
    
    public function testDigitConversion()
    {
        include('C:\xampp\htdocs\DigitsConverter2\DigitsConverter.php');
        $dc = new DigitsConverter();
        $this->assertEquals("Rs. One Hundred And Twenty Three   56/100 ONLY ", $dc->formatNumber(123.56));
    }
}

?>