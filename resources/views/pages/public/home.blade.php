@php
    $contentLoader = app(\App\Services\ContentLoader::class);
    $home = $contentLoader->load('home');
    $about = $contentLoader->load('about');
    $services = $contentLoader->load('services');
    $contact = $contentLoader->load('contact');
@endphp

<x-layouts.public :title="$home['meta']['title']" :description="$home['meta']['description']">
    <x-public-hero
        :name="$home['meta']['title']"
        :title="$home['meta']['hero_title']"
        :subtitle="$home['meta']['hero_subtitle']"
    />

    <x-public-section heading="About" id="about">
        <x-markdown-content :content="$about['html']" />
    </x-public-section>

    <x-public-section heading="Approach" id="approach">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($home['meta']['highlights'] as $highlight)
                <x-public-service-card
                    :icon="$highlight['icon']"
                    :title="$highlight['title']"
                    :description="$highlight['text']"
                />
            @endforeach
        </div>
    </x-public-section>

    <x-public-section heading="Services" id="services">
        <div class="grid gap-6 sm:grid-cols-2">
            @foreach ($services['meta']['services'] as $service)
                <x-public-service-card
                    :icon="$service['icon']"
                    :title="$service['title']"
                    :description="$service['description']"
                />
            @endforeach
        </div>
    </x-public-section>

    <x-public-section heading="Contact" id="contact">
        <x-public-contact :links="$contact['meta']['links']" />
    </x-public-section>
</x-layouts.public>
