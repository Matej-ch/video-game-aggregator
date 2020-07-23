<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class ComingSoonGames extends Component
{
    public $comingSoonGames = [];

    public function loadComingSoonGames()
    {
        $current = Carbon::now()->timestamp;

        $comingSoonGamesUnformated = \Http::withHeaders(config('services.igdb'))
            ->withOptions(['body' => "fields name,cover.url,first_release_date, popularity,rating,rating_count,slug;
            where platforms = (48,49,130,6) & (first_release_date >= {$current} & popularity > 5);
            sort first_release_date desc;
            limit 3;"])
            ->get('https://api-v3.igdb.com/games')
            ->json();

        $this->comingSoonGames = $this->formatForView($comingSoonGamesUnformated);
    }

    public function render()
    {
        return view('livewire.coming-soon-games');
    }

    private function formatForView(array $games)
    {
        return collect($games)->map(static function ($game){
            return collect($game)->merge([
                'coverImageUrl' => isset($game['cover']['url']) ? str_replace('thumb','cover_small',$game['cover']['url']) : '',
                'releaseDate' =>  \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y'),
            ]);
        })->toArray();
    }
}
