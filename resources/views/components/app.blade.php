<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #main {
            margin: 0 auto;
            width: 500px;
        }

        body{
            background-color: bisque;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div id="main">
        {{ $title }}
        
        {{ $slot }}
    </div>
</body>
</html>