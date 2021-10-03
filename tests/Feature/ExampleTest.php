<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHello()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/customer/list');
        $response->assertStatus(302);

        $user = factory()->create();
        $response = $this->actingAs($user)->withSession(['list' => false])->get('/');
        $response->assertStatus(200);

        $response = $this->get('/no_route');
        $response->assertStatus(404);
    }
}
