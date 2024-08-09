<a {{ $attributes }}
    class="{{ request()->fullUrlIs(url($href)) ? 'bg-zinc-900 text-white' : 'text-zinc-300 hover:bg-zinc-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">{{ $slot }}</a>
