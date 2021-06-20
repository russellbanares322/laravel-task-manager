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
  <div class="container">
    <div>
      <a href="create" class="btn btn-primary mb-3 mt-4">Create Task<i class="fas fa-plus-circle pl-2"></i></a>
    </div>

    <div class="col-lg-12 d-none d-sm-none d-md-none d-lg-block">
      <div class="row mn_row">
        <div class="col-lg-3 mb-4">Id</div>
        <div class="col-lg-3 mb-4">Task</div>
        <div class="col-lg-3 mb-4">Created at</div>
        <div class="col-lg-3 mb-4">Action</div>
      </div>
    </div>

    @foreach($todo_array as $ta)


    <div class="col-lg-12 pb-4 mt-4 main_content">
      <div class="card border-dark">
        <div class="card-body card_bdy  shadow p-3 rounded">
          <div class="row sn_row">
            <div class="col-lg-3"><strong>{{$ta->id}}</strong></div>
            <div class="col-lg-3"><strong>{{$ta->name}}</strong></div>
            <div class="col-lg-3"><strong>{{$ta->updated_at}}</strong></div>
            <div class="col-lg-3"><a href="delete/{{$ta->id}}" class="btn btn-danger">Delete<i class="fas fa-trash pl-2"></i></a> <a href="edit/{{$ta->id}}" class="btn btn-primary ml-1">Edit<i class="fas fa-edit pl-2"></i></a></div>

          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>