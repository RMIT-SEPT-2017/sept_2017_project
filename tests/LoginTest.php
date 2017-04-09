<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class LoginTests extends TestCase
{
    public function testLoginCorrect()
    {
        $this->visit(route('login'))
            ->type('test@mail.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->seePageIs('/home');
    }
    public function testAdminLoginCorrect()
    {
        $this->visit(route('login'))
            ->type('bo@mail.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->seePageIs('/admin');
    }

}
