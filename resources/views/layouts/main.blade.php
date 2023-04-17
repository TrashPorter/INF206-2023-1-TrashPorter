<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://https://demo.themesberg.com/landwind/" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrashPorter | {{ $title }}</title>
    @include('layouts.partials.metaSEO')
    @include('layouts.partials.metaSocial')
    @include('layouts.partials.favicon')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/flowbite.css') }}" rel="stylesheet">

    <script defer src="{{ asset('js/flowbite.js') }}"></script>
    <script src="{{ asset('backend/flowbite/dist/flowbite.js') }}"></script>
</head>

<body>
    {{-- @include('layouts.partials.header') --}}
    <!-- Start block -->
    @yield('container')
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>