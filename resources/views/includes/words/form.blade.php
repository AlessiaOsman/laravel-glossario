@if ($word->exists)
    <form action="{{ route('admin.words.update', $word) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @else
        <form action="{{ route('admin.words.store') }}" method="POST" enctype="multipart/form-data">
@endif


@csrf

<div class="row mb-5">
    <div class="col-6">
        <div class="mb-3">
            <label for="title" class="form-label">Parola chiave</label>
            <input type="text"
                class="form-control @error('title') is-invalid
              @elseif (old('title', '')) is-valid 
            @enderror"
                id="title" name="title" value="{{ old('title', $word->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control " id="slug"
                value="{{ Str::slug(old('title', $word->title)) }}" disabled>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea
                class="form-control @error('description') is-invalid
            @elseif (old('description', '')) is-valid 
          @enderror"
                id="description" name="description" rows="10">{{ old('description', $word->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="url" class="form-label">Indirizzo http</label>
            <input type="url"
                class="form-control @error('url') is-invalid
            @elseif (old('url', '')) is-valid 
          @enderror"
                id="url" name="url" value="{{ old('url', $word->url) }}">
            @error('url')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="mt-3">
            @foreach ( $tags as $tag )
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="{{"tech-$tag->label"}}" name='tags[]' value="{{$tag->id}}" 
                @if (in_array($tag->id, old('tags', $prev_tag ?? []))) checked @endif>
                <label class="form-check-label" for="{{"tech-$tag->label"}}">{{$tag->label}}</label>
              </div>
            @endforeach    
        </div>
        @error('technologies')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="col-11">
        <div class="my-3">
            <label for="image" class="form-label">Immagine</label>
            <div @class(['form-control', 'd-flex', 'd-none' => !$word->image])  id='previous-image-field'>
                {{-- gioacchino il bordoooo --}}
                <button class="btn btn-outline-secondary w-25 me-1" type="button" id="change-image-button">Cambia
                    Immagine</button>
                <input type="text" class="form-control" value="{{ old('image', $word->image) }}" disabled>
            </div>
            <input type="file"
                class="form-control @if ($word->image) d-none @endif @error('image') is-invalid @elseif (old('image', '')) is-valid @enderror"
                name='image' id="image">
        </div>
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @else
            <div class="form-text">Carica un file immagine</div>
        @enderror
    </div>
    <div class="col-1 d-flex justify-content-center align-items-center">
        <div>
            <img src="{{ old('image', $word->image) ? $word->printImage() : 'https://marcolanci.it/boolean/assets/placeholder.png' }}"
                class="img-fluid" alt="{{ $word->image ? $word->title : 'preview' }}" id='preview'>
        </div>
    </div>


</div>
<div class="d-flex align-items-center justify-content-between">
    <a href="{{ route('admin.words.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left me-2"></i>Torna
        indietro</a>
    <div class="align-items-center d-flex gap-2">
        <button class="btn btn-secondary" type="reset"><i class="fa-solid fa-eraser me-2"></i>Svuota i campi</button>
        <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk me-2"></i>Salva</button>

    </div>
</div>
</form>
