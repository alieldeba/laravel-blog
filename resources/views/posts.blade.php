<x-layout title="Posts | Blog">
    <main class="flex flex-col gap-5 py-24">
        @foreach ($posts as $post)
            <a href="/posts/{{ $post->slug }}">
                <article class="p-5 text-base bg-orange-100 shadow-lg rounded">
                    <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
                    <q class="text-gray-700"><i>{{ $post->desc }}</i></q>
                </article>
            </a>
        @endforeach
    </main>
</x-layout>
