<?php
namespace App\Models;
/** @test */
class UserTest extends \PHPUnit\Framework\TestCase{
    
    public function testLogin(){

        $login = new \App\models\User;
        $result = $login->login($POST);
        
        $this->assertEquals($result, "Test Done");
    }
}