<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/app.js"></script>
        <script src="js/main.js"></script>

        <title>
            @yield('title', 'Par défaut')
        </title>
    </head>

    <body>
        @yield('content')
    </body>

</html>