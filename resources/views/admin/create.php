<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this responsive page to see the effect!</p>
</div>

<div class="container">
    <div class="row">
          <div class="col-md-6">
                <h2>Create Post</h2>
                <form action="/news" method="POST">
                      {{ csrf_field() }}
<!--                      form group-->
                      <div class="form-group">
                            <label for="image">Hero Image</label>
                            <input name="image" class="form-control" id="image" placeholder="image">
                      </div>
<!--                      Topic-->
                      <div class="form-group">
                            <label for="topic">Topic:</label>
                            <input name="topic" class="form-control" type="text" class="form-control" id="topic" placeholder="Topic">
                      </div>
<!--                      Body-->
                      <div class="form-group">
                            <label for="body">Content</label>
                            <textarea name="body" class="form-control" id="body" placeholder="Content"></textarea>
                      </div>
<!--                      Author-->
                      <div class="form-group">
                            <label for="author">Author</label>
                            <input name="author" class="form-control" id="author" placeholder="Author">
                      </div>
<!--                      types-->
                      <div class="form-group">
                            <label for="types">Types</label>
                            <select class="form-control" id="types">
                                  <option>News</option>
                                  <option>Variety</option>
                            </select>
                      </div>
                      <div class="form-group">
                            <label for="position">Position</label>
                            <textarea name="position" class="form-control" id="position" placeholder="1 or any"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                </form>
          </div>
     </div>
</div>
</body>
</html>
