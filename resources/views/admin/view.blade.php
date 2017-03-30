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
                        <form action="/news/{{ $news->id }}" method="post">
                            {{ csrf_field() }}
                            {{--For update--}}
                            <input type="hidden" name="_method" value="put">
                            <p><b>No. </b> <input type="number" value="{{ $news->position }}" name="position"></p>
                            <p><b>Topic </b> <input type="text" value="{{ $news->topic }}" name="topic"> </p>
                            <p><b>Content </b> <input type="" value="{{ $news->body }}" name="body"> </p>
                            <p><b>Author </b> <input type="text" value="{{ $news->author }}" name="author"> </p>
                            <p><b>Position </b> <input type="text" value="{{ $news->position }}" name="position"> </p>

                            <p><b></b> </p><br>
                            <input class="btn btn-primary" type="submit" value="Save">
                            <hr>
                        </form>
                </div>
            </div>
        </div>
    </body>
</html>
