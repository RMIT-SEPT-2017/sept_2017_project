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
}
