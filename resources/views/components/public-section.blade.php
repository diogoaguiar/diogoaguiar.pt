@props([
    'heading' => null,
    'id' => null,
])

<section @if($id) id="{{ $id }}" @endif class="scroll-mt-20 px-6 py-20">
    <div class="mx-auto max-w-7xl">
        @if ($heading)
            <div class="mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                    {{ $heading }}
                </h2>
            </div>
        @endif

        {{ $slot }}
    </div>
</section>
