<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Tutores - Petshop</title>
    <!-- Tailwind CSS para estilização rápida -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
        
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Lista de Tutores Cadastrados</h1>
            <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">
                Total: {{ count($tutores) }}
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 rounded-lg overflow-hidden">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                    <tr>
                        <th class="px-6 py-3">Nome</th>
                        <th class="px-6 py-3">Contato</th>
                        <th class="px-6 py-3">Endereço</th>
                        <th class="px-6 py-3">Pets Vinculados</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tutores as $tutor)
                        <tr class="bg-white border-b hover:bg-gray-50 transition">
                            <!-- Nome e CPF -->
                            <td class="px-6 py-4 font-semibold text-gray-900">
                                <div>{{ $tutor->nome }}</div>
                                <div class="text-xs text-gray-400 font-normal">CPF: {{ $tutor->cpf }}</div>
                            </td>
                            <!-- Email e Telefone -->
                            <td class="px-6 py-4">
                                <div>{{ $tutor->telefone }}</div>
                                <div class="text-xs text-gray-400">{{ $tutor->email }}</div>
                            </td>
                            <!-- Endereço Estruturado -->
                            <td class="px-6 py-4 text-xs">
                                <div>{{ $tutor->logradouro }}, {{ $tutor->numero }}</div>
                                <div>{{ $tutor->bairro }} - {{ $tutor->cidade }}/{{ $tutor->uf }}</div>
                            </td>
                            <!-- Pets do Tutor (A mágica do relacionamento) -->
                            <td class="px-6 py-4">
                                @if($tutor->pets->count() > 0)
                                    <div class="flex flex-wrap gap-1">
                                        @foreach($tutor->pets as $pet)
                                            <span class="bg-green-100 text-green-800 text-xs px-2 py-0.5 rounded">
                                                {{ $pet->nome }} ({{ $pet->especie }})
                                            </span>
                                        @endforeach
                                    </div>
                                @else
                                    <span class="text-gray-400 italic text-xs">Nenhum pet cadastrado</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-10 text-center text-gray-500">
                                Nenhum tutor encontrado no banco de dados. Rode o Seeder!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>