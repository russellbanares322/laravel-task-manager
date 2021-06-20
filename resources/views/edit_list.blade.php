<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/fontawesome/css/all.css') }}" />
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <title>Lara Crud</title>
</head>

<body>
    <div class="container create_cont">
        <div>
            <a href="/" class="btn btn-warning mt-5 mb-4">Return<i class="fas fa-arrow-circle-left pl-2"></i></a>
        </div>

        <form action="../update_list/{{$todo_array->id}}">
            <textarea type="text" name='name' value='{{$todo_array->name}}' placeholder="Edit task" class="form-control"></textarea>
            <button type="submit" value='save' class="btn btn-primary mt-4 mb-5">Save</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>