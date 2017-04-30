<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\EmployeeController;
class Employee extends TestCase
{
    public function testValidName1()
    {
        $this->assertTrue(EmployeeController::checkName("Jacob de Bruyn"));
    }
    public function testValidName2()
    {
        $this->assertTrue(EmployeeController::checkName("Jacob de-Bruyn"));
    }
    public function testValidName3()
    {
        $this->assertTrue(EmployeeController::checkName("Jacob D'Angelo"));
    }
    public function testInvalidName1()
    {
        $this->assertFalse(EmployeeController::checkName("12350DDDEGTNBD1035!@#$%^&*"));
    }
    public function testInvalidName2()
    {
        $this->assertFalse(EmployeeController::checkName("!@#$%^&*"));
    }
    public function testValidEmail()
    {
        $this->assertTrue(EmployeeController::checkEmail("test@mail.com"));
    }
    public function testInvalidEmail()
    {
        $this->assertFalse(EmployeeController::checkEmail("12350DDDEGTNBD1035!"));
    }
 

}
