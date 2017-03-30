<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="jumbotron text-center">
            <h1>Main Page where you can see all the things here</h1>
            <a class="btn btn-small btn-success" href="{{ URL::to('news/create') }}">Create new Nerd</a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    @foreach ($new as $id=>$value)
                        <form action="/news/{{ $value->id }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <p><b>No. </b> {{ $value->position }}</p>
                            <p><b>Topic </b> {{ $value->topic }}</p>
                            <p><b>Author </b> {{ $value->author }}</p><br>
                            <a class="btn btn-small btn-success" href="{{ URL::to('news/' . $value->id . '/edit') }}">edit</a>
                            <input class="btn btn-primary" type="submit" value="Remove">
                            <hr>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
