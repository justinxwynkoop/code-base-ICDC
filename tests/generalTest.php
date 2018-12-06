<?php
include_once('C:\xampp\php\phpunit');


final class generalTests extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function simpleTests()
    {
        $bool = true;
        $this->assertTrue($bool);

        $number = 5;
        $this->assertTrue($number == 5);

        $letter = 'a';
        $this->assertTrue($letter == 'a');
        
        $numberArray = [1,2,3,4];
        $this->assertTrue($numberArray[0] == 1);
        $this->assertTrue(count($numberArray) == 4);
        array_pop($numberArray);
        $this->assertTrue(count($numberArray) == 3);
    }

    /** @test */
    public function filesExist()
    {
        $drawFile = file_exists('../draw.html');
        $this->assertTrue($drawFile);
        $fabricjs = file_exists('../fabric.min.js');
        $this->assertTrue($fabricjs);
        $jQuery = file_exists('../jquery.min.js');
        $this->assertTrue($jQuery);
    }

}
