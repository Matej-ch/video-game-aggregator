<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class TubularGames extends Component
{
    public $tubularGames = [];

    public function loadTubularGames()
    {
        $tubularGamesUnformated = \Cache::remember('tubular',60, static function () {
            $before = Carbon::now()->subMonths(2)->timestamp;
            $after = Carbon::now()->addMonths(2)->timestamp;
            return \Http::withHeaders(config('services.igdb'))
                ->withOptions(['body' => "fields name,cover.url,first_release_date, popularity,platforms.abbreviation,rating,slug;
            where platforms = (48,49,130,6) & (first_release_date >= {$before} & first_release_date < {$after});
            sort popularity desc;
            limit 10;"])
                ->get('https://api-v3.igdb.com/games')
                ->json();
        });

        $this->tubularGames = $this->formatForView($tubularGamesUnformated);
    }

    public function render()
    {
        return view('livewire.tubular-games');
    }

    private function formatForView($games)
    {
        return collect($games)->map(static function ($game){
            return collect($game)->merge([
                'coverImageUrl' =>  str_replace('thumb','cover_big',$game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating'],1) .'%' : 'N',
                'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', ')
            ]);
        })->toArray();
    }
}
