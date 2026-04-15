@props([
    'placeholder' => 'Cari judul atau nama penulis...',
    'value' => '',
    'name' => 'search',
    'method' => 'GET',
    'action' => null,
    'wireModel' => null,
    'debounce' => '300ms',
])

@php
$action = $action ?? request()->url();
$hasWireModel = $wireModel && function_exists('livewire');
@endphp

<form method="{{ $method }}" action="{{ $action }}" {{ $attributes->class(['relative']) }}>
    <div class="relative">
        {{-- Search Icon --}}
        <div class="absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none">
            <x-lucide-search class="w-5 h-5 text-coffee/50" />
        </div>
        
        {{-- Input Field --}}
        <input 
            type="text" 
            name="{{ $name }}"
            value="{{ !$hasWireModel ? $value : '' }}"
            placeholder="{{ $placeholder }}"
            @if($hasWireModel) wire:model.live.debounce.{{ $debounce }}="{{ $wireModel }}" @endif
            {{ $attributes->except(['placeholder', 'value', 'name', 'method', 'action', 'wireModel', 'debounce'])->class([
                'w-full pl-12 pr-4 py-3 border border-sepia-edge/40 rounded-sm bg-white/50 text-ink placeholder:text-coffee/50 italic focus:outline-none focus:border-coffee focus:ring-1 focus:ring-coffee/30 transition-all duration-200',
                'hover:bg-white/70' => true,
            ]) }}
        >
        
        {{-- Clear Button (shows when has value) --}}
        @if($hasWireModel)
            <button 
                type="button"
                x-data="{ show: false }"
                x-init="$watch('{{ $wireModel }}', value => show = value && value.length > 0)"
                x-show="show"
                x-transition
                class="absolute right-3 top-1/2 -translate-y-1/2 text-coffee/50 hover:text-ink transition-colors"
            >
                <x-lucide-x class="w-4 h-4" />
            </button>
        @endif
    </div>
    
    {{-- Additional Actions Slot --}}
    @if($slot->isNotEmpty())
        <div class="absolute right-3 top-1/2 transform -translate-y-1/2 flex items-center gap-2">
            {{ $slot }}
        </div>
    @endif
</form>

{{--
Usage Examples:

Basic Search:
<x-library.search-bar placeholder="Cari buku..." />

With Wire Model (Livewire):
<x-library.search-bar 
    wire-model="search" 
    debounce="500ms"
    placeholder="Cari berdasarkan judul..." 
/>

With Filters Slot:
<x-library.search-bar wire-model="search">
    <button type="button" class="text-xs uppercase font-bold text-coffee hover:text-ink">
        <x-lucide-filter class="w-4 h-4" />
    </button>
</x-library.search-bar>

Custom Action:
<x-library.search-bar action="/books/search" method="POST">
    <x-ui.button size="sm" type="submit">Cari</x-ui.button>
</x-library.search-bar>
--}}
