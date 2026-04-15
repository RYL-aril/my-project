@props([
    'show' => false,
    'maxWidth' => 'lg', // sm, md, lg, xl, 2xl
    'closeable' => true,
])

@php
$maxWidths = [
    'sm' => 'max-w-sm',
    'md' => 'max-w-md',
    'lg' => 'max-w-lg',
    'xl' => 'max-w-xl',
    '2xl' => 'max-w-2xl',
];

$currentMaxWidth = $maxWidths[$maxWidth] ?? $maxWidths['lg'];
@endphp

<div
    x-data="{
        showModal: @js($show),
        init() {
            this.$watch('showModal', value => {
                if (value) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = null;
                }
            });
        }
    }"
    x-show="showModal"
    @if($closeable)
        @keydown.escape.window="showModal = false"
    @endif
    class="relative z-50 overflow-y-auto overflow-x-hidden fixed inset-0 flex items-center justify-center p-4"
    style="display: {{ $show ? 'block' : 'none' }};"
>
    {{-- Backdrop --}}
    <div 
        x-show="showModal"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-ink/60 backdrop-blur-sm"
        @if($closeable) @click="showModal = false" @endif
    ></div>

    {{-- Modal Panel --}}
    <div
        x-show="showModal"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        {{ $attributes->class([
            'relative bg-surface border-2 border-ink shadow-[8px_8px_0px_rgba(44,36,32,1)] rounded-sm w-full',
            $currentMaxWidth,
        ]) }}
    >
        {{-- Close Button --}}
        @if($closeable)
            <button
                @click="showModal = false"
                type="button"
                class="absolute top-3 right-3 text-coffee/60 hover:text-ink transition-colors z-10"
            >
                <x-lucide-x class="w-5 h-5" />
            </button>
        @endif

        {{-- Content --}}
        {{ $slot }}
    </div>
</div>

{{--
Usage Examples:

Basic Modal:
<x-ui.modal :show="$errors->any()">
    <div class="p-6">
        <h3 class="text-xl font-bold text-ink mb-4">Perhatian</h3>
        <p class="text-coffee/80">Terjadi kesalahan pada form.</p>
    </div>
</x-ui.modal>

With Named Slots:
<x-ui.modal max-width="xl">
    <div class="p-6">
        <h3 class="text-2xl font-bold italic text-ink mb-2">Konfirmasi</h3>
        <p class="text-coffee/70 mb-6">Apakah Anda yakin ingin melanjutkan?</p>
        
        <div class="flex gap-3 justify-end">
            <x-ui.button variant="ghost" @click="$dispatch('close-modal')">Batal</x-ui.button>
            <x-ui.button variant="danger">Ya, Lanjutkan</x-ui.button>
        </div>
    </div>
</x-ui.modal>

Trigger with Alpine:
<button @click="$dispatch('open-modal', { id: 'delete' })">Hapus</button>
<x-ui.modal wire:model="confirmingDelete" max-width="md">...</x-ui.modal>
--}}
