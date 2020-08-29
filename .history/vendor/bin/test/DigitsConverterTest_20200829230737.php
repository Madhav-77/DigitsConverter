<?php

use PHPUnit\Framework\TestCase;

class DigitsConverterTest extends TestCase{
    
    public function testDigitConversion()
    {
        require 'DigitsConverter.php';
        $this->assertEquals("One Hundred And Twenty Three", formatNumber(123));

    }
}

?>