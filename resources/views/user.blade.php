@extends('layouts.default')

@section('title', 'User Title')

@section('stylers')
    <link rel="stylesheet" href="/css/app.css">
@endsection

@section('content')
    {{ $user->name }} <br>
    {{ $name }}

    @if ($user->name == 'Kenya Terry')
        <h1>seu nome é Kenya Terry</h1>
    @endif

    {{ date('d/m/y') }}
@endsection