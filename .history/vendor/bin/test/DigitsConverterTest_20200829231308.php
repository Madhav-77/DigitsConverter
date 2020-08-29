<?php

use PHPUnit\Framework\TestCase;

class DigitsConverterTest extends TestCase{
    
    public function testDigitConversion()
    {
        include('..\DigitsConverter.php');
        $dc = new DigitsConverter();
        $this->assertEquals("One Hundred And Twenty Three", $dc->formatNumber(123));
    }
}

?>