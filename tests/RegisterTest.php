<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class RegisterTests extends TestCase
{
    use DatabaseTransactions;
    public function testCorrectInfo()
    {
        $this->visit(route('register'))
            ->type('John Smith', 'name')
            ->type('test2@mail.com', 'email')
            ->type('1 Street st', 'address')
            ->type('Melbourne', 'suburb')
            ->type('3000', 'post_code')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/home');
    }
    public function testEmailUsed()
    {
        $this->visit(route('register'))
            ->type('John Smith', 'name')
            ->type('test@mail.com', 'email')
            ->type('1 Street st', 'address')
            ->type('Melbourne', 'suburb')
            ->type('3000', 'post_code')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/register');
    }
    public function testPasswordNotMatch()
    {
        $this->visit(route('register'))
            ->type('John Smith', 'name')
            ->type('test3@mail.com', 'email')
            ->type('1 Street st', 'address')
            ->type('Melbourne', 'suburb')
            ->type('3000', 'post_code')
            ->type('password', 'password')
            ->type('notpassword', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/register');
    }
    public function testIncorrectEmail()
    {
        $this->visit(route('register'))
            ->type('John Smith', 'name')
            ->type('NOTANEMAILATALLLLLLLL', 'email')
            ->type('1 Street st', 'address')
            ->type('Melbourne', 'suburb')
            ->type('3000', 'post_code')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/register');
    }
    public function testDatabaseCorrect()
    {
        $this->seeInDatabase('users', ['email' => 'test@mail.com']);
    }
    public function testDatabaseIncorrect()
    {
        $this->notSeeInDatabase('users', ['email' => 'not@mail.com']);
    }
}
