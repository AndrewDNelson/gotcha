@props(['route'])

<a href="{{ route($route) }}" class="block text-center p-12 border-slate-300 border-dashed border-2 rounded-lg w-full hover:border-slate-400">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-11 h-11 mx-auto align-middle text-slate-400">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
    </svg>
    <span class="font-semibold text-black mt-2">Create a new {{ $slot }}</span>
</a>