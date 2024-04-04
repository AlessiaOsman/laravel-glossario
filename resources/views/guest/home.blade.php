@extends('layouts.app')

@section('jumbotron')
<section id="jumbotron" class="mb-5">
    <div class="row h-100 d-flex justify-content-center align-items-center">
        <div class="col-6">
            <h1 class="text-center text-light mb-5">Impara a programmare</h1>
            <form method="GET" action="{{ route('guest.home')}}">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Es: Array.." name="search"
                        value="{{$search}}">
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection


@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mb-3">Lista completa</h1>
        
            {{-- FITRLI --}}
            <form action="" method="GET" class="d-flex">
                {{-- FILTRO PER TECNOLOGIE --}}
               
                <div class="input-group mb-3">
                    <select name="technology_filter" class="form-select">
                        <option value="">Tutte le tecnologie</option>
                        
                    </select>
                    <button class="btn btn-success" type="button">Filtra</button>
                    <button class="btn btn-danger" type="button">Reset</button>
                  </div>
            </form>
       






    </div>
    @foreach ($words as $word)
        <div class="table-word">
            <div class="row align-items-center g-0">
                <div class="col-md-4 d-flex align-items-center justify-content-start">
                    <h5 class="ms-3">{{ $word->title }}</h5>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-start">
                        <div>
                            {{-- <p class="card-text mb-3">{{ $word->description }}</p> --}}
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit possimus </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="{{route('guest.show', $word->id)}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

