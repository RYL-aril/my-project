@props([
    'title' => 'Memuat...',
])

<div {{ $attributes->class(['group relative bg-white/40 backdrop-blur-sm border border-sepia-edge/30 p-4 shadow-sm rounded-sm overflow-hidden flex flex-col h-full animate-pulse']) }}>
    {{-- Cover Placeholder --}}
    <div class="relative aspect-[3/4] overflow-hidden shadow-md border-l-4 border-ink/10 mb-3 bg-sepia-edge/10">
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    </div>
    
    {{-- Info Placeholders --}}
    <div class="space-y-2 flex-1">
        <div class="h-3 bg-sepia-edge/10 rounded-sm w-1/4"></div>
        <div class="h-4 bg-sepia-edge/20 rounded-sm w-3/4"></div>
        <div class="h-3 bg-sepia-edge/10 rounded-sm w-1/2"></div>
    </div>
    
    {{-- Actions Placeholder --}}
    <div class="mt-4 pt-3 border-t border-sepia-edge/20 flex items-center justify-between gap-2">
        <div class="h-8 bg-sepia-edge/10 rounded-sm w-24"></div>
        <div class="h-8 bg-sepia-edge/20 rounded-sm w-20"></div>
    </div>
</div>

{{--
Usage Examples:

Single Skeleton:
<x-library.book-card-skeleton />

Grid Loading State:
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @for($i = 0; $i < 8; $i++)
        <x-library.book-card-skeleton />
    @endfor
</div>

With Custom Title:
<x-library.book-card-skeleton title="Loading books..." />
--}}
