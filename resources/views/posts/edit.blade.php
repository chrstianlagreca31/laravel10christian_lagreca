<x-app-layout>
    <h2>Modifica Post</h2>

    <form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control"
                   value="{{ old('title', $post->title) }}">
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Contenuto</label>
            <textarea name="content" class="form-control" rows="5">{{ old('content', $post->content) }}</textarea>
            @error('content') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine</label>
            <input type="file" name="image" class="form-control">
        </div>

        @if($post->image)
            <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mb-3" width="200">
        @endif

        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
</x-app-layout>
