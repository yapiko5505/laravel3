<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Hellotest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use DatabaseMigrations;
    public function testHello()
    {
        // ダミーデータ
        factory(User::class)->create([
            'name' => 'AAA',
            'postal' => '123-1234',
            'address' => 'AAAAAAAAAAAAAAA',
            'phone' => '090-0000-0000',
            'email' => 'BBB@ccc.cc.cc',
            'todo' => 'AAAAAAA',
        ]);
        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users',[
            'name' => 'AAA',
            'postal' => '123-1234',
            'address' => 'AAAAAAAAAAAAAAA',
            'phone' => '090-0000-0000',
            'email' => 'BBB@ccc.cc.cc',
            'todo' => 'AAAAAAA',
        ]);

        // ダミーデータ
        factory(Customer::class)->create([
            'name' => 'XXX',
            'postal' => '456-7777',
            'address' => 'YYYYYYYYYYYY',
            'phone' => '090-1111-2222',
            'email' => 'YYY@aaa.aa.aa',
            'todo' => 'YYYYYYYYY',
        ]);

        factory(Customer::class, 10)->create();
        $this->assertDatabaseHas('Customer',[
            'name' => 'XXX',
            'postal' => '456-7777',
            'address' => 'YYYYYYYYYYYY',
            'phone' => '090-1111-2222',
            'email' => 'YYY@aaa.aa.aa',
            'todo' => 'YYYYYYYYY',
        ]);





    }
}
