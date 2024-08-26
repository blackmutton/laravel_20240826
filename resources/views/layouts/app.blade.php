<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar1.
            This is the master sidebar2.
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>