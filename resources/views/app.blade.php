<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @inertiaHead

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="{{ asset('css/Control.FullScreen.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Control.Coordinates.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/leaflet-search.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/leaflet-search.mobile.css') }}" />

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="{{ asset('js/Control.FullScreen.js') }}"></script>
    <script src="{{ asset('js/Control.Coordinates.js') }}"></script>
    <script src="{{ asset('js/leaflet-search.js') }}"></script>
    <script src="{{ asset('js/leaflet-search-geocoder.js') }}"></script>
</head>

<body>
    @inertia
</body>

</html>