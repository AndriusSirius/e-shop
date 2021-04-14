<x-app-layout>
    <section class="container mx-auto my-40 ">
        @if ($productsquery->isNotEmpty())
            @foreach ($productsquery as $post)
                <div class="post-list">
                    <p>{{ $post->title }}</p>
                    <img src="{{ $post->image }}">
                </div>
            @endforeach
        @else
            <div>
                <h2>No posts found</h2>
            </div>
        @endif
    </section>
</x-app-layout>
