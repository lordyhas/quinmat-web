<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unsubscribe news letter {{config('app.name')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Vous êtes désabonné du newsletter</p>
                </div>

                <div class="col">
                    <p>Vous vous êtes désabonné de la newsletter par erreur</p>
                    <a href="#">Se réabonner</a>
                </div>
            </div>


        </div>
    </body>
</html>
