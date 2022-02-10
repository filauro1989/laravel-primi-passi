<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <h2>Benvenuto {{ $name }} {{ $lastname }}</h2>
    <h2>{{ $name }} ha {{ $age }} anni</h2>
    <h2>{{ $name }} pratica 
        @foreach ($sport as $sport)
            {{$sport}}
        @endforeach
    </h2>
</body>
</html>