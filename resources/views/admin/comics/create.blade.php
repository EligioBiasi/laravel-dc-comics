<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create your Comics</title>
    @vite('resources/js/app.js')

</head>
    <body>
        <h1 class="text-center">
            Create a new Comics 
        </h1>
        <div class="container">
            <form action="{{route('admin.comics.store')}}" method="POST">
            @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">
                    Title
                  </label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">
                      Thumb image
                    </label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">
                      description
                    </label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">
                      Type
                    </label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">
                      price
                    </label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">
                      series
                    </label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">
                      sales date
                    </label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>

                

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">reset</button>
            </form>
        </div>
    </body>
</html>