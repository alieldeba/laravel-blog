@props(['name', 'href', 'active'])

<a href="{{ $href }}"
    class="block w-full hover:bg-blue-500 focus:bg-blue-500 focus:text-white hover:text-white p-2 uppercase {{ $active ? 'bg-blue-500 text-white' : '' }}">{{ $name }}</a>
