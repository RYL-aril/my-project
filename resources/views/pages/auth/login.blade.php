<!-- Static mock - backend decoupled -->
<x-layouts.auth>
    <div class="relative bg-white p-2 border-2 border-ink/20 shadow-2xl">
        <div class="border-[3px] border-ink p-10 md:p-14 relative bg-[#fdfbf7]">

            <!-- Mock status -->
            <div class="font-medium text-sm text-green-600 mb-4 hidden" id="statusMsg">
                Berhasil login!
            </div>

            <!-- Header -->
            <div class="text-center mb-16 border-b-2 border-ink/10 pb-10">
                <h2 class="text-4xl font-serif italic text-ink font-black mb-3">
                    Login
                </h2>
                <span
                    class="text-[11px] font-mono uppercase tracking-[0.4em] text-ink font-bold py-1 px-4 bg-ink/5 border border-ink/10">
                    formulir login
                </span>
            </div>

            <form onsubmit="mockLogin(event); return false;" class="space-y-10">

                <div class="grid grid-cols-1 gap-10">

                    <x-ui.input label="01. Email" name="email" id="email" placeholder="test@test.com"
                        type="email" />

                    <x-ui.input label="02. Kata Sandi" name="password" id="password" placeholder="........."
                        type="password" />

                    <label class="flex items-center gap-2 text-sm text-muted">
                        <input type="checkbox" name="remember">
                        Ingat saya
                    </label>

                </div>

                <!-- Actions -->
                <div class="flex items-center justify-between pt-8 border-t-2 border-ink/10">

                    <a href="#"
                        class="text-sm font-mono text-muted hover:text-ink underline underline-offset-4 transition-colors">
                        Belum punya akun?
                    </a>

                    <x-ui.button variant="outline" type="submit" iconRight="heroicon-o-arrow-right" size="sm">
                        Masuk
                    </x-ui.button>

                </div>

            </form>

        </div>
    </div>

    <script>
        function mockLogin(e) {
            e.preventDefault();
            const status = document.getElementById('statusMsg');
            status.classList.remove('hidden');
            status.textContent = 'Mock login success! Redirecting...';
            setTimeout(() => {
                alert('Mock: Logged in as demo user');
                status.classList.add('hidden');
            }, 2000);
        }
    </script>
</x-layouts.auth>