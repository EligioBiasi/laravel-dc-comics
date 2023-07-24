<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comics list</title>
    @vite('resources/js/app.js')
</head>
    <body>
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h1 class="mb-4 text-center">
                Comics {{$comic->title}}
            </h1>
            <img src="{{$comic->thumb}}" alt="">
            <p class="mt-4">
                {{$comic->description}}
            </p>
            
        </div>
    </body>
</html>