@props([
    'icon',
    'title',
    'description',
])

<div class="glow-hover group rounded-xl border border-slate-200 bg-white p-6 transition hover:border-amber-300">
    <div class="mb-4 flex size-10 items-center justify-center rounded-lg bg-gradient-to-br from-amber-100 to-orange-100">
        <flux:icon :name="$icon" variant="outline" class="size-5 text-amber-600" />
    </div>

    <h3 class="text-lg font-semibold text-slate-900">{{ $title }}</h3>
    <p class="mt-2 text-sm leading-relaxed text-slate-500">{{ $description }}</p>
</div>
