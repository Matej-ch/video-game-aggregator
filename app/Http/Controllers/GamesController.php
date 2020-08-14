<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GamesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $game =\Http::withHeaders(config('services.igdb'))
            ->withOptions(['body' => "fields *,cover.url,platforms.abbreviation,involved_companies.company.name,genres.name,
            websites.*,videos.*,screenshots.*,similar_games.*,similar_games.cover.url,similar_games.platforms.abbreviation;
             where slug=\"{$slug}\";"])
            ->get('https://api-v3.igdb.com/games')
            ->json();

        abort_if(!$game, 404);
        return view('show',[
            'game' => $this->formatGameForView($game[0])
        ]);
    }

    private function formatGameForView($game)
    {
        return collect($game)->merge([
            'coverImageUrl' => Str::replaceFirst('thumb','cover_big',$game['cover']['url']),
            'rating' => isset($game['rating']) ? round($game['rating'],1) : '0',
            'criticRating' => isset($game['aggregated_rating']) ? round($game['aggregated_rating'],1) : '0',
            'genres' => collect($game['genres'])->pluck('name')->implode(', '),
            'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
            'involvedCompany' => $game['involved_companies'][0]['company']['name'],
            'trailer' => "https://youtube.com/watch/{$game['videos'][0]['video_id']}",
            'screenshots' => collect($game['screenshots'])->map(static function($screenshot) {
                return [
                    'big' => Str::replaceFirst('thumb','screenshot_big',$screenshot['url']),
                    'huge' => Str::replaceFirst('thumb','screenshot_huge',$screenshot['url'])];
            })->take(9),
            'similar_games' => collect($game['similar_games'])->map(static function($game) {
                return collect($game)->merge([
                    'coverImageUrl' => Str::replaceFirst('thumb','cover_small',$game['cover']['url'] ?? ''),
                    'rating' => isset($game['rating']) ? round($game['rating'],1) : '0',
                    'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
                ]);
            })->take(6),
            'social' => [
                'website' => collect($game['websites'])->first(),
                'facebook' => collect($game['websites'])->filter(function ($website) { return Str::contains($website['url'],'facebook');})->first(),
                'twitter' => collect($game['websites'])->filter(function ($website) { return Str::contains($website['url'],'twitter');})->first(),
                'insta' => collect($game['websites'])->filter(function ($website) { return Str::contains($website['url'],'instagram');})->first(),
            ],

        ]);
    }
}
