<?php

namespace Tests\Feature\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardPostTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->actingAs($user)
            ->post(route('dashboard.posts.store'),[
                'title' => $this->faker->sentence(mt_rand(2,8)),
                'slug' => $this->faker->slug(),
                'excerpt' => $this->faker->paragraph(mt_rand(3,5)),
                // 'body' => '<p>'.implode('</p><p>',$this->faker->paragraphs(mt_rand(5,10))).'</p>',)
                'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p)=>"<p>$p</p>")
                        ->implode(''), 
                'category_id' => mt_rand(1,3),
                'user_id' => mt_rand(1,3)
            ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('dashboard.posts.index'));
    }
}
