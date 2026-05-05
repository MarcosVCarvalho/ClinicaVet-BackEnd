<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset básico */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Banner */
        #banner {
            height: 100px;
            background: linear-gradient(135deg, #1408f7, #06b6d4);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        
        #banner h1 {
            font-size: 3rem;
            margin: 0;
        }
        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title', 'Meu Layout')</title>
</head>
<body>
    @yield('stylers')

    <div id="banner">
        <h1>Meu layout</h1>
    </div>
    @yield('content')

</body>
</html>