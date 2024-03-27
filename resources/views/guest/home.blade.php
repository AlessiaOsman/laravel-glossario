@extends('layouts.app')
@section('content')
    @foreach ($words as $word)
        <div class="card my-5">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://marcolanci.it/boolean/assets/placeholder.png" class="img-fluid rounded-start"
                        alt="{{ $word->title }}" style="width: 100%;">
                </div>
                <div class="col-md-8">
                    <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                        <div>
                            <h5 class="card-title">{{ $word->title }}</h5>
                            <p class="card-text mb-3">{{ $word->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
