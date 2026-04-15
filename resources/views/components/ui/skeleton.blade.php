@props([
    'size' => 'md', // sm, md, lg
])

@php
$sizes = [
    'sm' => 'w-8 h-8 border-2',
    'md' => 'w-10 h-10 border-3',
    'lg' => 'w-12 h-12 border-4',
];
@endphp

<span {{ $attributes->class([
    'inline-block rounded-full border-sepia-edge/30 animate-pulse bg-sepia-edge/10',
    $sizes[$size] ?? $sizes['md'],
]) }}>
</span>

{{--
Usage Examples:

Single Skeleton:
<x-ui.skeleton />

In a Card:
<div class="border p-4">
    <x-ui.skeleton size="lg" class="rounded-sm mb-3" />
    <x-ui.skeleton class="w-3/4 mb-2" />
    <x-ui.skeleton class="w-1/2" />
</div>

Grid Loading State:
@for($i = 0; $i < 6; $i++)
    <x-library.book-card-skeleton />
@endfor
--}}
