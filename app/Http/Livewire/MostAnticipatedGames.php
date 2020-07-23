<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class MostAnticipatedGames extends Component
{
    public $mostAnticipatedGames = [];

    public function loadMostAnticipatedGames()
    {
        $current = Carbon::now()->timestamp;

        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;
        $mostAnticipatedGamesUnformated = \Http::withHeaders(config('services.igdb'))
            ->withOptions(['body' => "fields name,cover.url,first_release_date, popularity,rating,rating_count,slug;
            where platforms = (48,49,130,6) & (first_release_date >= {$current} & first_release_date < {$afterFourMonths});
            sort popularity desc;
            limit 3;"])
            ->get('https://api-v3.igdb.com/games')
            ->json();

        $this->mostAnticipatedGames = $this->formatForView($mostAnticipatedGamesUnformated);
    }

    public function render()
    {
        return view('livewire.most-anticipated-games');
    }

    private function formatForView($games)
    {
        return collect($games)->map(static function ($game){
            return collect($game)->merge([
                'coverImageUrl' =>  str_replace('thumb','cover_small',$game['cover']['url']),
                'releaseDate' =>  \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y'),
            ]);
        })->toArray();
    }
}
