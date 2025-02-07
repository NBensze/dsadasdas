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
                @if(auth()->check() && auth()->user()->role == 'user' || auth()->user()->role == 'admin')
                    <form action="{{ route('destination.show', $dest->id) }}" method="GET">
                        @csrf
                        <button>button amit csak user lathat</button>
                    </form>
                @endif
            </ul>
        @endforeach
</body>
</html>