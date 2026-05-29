@extends('layouts.default')

@section('title', 'Agendamentos')

@section('content')

<div class="container">

    <!-- Cabeçalho -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="fw-bold text-dark mb-1">
                Agenda do Petshop
            </h1>

            <p class="text-muted mb-0">
                Controle de Banho, Tosa e Serviços
            </p>
        </div>

        <span class="badge bg-primary fs-6 p-3">
            {{ \Carbon\Carbon::now()->format('d/m/Y') }}
        </span>

    </div>

    <!-- Card -->
    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>Horário / Data</th>
                            <th>Pet</th>
                            <th>Tutor</th>
                            <th>Serviço</th>
                            <th>Preço</th>
                            <th>Status</th>
                            <th>Observações</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($agendamentos as $agendamento)

                            <tr>

                                <!-- Data e Hora -->
                                <td>
                                    <div class="fw-bold text-primary">
                                        {{ \Carbon\Carbon::parse($agendamento->data_horario)->format('H:i') }}
                                    </div>

                                    <small class="text-muted">
                                        {{ \Carbon\Carbon::parse($agendamento->data_horario)->format('d/m/Y') }}
                                    </small>
                                </td>

                                <!-- Pet -->
                                <td>
                                    <div class="fw-semibold">
                                        {{ $agendamento->pet->nome ?? 'Sem Pet' }}
                                    </div>

                                    <small class="text-muted">
                                        {{ $agendamento->pet->especie ?? '' }}

                                        @if(!empty($agendamento->pet->raca))
                                            • {{ $agendamento->pet->raca }}
                                        @endif
                                    </small>
                                </td>

                                <!-- Tutor -->
                                <td>
                                    <div>
                                        {{ $agendamento->pet->tutor->nome ?? 'Sem Tutor' }}
                                    </div>

                                    <small class="text-muted">
                                        {{ $agendamento->pet->tutor->telefone ?? '' }}
                                    </small>
                                </td>

                                <!-- Serviço -->
                                <td>
                                    <span class="badge bg-secondary">
                                        {{ $agendamento->servico }}
                                    </span>
                                </td>

                                <!-- Valor -->
                                <td class="fw-bold">
                                    R$ {{ number_format($agendamento->valor, 2, ',', '.') }}
                                </td>

                                <!-- Status -->
                                <td>

                                    @if($agendamento->status == 'Agendado')

                                        <span class="badge bg-primary">
                                            Agendado
                                        </span>

                                    @elseif($agendamento->status == 'Em Andamento')

                                        <span class="badge bg-warning text-dark">
                                            Em Andamento
                                        </span>

                                    @elseif($agendamento->status == 'Concluído')

                                        <span class="badge bg-success">
                                            Concluído
                                        </span>

                                    @else

                                        <span class="badge bg-danger">
                                            Cancelado
                                        </span>

                                    @endif

                                </td>

                                <!-- Observações -->
                                <td>
                                    <small class="text-muted">
                                        {{ $agendamento->observacoes ?? 'Sem observações' }}
                                    </small>
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">
                                    Nenhum agendamento marcado no sistema.
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