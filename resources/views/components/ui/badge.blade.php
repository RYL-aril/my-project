@props([
    'variant' => 'default', // default, success, warning, danger, info
    'size' => 'md',         // sm, md, lg
    'icon' => null,
    'pill' => false,
])

@php
$baseClasses = 'inline-flex items-center font-bold uppercase tracking-widest';

$sizes = [
    'sm' => 'px-2 py-0.5 text-[10px]',
    'md' => 'px-2.5 py-1 text-xs',
    'lg' => 'px-3 py-1.5 text-sm',
];

$variants = [
    'default' => 'bg-sepia-edge/20 text-ink border border-sepia-edge/40',
    'success' => 'bg-green-100 text-green-800 border border-green-300',
    'warning' => 'bg-yellow-100 text-yellow-800 border border-yellow-300',
    'danger' => 'bg-red-100 text-red-800 border border-red-300',
    'info' => 'bg-blue-100 text-blue-800 border border-blue-300',
    'coffee' => 'bg-coffee text-parchment-light border border-coffee',
];

$shape = $pill ? 'rounded-full' : 'rounded-sm';
@endphp

<span {{ $attributes->class([$baseClasses, $sizes[$size], $variants[$variant] ?? $variants['default'], $shape]) }}>
    @if($icon)
        <x-dynamic-component :component="$icon" class="w-3 h-3 mr-1.5 shrink-0" />
    @endif
    {{ $slot }}
</span>

{{--
Usage Examples:
<x-ui.badge>Tersedia 3</x-ui.badge>
<x-ui.badge variant="success">Aktif</x-ui.badge>
<x-ui.badge variant="warning" size="sm">Pending</x-ui.badge>
<x-ui.badge variant="danger" icon="heroicon-o-exclamation-triangle">Overdue</x-ui.badge>
<x-ui.badge pill size="lg">Premium Member</x-ui.badge>
--}}
