<?php
namespace App\Controllers;
/** @test */
class cartTest extends \PHPUnit\Framework\TestCase{
    
    public function testCart(){

        $cart = new \App\Controllers\Cart;
        $result = $cart->index($POST);
        
        $this->assertEquals($result, "Test Done");
    }
}