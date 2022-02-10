<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="navbar">
            <ul>
                <li>
                    <a href="{{ route('contacts') }}">Contatti</a>
                </li>
                <li>
                    <a href="{{ route('info') }}">Info</a>
                </li>
            </ul>
        </div>
    </header>

    <h1>Home Page</h1>
    <h2>Benvenuto {{ $name }} {{ $lastname }}</h2>
    <h2>{{ $name }} ha {{ $age }} anni</h2>
    @if (isset($sport))
        <h2>{{ $name }} pratica 
            @foreach ($sport as $sport)
                {{$sport}}
            @endforeach
        </h2>
    @endif
</body>
</html>