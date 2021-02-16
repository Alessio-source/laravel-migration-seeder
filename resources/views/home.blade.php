<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        @foreach ($data as $item)
            <div class="container-news">
                <h2>{{ $item->title }}</h2>
                <h3>{{ $item->subtitle }}</h3>
                <p>{{ $item->text }}</p>
                <h5>{{ $item->author }}</h5>
                <p>{{ $item->created_at }}</p>
                <hr>
            </div>
        @endforeach
    </body>
</html>