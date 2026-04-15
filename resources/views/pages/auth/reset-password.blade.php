<!-- Mock Reset Password - uses auth layout -->
<x-layouts.auth>
<div class="relative bg-white p-2 border-2 border-ink/20 shadow-2xl">
    <div class="border-[3px] border-ink p-10 md:p-14 relative bg-[#fdfbf7]">

        <!-- Header -->
        <div class="text-center mb-16 border-b-2 border-ink/10 pb-10">
            <h2 class="text-4xl font-serif italic text-ink font-black mb-3">
                Reset Kata Sandi
            </h2>
            <span class="text-[11px] font-mono uppercase tracking-[0.4em] text-ink font-bold py-1 px-4 bg-ink/5 border border-ink/10">
                pulihkan akses
            </span>
        </div>

        <form onsubmit="mockReset(event); return false;" class="space-y-10">
            <div class="grid grid-cols-1 gap-10">
                <x-ui.input label="01. Email Terdaftar" name="email" placeholder="email@contoh.com" type="email" />
                <x-ui.button variant="outline" type="submit" size="sm" iconRight="heroicon-o-arrow-right">
                    Kirim Link Reset
                </x-ui.button>
            </div>
        </form>

    </div>
</div>

<script>
function mockReset(e) {
    e.preventDefault();
    alert('✅ Link reset dikirim ke email Anda!');
}
</script>
</x-layouts.auth>
