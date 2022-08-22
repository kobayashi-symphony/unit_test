<?php

use PHPUnit\Framework\TestCase;

use App\User;

class UserTest extends TestCase
{
    protected $user;
    protected function setUp():void
    {
        $this->user = new User;
    }
    protected function tearDown():void
    {
        unset($this->user);
    }
    public static function setUpBeforeClass():void
    {
    }
    public static function tearDownAfterClass():void
    {
    }
    /** 
     * @covers User::getFullName
     */
    public function testReturnsFullName()
    {
        
        $this->user->first_name = "Teresa";
        $this->user->last_name = "Green";
        
        $this->assertEquals('Teresa Green', $this->user->getFullName());
    }
    /**
     * @test
     */
    public function これもテスト()
    {
        $this->user->first_name = "";
        $this->user->last_name = "";
        $this->assertEquals('', $this->user->getFullName());
    }
}