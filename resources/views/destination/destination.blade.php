<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        @foreach ($Destination as $dest)
            <ul>
                <li>{{$dest->destination}}</li>
                <li>{{$dest->price}}</li>
                <li>{{$dest->departure}}</li>
            </ul>
        @endforeach
</body>
</html>