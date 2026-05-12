@extends('layouts.default')

@section('title', 'User Title')

@section('stylers')
    <link rel="stylesheet" href="/css/app.css">
@endsection

@section('content')
    {{ $pets }} <br>
@endsection