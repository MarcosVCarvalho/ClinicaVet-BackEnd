@extends('layouts.default')

@section('title', 'Lista de Tutores')

@section('content')

<div class="container">

    <!-- Cabeçalho -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1 class="fw-bold">
            Lista de Tutores Cadastrados
        </h1>

        <span class="badge bg-primary fs-6">
            Total: {{ count($tutores) }}
        </span>

    </div>

    <!-- Card -->
    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>Nome</th>
                            <th>Contato</th>
                            <th>Endereço</th>
                            <th>Pets Vinculados</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($tutores as $tutor)

                            <tr>

                                <!-- Nome -->
                                <td>
                                    <div class="fw-bold">
                                        {{ $tutor->nome }}
                                    </div>

                                    <small class="text-muted">
                                        CPF: {{ $tutor->cpf }}
                                    </small>
                                </td>

                                <!-- Contato -->
                                <td>
                                    <div>
                                        {{ $tutor->telefone }}
                                    </div>

                                    <small class="text-muted">
                                        {{ $tutor->email }}
                                    </small>
                                </td>

                                <!-- Endereço -->
                                <td>
                                    <div>
                                        {{ $tutor->logradouro }},
                                        {{ $tutor->numero }}
                                    </div>

                                    <small class="text-muted">
                                        {{ $tutor->bairro }}
                                        -
                                        {{ $tutor->cidade }}/{{ $tutor->uf }}
                                    </small>
                                </td>

                                <!-- Pets -->
                                <td>

                                    @if($tutor->pets->count() > 0)

                                        @foreach($tutor->pets as $pet)

                                            <span class="badge bg-success me-1 mb-1">
                                                {{ $pet->nome }}
                                                ({{ $pet->especie }})
                                            </span>

                                        @endforeach

                                    @else

                                        <span class="text-muted fst-italic">
                                            Nenhum pet cadastrado
                                        </span>

                                    @endif

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">
                                    Nenhum tutor encontrado no banco de dados.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection