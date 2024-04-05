@extends('layouts.app')

@section('title', 'Aggiungi parola')

@section('content')

<header>
    <h1 class="mb-5">Inserisci una nuova parola</h1>
    @include('includes.words.form')
</header>

@endsection

@section('scripts')
<script>
   const titleField = document.getElementById('title');
   const slugField = document.getElementById('slug');
   titleField.addEventListener('blur', ()=>{
    slugField.value = titleField.value.trim().toLowerCase().split(' ').join('-');
   })
</script>
@vite('resources/js/image_preview.js')
@endsection