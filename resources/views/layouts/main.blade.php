<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/favicon.ico') }}" type="image/png">

    {{-- importo gli assets --}}
    @vite('resources/js/app.js')
</head>

<body>

    @include('includes.header')

    @yield('main-content')

    @include('includes.footer')


</body>

</html>
