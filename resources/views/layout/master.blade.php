<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'admin tertinggi')</title>

    {{-- CSS utama --}}
    <link rel="stylesheet" href="{{ asset('style/styleside.css') }}">
    {{-- Boxicons --}}
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">

</head>

<body>
    <div class="main-container">
        {{-- Sidebar --}}
        @include('layout.sidebar')

        {{-- Konten utama --}}
        <section class="home">
            @yield('content')
        </section>
    </div>

    {{-- Script --}}
    <script src="{{ asset('js/scriptside.js') }}"></script>
</body>

</html>