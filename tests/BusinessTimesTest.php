<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\BusinessTimesController;
use App\Http\Controllers\BookingController;
class BusinessTimes extends TestCase
{
    public function testStartBeforeEnd()
    {
        $this->assertTrue(BusinessTimesController::checkTimesMatch('9:00','15:00'));
    }
    public function testStartAfterEnd()
    {   
        $this->assertFalse(BusinessTimesController::checkTimesMatch('15:00','9:00'));
    }
    public function testValidTimes()
    {   	
        $this->assertTrue(BusinessTimesController::checkTimes('9:00','15:00'));
    }
    public function testInvalidTimes()
    {   	
        $this->assertFalse(BusinessTimesController::checkTimes('szdxfcgh','szdhxfjx'));
    }
    public function testValidDate()
    {
        //$this->assertTrue(BusinessTimesController::checkDate('2020-01-01'));
    }
    public function testInvalidDate()
    {
       // $this->assertFalse(BusinessTimesController::checkDate('1920-01-01'));
    }
}
