<footer class="border-t border-slate-200 py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col items-center gap-6 sm:flex-row sm:justify-between">
            <p class="text-sm text-slate-400">&copy; {{ date('Y') }} Diogo Aguiar</p>

            <x-social-links :links="[
                ['platform' => 'GitHub', 'url' => 'https://github.com/diogoaguiar', 'icon' => 'github'],
                ['platform' => 'LinkedIn', 'url' => 'https://linkedin.com/in/diogoaguiar-pt', 'icon' => 'linkedin'],
                ['platform' => 'Email', 'url' => 'mailto:diogo@dg7.pt', 'icon' => 'envelope'],
            ]" />
        </div>
    </div>
</footer>
