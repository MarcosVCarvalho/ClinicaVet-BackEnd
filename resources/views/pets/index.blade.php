<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h1>Lista de Pets</h1>
    <a href="{{ route('pets.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Pet</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Tutor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->nome }}</td>
                <td>{{ $pet->especie }}</td>
                <td>{{ $pet->tutor->nome ?? 'Sem tutor' }}</td>
                <td>
                    <a href="{{ route('pets.show', $pet->id) }}" class="btn btn-sm btn-info">Ver</a>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>