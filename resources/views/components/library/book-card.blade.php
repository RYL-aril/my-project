@props([
    'title',
    'author',
    'cover_url' => null,
    'category' => null,
    'available_stock' => 0,
    'total_stock' => 0,
    'status' => null, // available, low_stock, out_of_stock, borrowed
    'href' => null,
])

@php
// Determine status if not provided
if (!$status) {
    if ($available_stock == 0) {
        $status = 'out_of_stock';
    } elseif ($available_stock <= 2) {
        $status = 'low_stock';
    } else {
        $status = 'available';
    }
}

$statusConfig = [
    'available' => ['label' => "Tersedia {$available_stock}", 'class' => 'text-green-800'],
    'low_stock' => ['label' => "Sisa {$available_stock}", 'class' => 'text-yellow-800'],
    'out_of_stock' => ['label' => 'Habis', 'class' => 'text-red-800'],
    'borrowed' => ['label' => 'Dipinjam', 'class' => 'text-blue-800'],
];

$currentStatus = $statusConfig[$status] ?? $statusConfig['available'];
$tag = $href ? 'a' : 'div';
@endphp

<{{ $tag }} 
    @if($href) href="{{ $href }}" @endif
    {{ $attributes->class(['group relative bg-white/40 backdrop-blur-sm border border-sepia-edge/30 p-4 shadow-sm hover:shadow-[4px_4px_0px_#d2b48c] transition-all duration-300 rounded-sm overflow-hidden flex flex-col h-full', 'hover:bg-white/60' => $href]) }}
>
    {{-- Cover Image --}}
    <div class="relative aspect-[3/4] overflow-hidden shadow-md border-l-4 border-ink/20 mb-3 bg-white p-1">
        @if($cover_url)
            <img src="{{ $cover_url }}" alt="{{ $title }}" loading="lazy"
                class="w-full h-full object-cover sepia-[0.2] group-hover:sepia-0 transition-all duration-700">
        @else
            <div class="w-full h-full flex items-center justify-center bg-gray-100 text-gray-400">
                <x-lucide-book-open class="w-12 h-12" />
            </div>
        @endif
        
        {{-- Availability Badge --}}
        <div class="absolute top-2 right-2 bg-parchment-base text-[10px] font-bold px-2 py-1 border border-sepia-edge/50 shadow-sm">
            <span class="{{ $currentStatus['class'] }}">{{ $currentStatus['label'] }}</span>
        </div>
    </div>
    
    {{-- Book Info --}}
    <div class="space-y-2 flex-1">
        @if($category)
            <div class="flex items-center gap-1 text-[10px] font-mono text-coffee/60 uppercase tracking-widest">
                <x-lucide-tag class="w-3 h-3" /> {{ $category }}
            </div>
        @endif
        
        <h3 class="text-sm font-bold text-ink italic leading-tight group-hover:text-coffee transition-colors line-clamp-2">
            {{ $title }}
        </h3>
        
        <p class="text-xs text-coffee/70 italic">{{ $author }}</p>
    </div>
    
    {{-- Actions Slot --}}
    @if($slot->isNotEmpty())
        <div class="mt-4 pt-3 border-t border-sepia-edge/30 flex items-center justify-between">
            {{ $slot }}
        </div>
    @endif
</{{ $tag }}>

{{--
Usage Examples:
<x-library.book-card 
    title="The Great Gatsby"
    author="F. Scott Fitzgerald"
    cover_url="https://example.com/cover.jpg"
    category="Fiksi"
    :available_stock="3"
    :total_stock="5"
    href="/books/1"
>
    <x-ui.button size="sm" variant="ghost">Lihat Detail</x-ui.button>
    <x-ui.button size="sm">Pinjam</x-ui.button>
</x-library.book-card>

<x-library.book-card 
    title="1984"
    author="George Orwell"
    :available_stock="0"
    status="out_of_stock"
/>
--}}
