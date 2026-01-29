<x-app-layout>
    <div class="container">
        <h2>{{ $post->title }}</h2>

        @if($post->image)
            <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mb-3">
        @endif

        <p>{{ $post->content }}</p>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary">
            Torna indietro
        </a>
    </div>
</x-app-layout>
