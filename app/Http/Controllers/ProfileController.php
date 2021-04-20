<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Steam\SteamIdentifier;
use App\Models\Steam\Profile;


class ProfileController extends BaseController
{
    public function index(Request $request)
    {
        $steam_identifier = new SteamIdentifier();
        $steam_id = $steam_identifier->fetchSteamId($request->search_term);

        if( $steam_id ) {
            $profile = new Profile();
            $profile = $profile->fetch($steam_id);
        }

        if( !$steam_id || !$profile ) {
            return back()->withErrors('Steam profile was not found!');
        }

        return view('profile')->with('profile', $profile);
    }
}
