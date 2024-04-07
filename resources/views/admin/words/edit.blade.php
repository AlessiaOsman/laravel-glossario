@extends('layouts.app')

@section('title', 'Modifica Parola')

@section('content')

<header>
    <h1 class="my-3">Modifica Parola</h1>
    @include('includes.words.form')
</header>

@endsection

@section('scripts')
@vite('resources/js/image_preview.js')
@endsection