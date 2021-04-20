@extends('layouts.app')

 <section class="hero is-link is-fullheight">
    <div class="hero-body has-text-centered">
        <div class="container has-text-centered">
            <p class="has-text-weight-bold is-size-1 has-text-primary">{{ $profile->get('personaname') }}</p>
            <p class="subtitle"><span class="tag is-primary">{{ $profile->get('steamid') }}</span></p>
            <div class="columns is-flex is-centered">
                <figure class="image is-128x128">
                    <img class="is-rounded" src="{{ $profile->get('avatarfull') }}"/>
                </figure>
            </div>
            <a href="{{ Route('index') }}" class="button is-rounded is-primary">Back</a>
        </div>
    </div>
</section>