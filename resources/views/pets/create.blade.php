@extends('layouts.default')

@section('title', 'Cadastrar Pet')

@section('content')

<div class="container mt-5">

    <h1>Cadastrar Novo Pet</h1>

    <div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('pets.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nome"
                        name="nome"
                        value="{{ old('nome') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="especie" class="form-label">Especie</label>
                    <select
                        class="form-select"
                        id="especie"
                        name="especie"
                    >
                        <option value="">Selecione</option>
                        <option value="cachorro">Cachorro</option>
                        <option value="gato">Gato</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="raca" class="form-label">Raça</label>
                    <input
                        type="text"
                        class="form-control"
                        id="raca"
                        name="raca"
                        value="{{ old('raca') }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="idade" class="form-label">Idade</label>
                    <input
                        type="number"
                        class="form-control"
                        id="idade"
                        name="idade"
                        value="{{ old('idade') }}"
                        min="0"
                    >
                </div>

                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo</label>
                    <select
                        class="form-select"
                        id="sexo"
                        name="sexo"
                    >
                        <option value="">Selecione</option>
                        <option value="M">Macho</option>
                        <option value="F">Fêmea</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="peso" class="form-label">Peso (kg)</label>
                    <input
                        type="number"
                        step="0.01"
                        class="form-control"
                        id="peso"
                        name="peso"
                        value="{{ old('peso') }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="tutor_id" class="form-label">Tutor</label>

                    <select
                        class="form-select"
                        id="tutor_id"
                        name="tutor_id"
                        required
                    >
                        <option value="">Selecione um tutor</option>

                        @foreach($tutores as $tutor)
                            <option value="{{ $tutor->id }}">
                                {{ $tutor->nome }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-success">
                    Salvar
                </button>

                <a href="{{ route('pets.index') }}" class="btn btn-secondary">
                    Cancelar
                </a>

            </form>

        </div>
    </div>

</div>

@endsection