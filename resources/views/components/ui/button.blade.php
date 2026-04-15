@props([
'href' => null,
'type' => 'button',
'variant' => 'primary',
'size' => 'md',
'iconLeft' => null,
'iconRight' => null,

])

@php
$style = "relative inline-flex items-center justify-center gap-2 border-2 font-mono font-black uppercase overflow-hidden transition-all duration-150 ease-out disabled:opacity-60 disabled:cursor-not-allowed bg-[#fcfaf5] text-ink border-ink shadow-[6px_6px_0px_rgba(44,36,32,1)] hover:translate-y-[2px] hover:shadow-[4px_4px_0px_rgba(44,36,32,1)] active:translate-y-[6px] active:shadow-[0px_0px_0px_rgba(44,36,32,1)] px-8 py-3 text-sm tracking-[0.25em]";

$tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }}
{{ $attributes->class($style) }}
@if($href) href="{{ $href }}" @else type="{{ $type }}" @endif


>



<span
class="relative z-10 flex items-center gap-2 transition-colors {{ $variant === 'outline' ? 'group-hover:text-white' : '' }}"

>

@if($iconLeft)
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