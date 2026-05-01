<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{ $user->name }} <br>
    {{ $name }}
    @if ($user->name == 'Kenya Terry')
        <h1>seu nome é Kenya Terry</h1>
    @endif

    {{ date('d/m/y') }}
</body>
</html>