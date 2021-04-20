<?php

namespace App\Models\Steam;

class SteamModel {

    function __construct()
    {
        $this->STEAM_API_KEY = env('STEAM_API_KEY');
    }

}