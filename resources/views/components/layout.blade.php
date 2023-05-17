<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? 'Rapido.es' }}</title>
    @livewireStyles
    @vite(['resources/css/app.css'])
    {{ $style ?? '' }}

</head>
<body>
<x-nav />
{{ $slot }}
<x-footer />

@livewireScripts
@vite(['resources/js/app.js'])
{{ $script ?? '' }}
</body>
</html>
