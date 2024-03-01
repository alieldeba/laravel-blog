<x-layout title="{{ $post->title }} | Blog">
    <article class="py-24 text-base">
        <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
        <span>
            Author:
            <a href="/authors/{{ $post->author->username }}" class="text-indigo-600">
                {{ $post->author->name }}
            </a>
        </span>
        <br>
        <span>
            Category:
            <a href="/categories/{{ $post->category->slug }}" class="text-indigo-600">
                {{ $post->category->name }}
            </a>
        </span>
        <br>
        <p class="text-gray-700 mt-5">{!! $post->content !!}</p>
    </article>
</x-layout>
