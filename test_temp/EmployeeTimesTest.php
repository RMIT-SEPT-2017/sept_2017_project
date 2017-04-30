<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\EmployeeTimesController;
class EmployeeTimes extends TestCase
{
    public function testStartBeforeEnd()
    {
        $this->assertTrue(EmployeeTimesController::checkTimesMatch('9:00','15:00'));
    }
    public function testStartAfterEnd()
    {   
        $this->assertFalse(EmployeeTimesController::checkTimesMatch('15:00','9:00'));
    }
    public function testValidTimes()
    {   	
        $this->assertTrue(EmployeeTimesController::checkTimes('9:00','15:00'));
    }
    public function testInvalidTimes()
    {   	
        $this->assertFalse(EmployeeTimesController::checkTimes('szdxfcgh','szdhxfjx'));
    }
    public function testValidEmployee()
    {
        $this->assertTrue(EmployeeTimesController::checkEmployeeId(1));
    }
    public function testInvalidEmployee()
    {
        $this->assertFalse(EmployeeTimesController::checkEmployeeId("asdfgh"));
    }
    public function testValidDate()
    {
        $this->assertTrue(EmployeeTimesController::checkDate('2020-01-01'));
    }
    public function testInvalidDate()
    {
        $this->assertFalse(EmployeeTimesController::checkDate('1920-01-01'));
    }

}
