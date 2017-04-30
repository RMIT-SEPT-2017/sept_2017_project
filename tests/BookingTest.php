<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\BookingController;
class BookingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    
    public function testStartBeforeCurrent()
    {
        $this->assertTrue(BookingController::checkPast('2010-03-01 09:00:00'));
    }
    public function testStartAfterCurrent()
    {
        $this->assertFalse(BookingController::checkPast('2110-03-01 09:00:00'));
    }
     public function testNotWithinEmployeeTime()
    {
        $this->assertTrue(BookingController::checkAvailable('2017-05-01 01:00:00','2017-05-01 02:00:00','2017-05-01',1));
    }
    public function testWithinEmployeeTime()
    {
        $this->assertFalse(BookingController::checkAvailable('2017-05-01 09:00:00','2017-05-01 09:15:00','2017-05-01',1));
    }
}
