<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <section class="hero is-link is-fullheight">
            <div class="hero-body has-text-centered">
                <div class="container has-text-centered">
                    <i class="fab fa-steam-symbol fa-10x"></i>
                    <div class="column is-6 is-offset-3">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input is-rounded is-large" type="text" placeholder="Find a profile">
                            <span class="icon is-small is-left">
                                <i class="fas fa-search"></i>
                            </span>
                        </p>
                    </div>
                    <button class="button is-large is-rounded is-primary">Search</button>
                </div>
            </div>
        </section>
    </body>
</html>
