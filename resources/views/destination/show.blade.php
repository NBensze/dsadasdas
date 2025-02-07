<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($dest as $des)
        <ul>
        <li>{{$des->destination}}</li>
                <li>{{$des->price}}</li>
                <li>{{$des->departure}}</li>
        </ul>

    @endforeach
</body>
</html>