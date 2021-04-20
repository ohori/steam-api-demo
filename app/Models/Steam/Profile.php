<?php

namespace App\Models\Steam;

use App\Models\Steam\SteamModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class Profile extends SteamModel {

    protected $url = 'https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/';

    public function fetch($steam_id)
    {
        $response = Http::get($this->url, [
            'key' => $this->STEAM_API_KEY,
            'steamids' => $steam_id
        ]);

        $response = $response['response'];

        if ( is_null($response) || !Arr::exists($response['players'], 0) ) {
            return false;
        }

        return collect($response['players'][0]);
    }
}