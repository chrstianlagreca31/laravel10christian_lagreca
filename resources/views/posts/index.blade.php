<x-app-layout>
    <h2>Tutti i Post</h2>

    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    @if($post->image)
                        <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top">
                    @endif

                    <div class="card-body">
                        <h5>{{ $post->title }}</h5>

                        <p class="text-muted">
    Autore:
    <a href="{{ route('users.posts', $post->user) }}">
        {{ $post->user->name }}
    </a>
</p>


                        <p>{{ $post->content }}</p>

                        <a href="{{ route('posts.show', $post) }}" class="btn btn-primary btn-sm">
                            Leggi
                        </a>

                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">
                            Modifica
                        </a>

                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Sei sicuro?')">
                                Elimina
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
