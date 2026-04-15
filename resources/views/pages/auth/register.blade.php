<!-- Static mock - backend decoupled -->
<x-layouts.auth>
<div class="relative bg-white p-2 border-2 border-ink/20 shadow-2xl">
    <div class="border-[3px] border-ink p-10 md:p-14 relative bg-[#fdfbf7]">

        <!-- Header -->
        <div class="text-center mb-16 border-b-2 border-ink/10 pb-10">
            <h2 class="text-4xl font-serif italic text-ink font-black mb-3">
                Registrasi Pengguna Baru
            </h2>
            <span class="text-[11px] font-mono uppercase tracking-[0.4em] text-ink font-bold py-1 px-4 bg-ink/5 border border-ink/10">
                formulir pendaftaran
            </span>
        </div>

        <form onsubmit="mockRegister(event); return false;" class="space-y-12">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-14 gap-y-10">

                <x-ui.input label="01. Nama Lengkap" name="name" placeholder="John Doe" />

                <x-ui.input label="02. Alamat Email" name="email" placeholder="john@example.com" type="email" />

                <x-ui.input label="03. Nomor Telepon" name="phone" placeholder="08123456789" type="tel" />

                <x-ui.input label="04. Alamat Lengkap" name="address" placeholder="Jl. Pustaka No. 123" />

                <x-ui.input label="05. Kata Sandi" name="password" placeholder="password123" type="password" />

                <x-ui.input label="06. Konfirmasi Kata Sandi" name="password_confirmation" placeholder="password123" type="password" />

            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between pt-6 border-t-2 border-ink/10">

                <a href="#" class="text-sm underline text-muted hover:text-ink transition-colors">
                    Sudah punya akun? <strong>Masuk</strong>
                </a>

                <x-ui.button variant="outline" type="submit" size="sm">
                    Daftar Sekarang
                </x-ui.button>

            </div>

        </form>

    </div>
</div>

<script>
function mockRegister(e) {
    e.preventDefault();
    alert('✅ Registrasi berhasil! Selamat datang di Scriptoria.');
}
</script>
</x-layouts.auth>
