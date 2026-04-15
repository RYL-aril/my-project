@props([
    'href' => null,
    'type' => 'button',
    'variant' => 'primary', // primary, secondary, danger, outline, ghost
    'size' => 'md',         // sm, md, lg
    'iconLeft' => null,
    'iconRight' => null,
    'loading' => false,
    'disabled' => false,
])

@php
$baseClasses = 'relative inline-flex items-center justify-center gap-2 border-2 font-mono font-black uppercase overflow-hidden transition-all duration-150 ease-out disabled:opacity-60 disabled:cursor-not-allowed px-8 py-3 text-sm tracking-[0.25em]';

$variants = [
    'primary' => 'bg-[#fcfaf5] text-ink border-ink shadow-[6px_6px_0px_rgba(44,36,32,1)] hover:translate-y-[2px] hover:shadow-[4px_4px_0px_rgba(44,36,32,1)] active:translate-y-[6px] active:shadow-[0px_0px_0px_rgba(44,36,32,1)]',
    'secondary' => 'bg-coffee text-parchment-light border-coffee shadow-[6px_6px_0px_rgba(44,36,32,1)] hover:translate-y-[2px] hover:shadow-[4px_4px_0px_rgba(44,36,32,1)]',
    'danger' => 'bg-red-700 text-white border-red-800 shadow-[6px_6px_0px_rgba(44,36,32,1)] hover:translate-y-[2px] hover:shadow-[4px_4px_0px_rgba(44,36,32,1)]',
    'outline' => 'bg-transparent text-ink border-ink hover:bg-ink/5',
    'ghost' => 'bg-transparent text-ink border-transparent hover:bg-sepia-edge/10',
];

$sizes = [
    'sm' => 'px-4 py-2 text-xs',
    'md' => 'px-8 py-3 text-sm',
    'lg' => 'px-10 py-4 text-base',
];

$classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);

if ($disabled || $loading) {
    $classes .= ' pointer-events-none';
}

$tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }}
{{ $attributes->class($classes) }}
@if($href) href="{{ $href }}" @else type="{{ $type }}" @endif
@if($disabled || $loading) disabled @endif
>
    {{-- Loading Spinner --}}
    @if($loading)
        <svg class="animate-spin h-5 w-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
    @endif
    
    <span class="relative z-10 flex items-center gap-2">
        @if($iconLeft && !$loading)
            <x-dynamic-component :component="$iconLeft" class="w-5 h-5 shrink-0"/>
        @endif
        
        <span class="whitespace-nowrap">
            {{ $slot }}
        </span>
        
        @if($iconRight)
            <x-dynamic-component :component="$iconRight" class="w-5 h-5 shrink-0"/>
        @endif
    </span>
</{{ $tag }}>

{{--
Usage Examples:

Primary Button:
<x-ui.button variant="primary">Simpan</x-ui.button>

Secondary Button with Icon:
<x-ui.button variant="secondary" iconLeft="heroicon-o-plus">Tambah Buku</x-ui.button>

Danger Button:
<x-ui.button variant="danger" iconLeft="heroicon-o-trash">Hapus</x-ui.button>

Outline Button as Link:
<x-ui.button href="/books" variant="outline" size="sm">Kembali</x-ui.button>

Ghost Button:
<x-ui.button variant="ghost" size="sm">Lihat Detail</x-ui.button>

Loading State:
<x-ui.button loading>Mengirim...</x-ui.button>

Disabled State:
<x-ui.button disabled>Tidak Tersedia</x-ui.button>
--}}