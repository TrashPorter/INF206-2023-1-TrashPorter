<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="logo_aja" sizes="76x76" href="{{ Vite::asset('public/assets/img/logo_aja.png') }}" />
    <link rel="icon" type="image/png" href="{{ Vite::asset('public/assets/img/white_logo.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link id="pagestyle" href="{{ URL::asset('assets/css/soft-ui-dashboard-tailwind.css') }}" rel="stylesheet" />
    <title>TrashPorter | Driver</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('driver.layouts.partials.link')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @include('driver.layouts.partials.sidenav')
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        @yield('content')
    </main>
    {{-- @include('driver.layouts.partials.footer') --}}
    @include('driver.layouts.partials.script')

</body>

</html>
