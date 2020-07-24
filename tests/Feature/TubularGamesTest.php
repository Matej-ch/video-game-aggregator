<?php

namespace Tests\Feature;

use App\Http\Livewire\TubularGames;
use Livewire\Livewire;
use Tests\TestCase;

class TubularGamesTest extends TestCase
{
    /**
     * @test
    */
    public function the_main_page_shows_popular_games()
    {
        \Http::fake([
            'https://api-v3.igdb.com/games' => $this->fakePopularGames(),
        ]);

        Livewire::test(TubularGames::class)->assertSet('tubularGames',[])->call('loadTubularGames');
    }

    private function fakePopularGames()
    {
        \Http::response([
                /** here array with response tested*/
            ]
            ,200);
    }
}
