<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'PetShop - MyPet')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center" href="{{ route('agendamentos.index') }}">
                <i class="bi bi-house"></i>
                PetShop - MyPet
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a @class(['nav-link','active' => request()->routeIs('agendamentos.index')]) href="{{ route('agendamentos.index') }}">
                            Início
                        </a>
                    </li>

                    <li class="nav-item">
                        <a @class(['nav-link','active' => request()->routeIs('pets.*')]) href="{{ route('pets.index') }}">
                            Pets
                        </a>
                    </li>
                    <li class="nav-item">
                        <a @class(['nav-link','active' => request()->routeIs('tutores.*')]) href="{{ route('tutores.index') }}">
                            Tutores
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>