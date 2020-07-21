<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class RecentlyReviewedGames extends Component
{

    public $recentlyReviewedGames = [];

    public function loadRecentGames()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;

        $current = Carbon::now()->timestamp;
        $this->recentlyReviewedGames = \Http::withHeaders(config('services.igdb'))
            ->withOptions(['body' => "fields name,cover.url,first_release_date, popularity,platforms.abbreviation,rating,rating_count,summary;
            where platforms = (48,49,130,6) & (first_release_date >= {$before} & first_release_date < {$current} & rating_count > 5);
            sort popularity desc;
            limit 3;"])
            ->get('https://api-v3.igdb.com/games')
            ->json();
    }

    public function render()
    {
        return view('livewire.recently-reviewed-games');
    }
}
