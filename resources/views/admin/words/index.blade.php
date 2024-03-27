@extends('layouts.app')

@section('title', 'Glossario')

@section('content')
   
<table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Creato il</th>
            <th scope="col">Modificato il</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($words as $word)
            <tr>
                <th scope="row">{{ $word->id }}</th>
                <td>{{ $word->title }}</td>
                <td>{{ $word->slug }}</td>
                <td>{{ $word->contentTruncate('description') }}</td>
                <td>{{ $word->getFormattedDate('created_at')}}</td>
                <td>{{ $word->getFormattedDate('updated_at')}}</td>
               
                <td>
                    <div class="d-flex gap-2">
                    <a href="{{ route('admin.words.show', $word) }}" class="btn btn-sm btn-primary"><i
                            class="fa-solid fa-eye"></i></a>
                    <form action="{{ route('admin.words.destroy', $word)}}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger "><i
                                class="fa-solid fa-trash-can"></i></button>
                    </form>
                    <a class="btn btn-warning btn-sm" href="{{route('admin.words.edit', $word)}}"><i class="fa-solid fa-pencil"></i></a>
                </div>
                </td>
            </tr>
        @empty
            <tr>
                <th>Nessun progetto da mostrare</th>
            </tr>
        @endforelse

    </tbody>
</table>
  
@endsection

@section('scripts')
      
@endsection
