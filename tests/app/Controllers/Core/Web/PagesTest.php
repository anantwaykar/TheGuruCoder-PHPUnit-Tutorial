<?php

class PagesTest extends PHPUnit_Framework_TestCase
{

    public function testRenderReturnsHelloWorld()
    {

        $pages = new \Controllers\Core\Web\Pages();

        $expected = 'Hello World';

        $this->assertEquals($expected, $pages->render());

    }

    public function testReturnTrueReturnsTrue()
    {

        $pages = new \Controllers\Core\Web\Pages();

        $this->assertTrue($pages->returnTrue());

    }

    public function testReturnArrayReturnsValidArray()
    {

        $pages = new \Controllers\Core\Web\Pages();

        $this->assertTrue(is_array($pages->returnArray()));

    }

    public function testReturnArrayReturnsNonEmptyArray()
    {

        $pages = new \Controllers\Core\Web\Pages();

        $this->assertTrue((count($pages->returnArray()) > 0));

    }

    public function testReturnArrayReturnsInteger() {

         $pages = new \Controllers\Core\Web\Pages();
         $array_values = array(1,5,6,7,'1');
         $expected = 20;
         $this->assertEquals($expected, $pages->sumArray());
    }

    public function testReturnArrayReturnsZeroForString() {

         $pages = new \Controllers\Core\Web\Pages();
         $array_values = array('a','b',3);
         $expected = 3;
         $this->assertEquals($expected, $pages->sumArray());
    }

}