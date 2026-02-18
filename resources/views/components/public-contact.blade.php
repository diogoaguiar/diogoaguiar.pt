@props([
    'links',
])

<div class="mx-auto max-w-lg">
    <p class="mb-8 text-center text-lg text-slate-500">
        Want to work together or just say hello? Reach out through any of these channels.
    </p>

    <div class="space-y-4">
        @foreach ($links as $link)
            <a
                href="{{ $link['url'] }}"
                target="_blank"
                rel="noopener noreferrer"
                class="glow-hover group flex items-center gap-4 rounded-lg border border-slate-200 bg-white px-5 py-4 transition hover:border-amber-300"
            >
                <div class="flex size-10 items-center justify-center rounded-lg bg-gradient-to-br from-amber-100 to-orange-100">
                    <flux:icon :name="$link['icon']" variant="outline" class="size-5 text-amber-600" />
                </div>
                <span class="text-sm font-medium text-slate-700 transition group-hover:text-slate-900">
                    {{ $link['platform'] }}
                </span>
                <flux:icon name="arrow-up-right" variant="micro" class="ml-auto size-4 text-slate-400 transition group-hover:text-amber-500" />
            </a>
        @endforeach
    </div>
</div>
