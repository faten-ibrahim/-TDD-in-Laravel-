<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewConcertListingTest extends TestCase
{

    /** @test */
    public function a_user_can_read_all_the_concerts()
    {
        $concert=Concert::create([
            'title' => 'any title',
            'sub-title' => 'any sub title',
            'price' => 34
        ]);

        $response = $this->get('/tasks');

        $response->assertSee($concert->title);
    }
}
