<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Items</title>

            <link href="./welcome.css" rel="stylesheet" type="text/css" />

        </head>
        <body>
            @foreach ($item as $items)
            <p class="title m-b-md">{{$item}}</p>
            @endforeach
        </body>
</html>