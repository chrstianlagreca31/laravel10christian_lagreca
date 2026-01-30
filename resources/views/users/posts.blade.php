<x-app-layout>
    <h2>Post di {{ $user->name }}</h2>

    <div class="row">
        @forelse($posts as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>{{ $post->title }}</h5>
                        <p>{{ $post->content }}</p>

                        <a href="{{ route('posts.show', $post) }}"
                           class="btn btn-primary btn-sm">
                            Leggi
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p>Nessun post pubblicato.</p>
        @endforelse
    </div>
</x-app-layout>
