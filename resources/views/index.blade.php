@extends('layouts.app')

<form action="{{ Route('profile') }}">
    <section class="hero is-link is-fullheight">
        <div class="hero-body has-text-centered">
            <div class="container has-text-centered">
                @if( $errors->isNotEmpty() )
                    @include('components.error')
                @endif
                <i class="fab fa-steam-symbol fa-10x has-text-primary"></i>
                <div class="column is-6 is-offset-3">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input is-rounded is-large" type="text" placeholder="Find a profile" name="search_term">
                        <span class="icon is-small is-left">
                            <i class="fas fa-search"></i>
                        </span>
                    </p>
                </div>
                <div class="column is-2 is-offset-5">
                    <button class="button is-large is-rounded is-primary is-fullwidth" type="submit">Search</button>
                </div>
            </div>
        </div>
    </section>
</form>