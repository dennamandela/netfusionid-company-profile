<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_each_company_profile_page_is_reachable_by_its_named_route(): void
    {
        foreach (['home', 'about', 'services', 'portfolio', 'contact'] as $name) {
            $this->get(route($name))->assertOk();
        }
    }

    public function test_navigation_uses_named_pages_and_marks_the_current_page(): void
    {
        $this->get(route('services'))
            ->assertOk()
            ->assertSee(route('home'), false)
            ->assertSee(route('about'), false)
            ->assertSee(route('services'), false)
            ->assertSee('aria-current="page"', false);
    }

    public function test_portfolio_separates_client_and_academic_projects(): void
    {
        $this->get(route('portfolio'))
            ->assertOk()
            ->assertSee('Ideas into digital')
            ->assertSee('Travel Booking Website')
            ->assertSee('Teras Qurban Berdikari')
            ->assertSee('ACADEMIC PROJECTS')
            ->assertSee('Proyek Mahasiswa 01')
            ->assertSee('Proyek Mahasiswa 02')
            ->assertSee('Discuss Your Project');
    }
}
