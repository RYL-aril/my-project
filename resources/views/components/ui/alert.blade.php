@props([
    'title',
    'description' => null,
    'variant' => 'info', // info, success, warning, danger
    'dismissible' => false,
])

@php
$variants = [
    'info' => 'bg-blue-50/50 border-blue-200 text-blue-900',
    'success' => 'bg-green-50/50 border-green-200 text-green-900',
    'warning' => 'bg-yellow-50/50 border-yellow-200 text-yellow-900',
    'danger' => 'bg-red-50/50 border-red-200 text-red-900',
];

$icons = [
    'info' => 'heroicon-o-information-circle',
    'success' => 'heroicon-o-check-circle',
    'warning' => 'heroicon-o-exclamation-triangle',
    'danger' => 'heroicon-o-x-circle',
];
@endphp

<div 
    x-data="{ show: true }" 
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-y-2"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-2"
    {{ $attributes->class([
        'relative border-l-4 p-4 rounded-sm shadow-sm',
        $variants[$variant] ?? $variants['info'],
    ]) }}
>
    <div class="flex items-start gap-3">
        {{-- Icon --}}
        <x-dynamic-component 
            :component="$icons[$variant] ?? $icons['info']" 
            class="w-5 h-5 shrink-0 mt-0.5" 
        />
        
        {{-- Content --}}
        <div class="flex-1 min-w-0">
            @if($title)
                <h4 class="font-bold text-sm uppercase tracking-wide mb-1">
                    {{ $title }}
                </h4>
            @endif
            
            @if($description || $slot->isNotEmpty())
                <div class="text-sm opacity-90 leading-relaxed">
                    {{ $description }}
                    {{ $slot }}
                </div>
            @endif
        </div>
        
        {{-- Dismiss Button --}}
        @if($dismissible)
            <button 
                @click="show = false"
                class="shrink-0 opacity-60 hover:opacity-100 transition-opacity"
                type="button"
            >
                <x-lucide-x class="w-4 h-4" />
            </button>
        @endif
    </div>
</div>

{{--
Usage Examples:

Basic Alert:
<x-ui.alert title="Informasi" description="Pendaftaran dibuka hingga 30 Desember." />

Success Alert:
<x-ui.alert variant="success" title="Berhasil!" description="Data berhasil disimpan." />

Warning with Slot:
<x-ui.alert variant="warning" title="Perhatian">
    Stok buku menipis. Segera lakukan restock.
</x-ui.alert>

Danger Dismissible:
<x-ui.alert variant="danger" title="Error" dismissible>
    Terjadi kesalahan pada sistem. Silakan coba lagi.
</x-ui.alert>
--}}
