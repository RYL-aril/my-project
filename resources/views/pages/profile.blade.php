<x-layouts.app>
    <div class="space-y-10 text-ink">

        <div class="border-b-2 border-ink pb-4">
            <h2 class="text-3xl font-bold italic font-serif">Profil Peminjam</h2>
            <p class="text-xs uppercase tracking-widest text-muted mt-1">Kartu Informasi & Riwayat</p>
        </div>

        @if (session('success'))
            <div
                class="fixed bottom-6 right-6 bg-ink text-white px-5 py-3 text-xs uppercase tracking-widest shadow-lg animate-pulse">
                ✔ Berhasil diperbarui
            </div>
        @endif

        <div class="paper-card p-6 md:p-8 border border-ink shadow-sm bg-surface">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="flex flex-col items-center flex-shrink-0 space-y-3">

                    <div class="relative group">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
                            class="w-32 h-40 object-cover border-2 border-ink transition" loading="lazy" alt="John Doe">
                    </div>

                    <div class="mt-4 flex flex-wrap justify-center gap-2">
                        <span class="px-2 py-1 border border-ink text-xs font-bold uppercase tracking-widest">
                            Member
                        </span>
                    </div>
                </div>

                <div class="flex-1 border-t md:border-t-0 md:border-l border-ink/30 pt-6 md:pt-0 md:pl-8 space-y-6">
                    <div class="border-b border-ink/20 pb-4">
                        <h3 class="text-2xl font-bold font-serif">John Doe</h3>
                        <p class="text-muted text-sm font-mono mt-1">john.doe@example.com</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-4">
                        <div>
                            <p class="text-xs uppercase tracking-widest text-muted mb-1">No. Telepon</p>
                            <p class="font-serif text-lg">+62 812 3456 7890</p>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-widest text-muted mb-1">Alamat</p>
                            <p class="font-serif text-lg">Jl. Contoh No. 123, Jakarta</p>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-widest text-muted mb-1">Terdaftar Sejak</p>
                            <p class="font-mono text-sm">15/03/2024</p>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-widest text-muted mb-1">Status</p>
                            <p class="font-mono text-sm">Terverifikasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
