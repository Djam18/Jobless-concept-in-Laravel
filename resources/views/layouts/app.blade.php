<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tailwind CSS Simple Email Template Example </title>
        <link rel="stylesheet" href="{{ asset('app.css') }}">
    </head>
    <body>
        @yield('content')
        <script src="{{ asset('app.js') }}"></script>
    </body>
</html>
