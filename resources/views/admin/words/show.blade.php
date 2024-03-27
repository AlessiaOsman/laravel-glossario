@extends('layouts.app')

@section('title', $word->slug)

@section('content')

    <div class="card my-5">
        <div class="row g-0">
        <div class="col-md-4">
        <img src="https://marcolanci.it/boolean/assets/placeholder.png" class="img-fluid rounded-start" alt="{{ $word->title }}" style="width: 100%;">
        </div>
        <div class="col-md-8">
        <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
            <div>
                <h5 class="card-title">{{ $word->title }}</h5>
                <p class="card-text mb-3">{{ $word->description }}</p>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.words.index', $word) }}" class="btn btn-primary"><i
                        class="fa-solid fa-arrow-left me-2"></i>Torna indietro</a>
                <div class="d-flex align-items-center gap-2">
                    <form action="{{ route('admin.words.destroy', $word) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger "><i
                                class="fa-solid fa-trash-can me-2"></i>Elimina</button>
                    </form>
                    <a class="btn btn-warning" href="{{ route('admin.words.edit', $word) }}"><i
                            class="fa-solid fa-pencil me-2"></i>Modifica</a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
@endsection
@section('scripts')
    @vite('resources/js/delete_confirmation.js')
@endsection
