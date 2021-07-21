<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fumetti | @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

        {{-- Bootstrap --}}
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.css' integrity='sha512-Mg1KlCCytTmTBaDGnima6U63W48qG1y/PnRdYNj3nPQh3H6PVumcrKViACYJy58uQexRUrBqoADGz2p4CdmvYQ==' crossorigin='anonymous'/>
        {{-- css --}}
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">        
    </head>
    <body>
        {{-- Header - Nav --}}
        @include('partials.header')
        {{-- /Header - Nav --}}

        {{-- Corpo della pagina --}}
        <main class="container mt-5">
            @yield('main-content')
        </main>
        {{-- /Corpo della pagina --}}

        {{-- Footer --}}
        @include('partials.footer')
        {{-- /Footer --}}

        {{-- JS --}}
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.js' integrity='sha512-nw7zwODD4UD9u/C/CO+03s7jXvOZDomBNFX3oOq7Xv0stAyxsxhJzVlxsRTgH3AxK3sK2ijMQou2aSIaorp19g==' crossorigin='anonymous'></script>
        
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
