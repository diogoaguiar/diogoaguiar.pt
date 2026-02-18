@props([
    'links',
])

<div class="flex items-center gap-4">
    @foreach ($links as $link)
        <a
            href="{{ $link['url'] }}"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="{{ $link['platform'] }}"
            class="text-slate-400 transition hover:text-amber-500"
        >
            <flux:icon :name="$link['icon']" variant="outline" class="size-5" />
        </a>
    @endforeach
</div>
