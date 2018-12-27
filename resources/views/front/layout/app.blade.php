<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @php
        $test = 'aaaaaaaaa';
        @endphp
        <h1>
            APP top:  {{ echoTxt('acvb') }}
        </h1>
        {{-- @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
 --}}
        @include('front.child')
        
        <h1>
            APP bot: 
        </h1>
    </body>
</html>