@props([
    'name',
    'title',
    'subtitle',
])

<section class="relative flex min-h-[80vh] items-center justify-center overflow-hidden px-6 py-24">
    <div class="absolute inset-0 bg-gradient-to-br from-amber-50 via-orange-50/50 to-white"></div>

    <div class="relative mx-auto max-w-3xl text-center">
        <p class="mb-4 text-sm font-semibold tracking-wide text-amber-600 uppercase">
            {{ $name }}
        </p>

        <h1 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
            {{ $title }}
        </h1>

        <p class="mt-6 text-lg leading-relaxed text-slate-500 sm:text-xl">
            {{ $subtitle }}
        </p>

        <div class="mt-10 flex items-center justify-center gap-4">
            <flux:button variant="primary" href="#contact">
                Get in Touch
            </flux:button>
            <flux:button variant="subtle" href="#about">
                Learn More
            </flux:button>
        </div>
    </div>
</section>
