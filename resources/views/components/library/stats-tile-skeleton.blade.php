@props([
    'label' => 'Memuat...',
])

<div {{ $attributes->class(['bg-white border border-sepia-edge/40 p-6 shadow-[3px_3px_0px_rgba(44,36,32,0.05)] rounded-sm animate-pulse']) }}>
    {{-- Header Placeholder --}}
    <div class="flex items-center justify-between mb-4 border-b border-dashed border-ink/10 pb-2">
        <div class="h-3 bg-sepia-edge/10 rounded-sm w-24"></div>
        <div class="w-5 h-5 bg-sepia-edge/10 rounded-sm"></div>
    </div>
    
    {{-- Value Placeholder --}}
    <div class="h-8 bg-sepia-edge/20 rounded-sm w-3/4 mb-3"></div>
    
    {{-- Sublabel Placeholder --}}
    <div class="h-3 bg-sepia-edge/10 rounded-sm w-1/2"></div>
</div>

{{--
Usage Examples:

Single Skeleton:
<x-library.stats-tile-skeleton />

Grid Loading State:
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
    @for($i = 0; $i < 6; $i++)
        <x-library.stats-tile-skeleton />
    @endfor
</div>
--}}
