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
        <div class="container">
            <h1 class="mb-4 text-center">Orrific Comics Table</h1>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">description</th>
                            <th scope="col">series</th>
                            <th scope="col">type</th>
                            <th scope="col">button</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($comicsList as $comic)  
                                <tr>
                                    <th scope="row">{{$comic->id}}</th>
                                    <td>{{$comic->title}}</td>
                                    <td>{{$comic->description}}</td>
                                    <td>{{$comic->series}}</td>
                                    <td>{{$comic->type}}</td>
                                    <td><a class="btn btn-warning" href="{{ route('admin.comics.show', $comic->id ) }}">View</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>