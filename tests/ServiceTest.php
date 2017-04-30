<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\ServiceController;
class ServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test1()
    {
        $this->assertTrue(ServiceController::checkDuration('180'));
    }
    public function test2()
    {
        $this->assertFalse(ServiceController::checkDuration('x'));
    }
    public function test3()
    {
        $this->assertFalse(ServiceController::checkTitle('Type 1'));
    }
    public function test4()
    {
        $this->assertTrue(ServiceController::checkTitle('Type 2'));
    }


}
