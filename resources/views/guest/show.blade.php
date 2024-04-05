@extends('layouts.app')




@section('content')
<div class="box-show mt-4">

    <h1>show guest</h1>
    <section id="info-word">
        <div class="row pb-3">
            <div class="col-7">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eum porro consequuntur possimus ipsa incidunt vel ab vero voluptas voluptatibus magnam unde, totam eaque esse distinctio eveniet. Porro, perspiciatis dolor.</p>
            </div>
            <div class="col-5 ">
                <img src="{{ $word->image ? $word->printImage() : 'https://marcolanci.it/boolean/assets/placeholder.png' }}" alt="{{$word->title}}" class="img-fluid img-word-guest">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{route('guest.home')}}" class="btn btn-secondary">Torna Indietro</a>
            </div>
        </div>
    </section>
</div>
@endsection

