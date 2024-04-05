@extends('layouts.app')

@section('title', 'Aggiungi parola')

@section('content')

<header>
    <h1 class="my-3">Inserisci una nuova parola</h1>
    @include('includes.words.form')
</header>

@endsection

@section('scripts')

@vite('resources/js/image_preview.js')
@vite('resources/js/slug.js')
@endsection