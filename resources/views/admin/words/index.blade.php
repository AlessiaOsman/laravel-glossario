@extends('layouts.app')

@section('title', 'Glossario')

@section('content')

    <table class="table mt-5">
        <thead>
            <tr class="align-middle text-center">
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Creato il</th>
                <th scope="col">Modificato il</th>
                <th>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.words.create') }}" class="btn btn-success">
                            <i class="fas fa-plus me-2"></i>Aggiungi Termine
                        </a>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($words as $word)
                <tr class="align-middle text-center">
                    <th scope="row">{{ $word->id }}</th>
                    <td>{{ $word->title }}</td>
                    <td>{{ $word->slug }}</td>
                    <td>{{ $word->contentTruncate('description') }}</td>
                    <td>{{ $word->getFormattedDate('created_at') }}</td>
                    <td>{{ $word->getFormattedDate('updated_at') }}</td>

                    <td>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.words.show', $word) }}" class="btn btn-sm btn-primary"><i
                                    class="fa-solid fa-eye"></i></a>


                            <form action="{{ route('admin.words.destroy', $word->id) }}" method="POST" class="delete-form"
                                data-bs-toggle="modal" data-bs-target="#modal">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger "><i
                                        class="fa-solid fa-trash-can"></i></button>
                            </form>


                            <a class="btn btn-warning btn-sm" href="{{ route('admin.words.edit', $word) }}"><i
                                    class="fa-solid fa-pencil"></i></a>

                            
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

    @if ($words->hasPages())
    {{$words->links()}}    
        
    @endif

@endsection

@section('scripts')

    {{-- MODALE --}}
    @vite('resources/js/modal.js')

@endsection
