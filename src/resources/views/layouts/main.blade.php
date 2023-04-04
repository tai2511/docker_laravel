<!DOCTYPE html>                             <!-- HTML 5 file -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PM - @yield('title-page')</title>
        <link rel="stylesheet" href="{{  asset('assets/css/style.css')  }}">
        @yield('css')
    </head>
    <body>
        @include('layouts.blocks.header')
        <main>
            @section('sidebar')
            @show
            <div class="content">
                @yield('content')
            </div>
        </main>
        @include('layouts.blocks.footer')
        <script src="{{  asset('assets/js/jquery.js')  }}"></script>
        @yield('js')
    </body>
</html>
