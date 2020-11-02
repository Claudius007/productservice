<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // public function testProductsList()
    //  {
    //      $this->get(route('products'))
    //           ->assertResponseOK();
    // }
    // public function testProductsList()
    // {
    //     $response = $this->get('products');

    //     $response->assertStatus(200);
    // }

}