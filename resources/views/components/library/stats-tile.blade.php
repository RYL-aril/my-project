@props([
    'label',
    'value',
    'sublabel' => null,
    'icon' => null,
    'variant' => 'default', // default, success, warning, danger
    'size' => 'md',         // sm, md, lg
])

@php
$variants = [
    'default' => ['border' => 'border-t-ink', 'text' => 'text-ink'],
    'success' => ['border' => '!border-t-green-600', 'text' => 'text-green-700'],
    'warning' => ['border' => '!border-t-yellow-600', 'text' => 'text-yellow-700'],
    'danger' => ['border' => '!border-t-red-600', 'text' => 'text-red-700'],
];

$sizes = [
    'sm' => ['value' => 'text-xl', 'label' => 'text-[10px]', 'sublabel' => 'text-[9px]'],
    'md' => ['value' => 'text-2xl', 'label' => 'text-[10px]', 'sublabel' => 'text-[11px]'],
    'lg' => ['value' => 'text-4xl', 'label' => 'text-xs', 'sublabel' => 'text-sm'],
];

$currentVariant = $variants[$variant] ?? $variants['default'];
$currentSize = $sizes[$size] ?? $sizes['md'];
@endphp

<div {{ $attributes->class([
    'bg-white border border-sepia-edge/40 p-6 shadow-[3px_3px_0px_rgba(44,36,32,0.05)] hover:shadow-[5px_5px_0px_rgba(44,36,32,0.1)] transition-all relative',
    $currentVariant['border'],
    'border-t-4' => true,
]) }}>
    {{-- Header with Icon --}}
    <div class="flex items-center justify-between mb-4 border-b border-dashed border-ink/20 pb-2">
        <h3 class="{{ $currentSize['label'] }} uppercase font-bold tracking-widest text-coffee font-mono">
            {{ $label }}
        </h3>
        @if($icon)
            <x-dynamic-component :component="$icon" class="w-5 h-5 text-ink/60" />
        @endif
    </div>
    
    {{-- Main Value --}}
    <div class="{{ $currentSize['value'] }} font-black {{ $currentVariant['text'] }} font-serif">
        {{ $value }}
    </div>
    
    {{-- Sublabel --}}
    @if($sublabel)
        <p class="{{ $currentSize['sublabel'] }} font-mono text-coffee/70 mt-3 uppercase tracking-wider">
            {{ $sublabel }}
        </p>
    @endif
    
    {{-- Additional Content Slot --}}
    @if($slot->isNotEmpty())
        <div class="mt-4 pt-3 border-t border-dashed border-sepia-edge/20">
            {{ $slot }}
        </div>
    @endif
</div>

{{--
Usage Examples:

Basic Stats Tile:
<x-library.stats-tile 
    label="Anggota" 
    value="1,247" 
    sublabel="Aktif"
    icon="heroicon-o-users"
/>

With Warning Variant:
<x-library.stats-tile 
    label="Terlambat" 
    value="23" 
    sublabel="Overdue"
    variant="danger"
    icon="heroicon-o-exclamation-triangle"
/>

Large Size:
<x-library.stats-tile 
    label="Total Denda" 
    value="Rp 4.750.000" 
    size="lg"
    variant="danger"
/>

With Additional Content:
<x-library.stats-tile label="Buku Dipinjam" value="156">
    <div class="text-xs text-coffee/70">+12 dari kemarin</div>
</x-library.stats-tile>
--}}
