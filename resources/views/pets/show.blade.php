@extends('layouts.default')

@section('title', 'Detalhes do Pet')

@section('content')

    <h1>Detalhes do Pet</h1>

    <hr>

    <h2>{{ $pet->nome }}</h2>

    <p>
        <strong>Espécie:</strong>
        {{ $pet->especie }}
    </p>

    <p>
        <strong>Raça:</strong>
        {{ $pet->raca }}
    </p>

    <p>
        <strong>Idade:</strong>
        {{ $pet->idade }} anos
    </p>

    <p>
        <strong>Sexo:</strong>
        {{ $pet->sexo }}
    </p>

    <p>
        <strong>Peso:</strong>
        {{ $pet->peso }} kg
    </p>

    <hr>

    <h3>Tutor</h3>

    @if ($pet->tutor)
        <p>
            <strong>Nome do Tutor:</strong>
            {{ $pet->tutor->nome }}
        </p>
    @else
        <p>Este pet não possui tutor cadastrado.</p>
    @endif

    <hr>

    <a href="{{ route('pets.index') }}">
        Voltar
    </a>

@endsection