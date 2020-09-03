<?php

namespace Tests\Feature;

use App\Http\Livewire\SearchDropdown;
use Livewire\Livewire;
use Tests\TestCase;

class SearchDropdownTest extends TestCase
{
    /**
     * @test
    */
    public function the_search_dropdown_searches_for_games()
    {
        \Http::fake([
            'https://api-v3.igdb.com/games' => $this->fakeSearchGames(),
        ]);

        Livewire::test(SearchDropdown::class)
            ->assertDontSee('zelda')
            ->set('search','zelda')
            ->assertSee('The legend of zela');
    }

    private function fakeSearchGames()
    {
        \Http::response([
                /** here array with response tested*/
            ]
            ,200);
    }
}
