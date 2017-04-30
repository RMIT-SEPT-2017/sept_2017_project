<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class LoginTests extends TestCase
{
    public function testLoginCorrect()
    {
        $this->visit(route('login'))
            ->type('test@gmail.com', 'email')
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

    public function testAdminLoginIncorrect()
    {
        $this->visit(route('login'))
            ->type('bo@mail.com', 'email')
            ->type('notpassword', 'password')
            ->press('Login')
            ->seePageIs('/login');
    }
    public function testLoginIncorrect()
    {
        $this->visit(route('login'))
            ->type('test@gmail.com', 'email')
            ->type('notpassword', 'password')
            ->press('Login')
            ->seePageIs('/login');
    }
    public function testLoginBlank()
    {
        $this->visit(route('login'))
            ->type('', 'email')
            ->type('', 'password')
            ->press('Login')
            ->seePageIs('/login');
    }

}
