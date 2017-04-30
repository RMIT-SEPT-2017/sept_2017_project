<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class RegisterTests extends TestCase
{
    use DatabaseTransactions;
    public function test1()
    {
        $this->visit(route('register'))
            ->type('John Smith', 'name')
            ->type('test10@mail.com', 'email')
            ->type('1', 'street_number')
            ->type('Central ave', 'route')
            ->type('Balwyn North','locality')
            ->type('VIC','administrative_area_level_1')
            ->type('Australia','country')
            ->type('3000', 'postal_code')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/booking');
    }
    public function test2()//incorrect post code
    {
        $this->visit(route('register'))
            ->type('John Smith', 'name')
            ->type('test10@mail.com', 'email')
            ->type('1', 'street_number')
            ->type('Central ave', 'route')
            ->type('Balwyn North','locality')
            ->type('VIC','administrative_area_level_1')
            ->type('Australia','country')
            ->type('30000000000000', 'postal_code')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/register');
    }
    public function test3()//incorrect email
    {
        $this->visit(route('register'))
            ->type('John Smith', 'name')
            ->type('asdfghfds', 'email')
            ->type('1', 'street_number')
            ->type('Central ave', 'route')
            ->type('Balwyn North','locality')
            ->type('VIC','administrative_area_level_1')
            ->type('Australia','country')
            ->type('3000', 'postal_code')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/register');
    }
    public function test4()//password mismatch
    {
        $this->visit(route('register'))
            ->type('John Smith', 'name')
            ->type('test10@mail.com', 'email')
            ->type('1', 'street_number')
            ->type('Central ave', 'route')
            ->type('Balwyn North','locality')
            ->type('VIC','administrative_area_level_1')
            ->type('Australia','country')
            ->type('3000', 'postal_code')
            ->type('password', 'password')
            ->type('passqwasrdtf', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/register');
    }
    public function test5()//post code letters
    {
        $this->visit(route('register'))
            ->type('John Smith', 'name')
            ->type('test10@mail.com', 'email')
            ->type('1', 'street_number')
            ->type('Central ave', 'route')
            ->type('Balwyn North','locality')
            ->type('VIC','administrative_area_level_1')
            ->type('Australia','country')
            ->type('agrs', 'postal_code')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/register');
    }
}
