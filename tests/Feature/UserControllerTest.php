<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUsersAreCreatedOk()
    {
        //Prepare
        //Execute
        //Assert
        $response = $this->post('api/v1/user');

        $response->assertStatus(200);
    }
}
