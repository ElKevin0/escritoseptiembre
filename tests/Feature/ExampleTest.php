<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BebidaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_ListarTodo(): void
    {
        $response = $this->get('/api/bebidas');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => [
                "id",
                "name",
                "lastname",
                "phone",
                "created_at",
                "updated_at",
                "deleted_at"
            ]
        ]);
    }
}