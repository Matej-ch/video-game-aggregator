<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViewGameTest extends TestCase
{
    /**
     * @test
     * @group network
     */
    public function the_game_page_shows_correct_game_info()
    {
        \Http::fake([
            'https://api-v3.igdb.com/games' => $this->fakeSingleGame(),
        ]);

        $response = $this->get(route('games.show','necrobarista'));

        $response->assertSuccessful();
    }

    private function fakeSingleGame()
    {
        return \Http::response([
                /** here array with response tested*/
            ]
            ,200);
    }

}
