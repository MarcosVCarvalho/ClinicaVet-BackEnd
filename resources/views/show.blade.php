<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Tutor</title>
</head>
<body>
    <h1>Tutor: {{ $tutor->nome }}</h1>
    <p>Email: {{ $tutor->email }}</p>

    <hr>

    <h3>Pets deste tutor:</h3>

    @if($tutor->pets->isEmpty())
        <p>Este tutor ainda não tem pets cadastrados.</p>
    @else
        <ul>
            @foreach($tutor->pets as $pet)
                <li>{{ $pet->nome }} - {{ $pet->especie }}</li>
            @endforeach
        </ul>
    @endif

    <br>
    <a href="{{ url()->previous() }}">Voltar</a>
</body>
</html>