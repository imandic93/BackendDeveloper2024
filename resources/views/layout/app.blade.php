<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        #main {
            margin: 0 auto;
            width: 500px;
        }

        body{
            background-color: bisque;
        }
    </style>
</head>
<body>
    <div id="main">
        <h1>@yield('title')</h1>
        
        @yield('content')
    </div>
</body>
</html>