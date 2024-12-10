<?php

namespace Tests\Feature;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertStringContainsString;

class MovieTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_show(): void
    {
        $user = User::factory()->create([
            'email' => 'test@algebra.hr'
        ]);

        $movie = Movie::factory()->create();

        $response = $this->actingAs($user)->get('/movies/1');

        $response
            ->assertStatus(200)
            ->assertJson([
                'name' => $movie->name,
                'id' => $movie->id,
                'producer' => null,
            ]);
    }

    public function test_index(): void
    {
        $user = User::factory()->create([
            'email' => 'test@algebra.hr'
        ]);

        $movie1 = Movie::factory()->create();
        $movie2 = Movie::factory()->create();
        $movie3 = Movie::factory()->create();

        $response = $this->view('movies.index', [
            'movies' => [
                $movie1,
                $movie2,
                $movie3
            ]
        ]);

        $response
            ->assertSee('Lista filmova')
            ->assertSee($movie1->name)
            ->assertSee($movie2->name)
            ->assertSee($movie3->name);
    }
}
