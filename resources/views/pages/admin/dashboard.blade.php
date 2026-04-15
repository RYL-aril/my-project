<x-layouts.app>
    <section class="mb-8 border-b-2 border-double border-sepia-edge/30 pb-4">
        <div class="flex justify-between items-end">
            <div>
                <h1 class="text-4xl font-bold italic text-ink mb-1 font-serif">Dashboard Arsip</h1>
                <p class="text-coffee/70 text-sm font-mono tracking-tight">>> Sistem Manajemen Pustaka Utama</p>
            </div>
            <div class="text-right border border-sepia-edge/30 p-2 bg-white/40 shadow-[2px_2px_0px_#d2b48c]">
                <p
                    class="text-[10px] text-coffee/60 uppercase tracking-widest font-bold mb-1 border-b border-sepia-edge/20 pb-1">
                    Tanggal Perekaman</p>
                <p class="text-sm font-bold text-ink font-mono">{{ \Carbon\Carbon::now()->format('d M Y') }}</p>
            </div>
        </div>
    </section>

    <section class="mb-10">
        <div class="flex items-center gap-2 mb-4">
            <h2 class="text-lg font-bold uppercase tracking-widest text-ink/80 border-b border-ink/80 pb-1">I. Ringkasan
                Indeks</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4">
            @php
                $statCards = [
                    ['label' => 'Anggota', 'value' => '1,247', 'sub' => 'Aktif', 'icon' => 'users'],
                    ['label' => 'Katalog', 'value' => '5,892', 'sub' => 'Judul', 'icon' => 'book-open'],
                    ['label' => 'Dipinjam', 'value' => '156', 'sub' => 'Sirkulasi', 'icon' => 'check-circle'],
                    ['label' => 'Tertahan', 'value' => '23', 'sub' => 'Pending', 'icon' => 'clock', 'alert' => true],
                    [
                        'label' => 'Terlambat',
                        'value' => '23',
                        'sub' => 'Overdue',
                        'icon' => 'exclamation-triangle',
                        'alert' => true,
                    ],
                    [
                        'label' => 'Denda',
                        'value' => 'Rp 4,750,000',
                        'sub' => 'Tertunggak',
                        'icon' => 'banknotes',
                        'alert' => true,
                    ],
                ];
            @endphp

            @foreach ($statCards as $card)
                <div
                    class="bg-[#fcfaf5] border border-sepia-edge/40 p-3 relative hover:shadow-[3px_3px_0px_#2c2420] transition-shadow duration-200 group">
                    <div class="flex justify-between items-start mb-3 border-b border-dashed border-sepia-edge/30 pb-2">
                        <p class="text-[10px] uppercase font-bold tracking-widest text-coffee">{{ $card['label'] }}</p>
                        <x-dynamic-component :component="'heroicon-o-' . $card['icon']"
                            class="w-4 h-4 text-coffee/40 group-hover:text-ink transition-colors" />
                    </div>
                    <p
                        class="text-2xl font-bold {{ isset($card['alert']) && $card['alert'] && $card['value'] > 0 ? 'text-red-800' : 'text-ink' }} font-serif">
                        {{ $card['value'] }}
                    </p>
                    <p class="text-[10px] text-coffee/60 uppercase tracking-wider mt-1">{{ $card['sub'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mb-12">
        <div class="flex items-center gap-2 mb-4">
            <h2 class="text-lg font-bold uppercase tracking-widest text-ink/80 border-b border-ink/80 pb-1">II. Status
                Fisik Buku</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white/40 border-2 border-ink p-5 relative shadow-[4px_4px_0px_#2c2420]">
                <div
                    class="absolute -top-3 left-4 bg-[#f4ecd8] px-2 text-[10px] font-bold uppercase tracking-widest text-ink border border-ink">
                    Stok Aman
                </div>
                <div class="flex justify-between items-end mt-2">
                    <div>
                        <p class="text-4xl font-bold text-ink font-serif">
                            4,256
                        </p>
                        <p class="text-xs text-coffee font-mono mt-1">> Tersedia di rak</p>
                    </div>
                    <x-lucide-circle-check class="w-8 h-8 text-ink/20" />
                </div>
            </div>

            <div class="bg-[#fcfaf5] border-2 border-dashed border-yellow-800/60 p-5 relative">
                <div
                    class="absolute -top-3 left-4 bg-[#f4ecd8] px-2 text-[10px] font-bold uppercase tracking-widest text-yellow-900 border border-yellow-800/60">
                    Menipis
                </div>
                <div class="flex justify-between items-end mt-2">
                    <div>
                        <p class="text-4xl font-bold text-yellow-900 font-serif">1,289</p>
                        <p class="text-xs text-yellow-800/70 font-mono mt-1">> Perlu restock</p>
                    </div>
                    <x-lucide-circle-alert class="w-8 h-8 text-yellow-800/20" />
                </div>
            </div>

            <div class="bg-red-50/30 border-2 border-double border-red-800 p-5 relative">
                <div
                    class="absolute -top-3 left-4 bg-[#f4ecd8] px-2 text-[10px] font-bold uppercase tracking-widest text-red-900 border border-red-800">
                    Kosong
                </div>
                <div class="flex justify-between items-end mt-2">
                    <div>
                        <p class="text-4xl font-bold text-red-900 font-serif">347</p>
                        <p class="text-xs text-red-800/70 font-mono mt-1">> Nol sirkulasi</p>
                    </div>
                    <x-lucide-circle-x class="w-8 h-8 text-red-800/20" />
                </div>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
        <div class="lg:col-span-2">
            <div class="flex items-center justify-between mb-4 border-b border-sepia-edge/30 pb-2">
                <h2 class="text-lg font-bold italic text-ink font-serif">Permintaan Tertunda (3)</h2>
            </div>

            <div class="space-y-3">
                <div
                    class="bg-[#fcfaf5] border-l-4 border-yellow-800/40 border-y border-r border-sepia-edge/30 p-3 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=100&h=140&fit=crop"
                            alt="Sejarah Peradaban" class="w-10 h-14 object-cover border" loading="lazy">
                        <div>
                            <p class="font-bold text-ink text-sm">Sejarah Peradaban Barat</p>
                            <p class="text-xs text-coffee/80 font-mono mt-0.5">Pemohon: Ahmad Santoso | 15/10/2024</p>
                        </div>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-ink">Tinjau</span>
                </div>
                <div
                    class="bg-[#fcfaf5] border-l-4 border-yellow-800/40 border-y border-r border-sepia-edge/30 p-3 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1543002588-bfa74002ed7a?w=100&h=140&fit=crop"
                            alt="Algoritma" class="w-10 h-14 object-cover border" loading="lazy">
                        <div>
                            <p class="font-bold text-ink text-sm">Algoritma dan Struktur Data</p>
                            <p class="text-xs text-coffee/80 font-mono mt-0.5">Pemohon: Siti Nurhaliza | 14/10/2024</p>
                        </div>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-ink">Tinjau</span>
                </div>
                <div
                    class="bg-[#fcfaf5] border-l-4 border-yellow-800/40 border-y border-r border-sepia-edge/30 p-3 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1507842217343-583bb7278b66?w=100&h=140&fit=crop"
                            alt="Psikologi" class="w-10 h-14 object-cover border" loading="lazy">
                        <div>
                            <p class="font-bold text-ink text-sm">Psikologi Pendidikan Modern</p>
                            <p class="text-xs text-coffee/80 font-mono mt-0.5">Pemohon: Budi Hartono | 13/10/2024</p>
                        </div>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-ink">Tinjau</span>
                </div>
            </div>
        </div>

        <div>
            <div class="mb-4 border-b border-sepia-edge/30 pb-2">
                <h2 class="text-lg font-bold italic text-ink font-serif">Katalog Terpopuler</h2>
            </div>

            <div class="space-y-0 border border-sepia-edge/30 bg-[#fcfaf5]">
                <div
                    class="p-3 border-b border-dashed border-sepia-edge/30 flex items-start gap-3 hover:bg-white transition-colors">
                    <div class="text-sm font-mono font-bold text-coffee/40 mt-0.5">01.</div>
                    <div class="flex-1 min-w-0">
                        <p class="font-bold text-ink text-sm truncate">Sejarah Peradaban Barat</p>
                        <p class="text-[10px] text-coffee/80 uppercase tracking-wider mt-1">Will Durant</p>
                    </div>
                    <div class="text-right">
                        <span class="text-xs font-mono font-bold text-ink">89x</span>
                    </div>
                </div>
                <div
                    class="p-3 border-b border-dashed border-sepia-edge/30 flex items-start gap-3 hover:bg-white transition-colors">
                    <div class="text-sm font-mono font-bold text-coffee/40 mt-0.5">02.</div>
                    <div class="flex-1 min-w-0">
                        <p class="font-bold text-ink text-sm truncate">Algoritma dan Struktur Data</p>
                        <p class="text-[10px] text-coffee/80 uppercase tracking-wider mt-1">Irvan M. Syah</p>
                    </div>
                    <div class="text-right">
                        <span class="text-xs font-mono font-bold text-ink">76x</span>
                    </div>
                </div>
                <div
                    class="p-3 border-b border-dashed border-sepia-edge/30 flex items-start gap-3 hover:bg-white transition-colors">
                    <div class="text-sm font-mono font-bold text-coffee/40 mt-0.5">03.</div>
                    <div class="flex-1 min-w-0">
                        <p class="font-bold text-ink text-sm truncate">Psikologi Pendidikan</p>
                        <p class="text-[10px] text-coffee/80 uppercase tracking-wider mt-1">Uzer Usman</p>
                    </div>
                    <div class="text-right">
                        <span class="text-xs font-mono font-bold text-ink">64x</span>
                    </div>
                </div>
                <div class="p-3 flex items-start gap-3 hover:bg-white transition-colors">
                    <div class="text-sm font-mono font-bold text-coffee/40 mt-0.5">04.</div>
                    <div class="flex-1 min-w-0">
                        <p class="font-bold text-ink text-sm truncate">Manajemen Proyek</p>
                        <p class="text-[10px] text-coffee/80 uppercase tracking-wider mt-1">Pinto</p>
                    </div>
                    <div class="text-right">
                        <span class="text-xs font-mono font-bold text-ink">52x</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div>
            <div class="mb-4 border-b border-sepia-edge/30 pb-2">
                <h2 class="text-lg font-bold italic text-ink font-serif">Log Aktivitas Pustaka</h2>
            </div>

            <div class="bg-white/50 border border-sepia-edge/40 p-1 font-mono text-sm">
                <div class="flex items-start gap-3 p-2 border-b border-sepia-edge/20">
                    <div class="text-coffee/50 text-xs w-16">14:32</div>
                    <div class="flex-1 text-xs text-ink/80">
                        <span class="font-bold text-ink">Ahmad Santoso</span> meminjam <span
                            class="italic text-coffee">Sejarah Peradaban Barat</span>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-2 border-b border-sepia-edge/20">
                    <div class="text-coffee/50 text-xs w-16">13:45</div>
                    <div class="flex-1 text-xs text-ink/80">
                        <span class="font-bold text-ink">Siti Nurhaliza</span> mengembalikan <span
                            class="italic text-coffee">Algoritma dan Struktur Data</span>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-2 border-b border-sepia-edge/20">
                    <div class="text-coffee/50 text-xs w-16">11:20</div>
                    <div class="flex-1 text-xs text-ink/80">
                        <span class="font-bold text-ink">Budi Hartono</span> meminjam <span
                            class="italic text-coffee">Psikologi Pendidikan</span>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-2">
                    <div class="text-coffee/50 text-xs w-16">09:15</div>
                    <div class="flex-1 text-xs text-ink/80">
                        <span class="font-bold text-ink">Dewi Sartika</span> meminjam <span
                            class="italic text-coffee">Manajemen Proyek</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="mb-4 border-b border-sepia-edge/30 pb-2">
                <h2 class="text-lg font-bold italic text-ink font-serif">Peminjam Paling Aktif</h2>
            </div>

            <div class="grid grid-cols-1 gap-3">
                <div class="border border-sepia-edge/40 p-3 flex justify-between">
                    <div>
                        <p class="font-bold text-ink">Ahmad Santoso</p>
                        <p class="text-[10px] text-coffee/70">ahmad@email.com</p>
                    </div>
                    <p class="text-xl font-bold text-ink">12</p>
                </div>
                <div class="border border-sepia-edge/40 p-3 flex justify-between">
                    <div>
                        <p class="font-bold text-ink">Siti Nurhaliza</p>
                        <p class="text-[10px] text-coffee/70">siti@email.com</p>
                    </div>
                    <p class="text-xl font-bold text-ink">9</p>
                </div>
                <div class="border border-sepia-edge/40 p-3 flex justify-between">
                    <div>
                        <p class="font-bold text-ink">Budi Hartono</p>
                        <p class="text-[10px] text-coffee/70">budi@email.com</p>
                    </div>
                    <p class="text-xl font-bold text-ink">7</p>
                </div>
                <div class="border border-sepia-edge/40 p-3 flex justify-between">
                    <div>
                        <p class="font-bold text-ink">Dewi Sartika</p>
                        <p class="text-[10px] text-coffee/70">dewi@email.com</p>
                    </div>
                    <p class="text-xl font-bold text-ink">5</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
