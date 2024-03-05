@props(['categories', 'currentCategory'])

<div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
    <div x-data="{ show: false }" class="py-2 pl-3 pr-9 text-sm font-semibold w-50 text-left inline-flex min-w-32 w-full">
        <button @click="show = !show" @click.away="show = false"
            class="w-full uppercase text-left">{{ $currentCategory->name ?? 'Categories' }}</button>

        <div x-show="show"
            class="text-left absolute bg-gray-100 rounded-xl mt-8 py-3 w-full left-0 text-sm shadow-xl z-50 max-h-52 overflow-y-scroll">
            <x-dropdown-item name="all" href="/" :active="false" />
            @foreach ($categories as $category)
                <x-dropdown-item :name="$category->name" href="/categories/{{ $category->slug }}" :active="isset($currentCategory) && $category->is($currentCategory)" />
            @endforeach
        </div>

        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
            height="22" viewBox="0 0 22 22">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                </path>
                <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                </path>
            </g>
        </svg>
    </div>

</div>
