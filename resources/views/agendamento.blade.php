<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos do Dia - Petshop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-7xl mx-auto">
        
        <!-- Cabeçalho -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Agenda do Petshop</h1>
                <p class="text-gray-600 font-medium">Controle de Banho, Tosa e Serviços</p>
            </div>
            <span class="bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg shadow text-sm">
                {{ \Carbon\Carbon::now()->format('d/m/Y') }}
            </span>
        </div>

        <!-- Tabela / Lista de Agendamentos -->
        <div class="bg-white rounded-lg shadow-md p-6 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th class="px-6 py-3">Horário / Data</th>
                            <th class="px-6 py-3">Pet (Espécie)</th>
                            <th class="px-6 py-3">Tutor / Contato</th>
                            <th class="px-6 py-3">Serviço</th>
                            <th class="px-6 py-3">Preço</th>
                            <th class="px-6 py-3 text-center">Status</th>
                            <th class="px-6 py-3">Observações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($agendamentos as $agendamento)
                            <tr class="bg-white border-b hover:bg-gray-50 transition">
                                <!-- Data e Hora -->
                                <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                    <div class="text-blue-600 text-base">{{ \Carbon\Carbon::parse($agendamento->hora)->format('H:i') }}</div>
                                    <div class="text-xs text-gray-400 font-normal">{{ \Carbon\Carbon::parse($agendamento->data)->format('d/m/Y') }}</div>
                                </td>

                                <!-- Pet -->
                                <td class="px-6 py-4 font-medium text-gray-900">
                                    <div class="text-base">{{ $agendamento->pet->nome }}</div>
                                    <div class="text-xs text-gray-400 font-normal">
                                        {{ $agendamento->pet->especie }} 
                                        @if($agendamento->pet->raca) • {{ $agendamento->pet->raca }} @endif
                                    </div>
                                </td>

                                <!-- Tutor (Navegação em cadeia: Agendamento -> Pet -> Tutor) -->
                                <td class="px-6 py-4">
                                    <div class="text-gray-700 font-medium">{{ $agendamento->pet->tutor->nome }}</div>
                                    <div class="text-xs text-gray-400">{{ $agendamento->pet->tutor->telefone }}</div>
                                </td>

                                <!-- Serviço -->
                                <td class="px-6 py-4">
                                    <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-1 rounded border border-purple-200">
                                        {{ $agendamento->servico }}
                                    </span>
                                </td>

                                <!-- Valor -->
                                <td class="px-6 py-4 font-bold text-gray-900">
                                    R$ {{ number_format($agendamento->valor, 2, ',', '.') }}
                                </td>

                                <!-- Status Dinâmico -->
                                <td class="px-6 py-4 text-center">
                                    @if($agendamento->status == 'Agendado')
                                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-1 rounded-full">Agendado</span>
                                    @elseif($agendamento->status == 'Em Andamento')
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-1 rounded-full">Em Andamento</span>
                                    @elseif($agendamento->status == 'Concluído')
                                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded-full">Concluído</span>
                                    @else
                                        <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 rounded-full">Cancelado</span>
                                    @endif
                                </td>

                                <!-- Observações -->
                                <td class="px-6 py-4 text-xs max-w-xs truncate text-gray-400 italic" title="{{ $agendamento->observacoes }}">
                                    {{ $agendamento->observacoes ?? 'Sem observações' }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-12 text-center text-gray-500 bg-gray-50">
                                    Nenhum agendamento marcado no sistema.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>