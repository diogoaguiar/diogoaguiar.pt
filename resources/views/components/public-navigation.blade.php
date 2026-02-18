<flux:header container class="sticky top-0 z-50 border-b border-slate-200 bg-white/80 text-slate-700 backdrop-blur-sm">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    <flux:brand href="#" name="Diogo Aguiar" class="max-lg:hidden">
        <x-slot name="logo">
            <div class="flex size-7 shrink-0 items-center justify-center rounded-md bg-gradient-to-br from-amber-400 to-orange-500 text-sm font-bold text-white">DA</div>
        </x-slot>
    </flux:brand>

    <flux:navbar class="-mb-px max-lg:hidden">
        <flux:navbar.item href="#about">About</flux:navbar.item>
        <flux:navbar.item href="#approach">Approach</flux:navbar.item>
        <flux:navbar.item href="#services">Services</flux:navbar.item>
        <flux:navbar.item href="#contact">Contact</flux:navbar.item>
    </flux:navbar>

    <flux:spacer />
</flux:header>

<flux:sidebar sticky collapsible="mobile" class="border-r border-slate-200 bg-slate-50 lg:hidden">
    <flux:sidebar.header>
        <flux:sidebar.brand href="#" name="Diogo Aguiar">
            <x-slot name="logo">
                <div class="flex size-7 shrink-0 items-center justify-center rounded-md bg-gradient-to-br from-amber-400 to-orange-500 text-sm font-bold text-white">DA</div>
            </x-slot>
        </flux:sidebar.brand>
        <flux:sidebar.collapse />
    </flux:sidebar.header>

    <flux:sidebar.nav>
        <flux:sidebar.item href="#about" icon="user">About</flux:sidebar.item>
        <flux:sidebar.item href="#approach" icon="light-bulb">Approach</flux:sidebar.item>
        <flux:sidebar.item href="#services" icon="briefcase">Services</flux:sidebar.item>
        <flux:sidebar.item href="#contact" icon="envelope">Contact</flux:sidebar.item>
    </flux:sidebar.nav>
</flux:sidebar>
