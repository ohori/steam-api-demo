<?php

namespace App\Models\Steam;

use App\Models\Steam\SteamModel;
use Illuminate\Support\Facades\Http;

class SteamIdentifier extends SteamModel {

    protected $url = 'https://api.steampowered.com/ISteamUser/ResolveVanityURL/v1/';

    public function fetchSteamId($search_term)
    {
        if ( $this->isSteamId($search_term) ) {
            return $search_term;
        }

        $response = Http::get($this->url, [
            'key' => $this->STEAM_API_KEY,
            'url_type' => 1,
            'vanityurl' => $search_term
        ]);

        $response = $response['response'];

        if ( is_null($response) || $response['success'] !== 1 ) {
            return false;
        }

        return $response['steamid'];
    }

    private function isSteamId($search_term) : bool
    {
        return is_numeric($search_term) && strlen($search_term) == 17;
    }
}