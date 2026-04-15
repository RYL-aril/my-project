<x-layouts.app>
    <div class="space-y-20 py-10">

        {{-- REKOMENDASI --}}
        <section class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Book 1 -->
                <div
                    class="group relative flex gap-6 bg-parchment-light/50 border border-sepia-edge/30 p-6 hover:shadow-lg transition-all rounded-sm">
                    <img src="https://via.placeholder.com/200x300/8B4513/D2B48C?text=Gatsby"
                        class="w-24 h-32 object-cover shadow-md flex-shrink-0 border-l-2 border-black/20"
                        alt="The Great Gatsby" loading="lazy">
                    <div class="flex flex-col justify-between flex-1">
                        <div>
                            <div
                                class="flex items-center gap-1 text-[10px] tracking-widest text-coffee/80 uppercase font-bold mb-1">
                                <x-lucide-star class="w-3 h-3 fill-current text-yellow-700/80" /> Pilihan Kami
                            </div>
                            <h3 class="text-lg font-bold italic text-ink mb-2 group-hover:text-coffee transition">
                                The Great Gatsby
                            </h3>
                            <p class="text-xs text-coffee/70 italic line-clamp-2">F. Scott Fitzgerald</p>
                        </div>
                        <a href="/books/1"
                            class="flex items-center gap-1 text-xs font-bold uppercase tracking-widest text-coffee hover:text-ink transition self-start">
                            Lihat Selengkapnya
                            <x-lucide-move-right class="w-4 h-4" />
                        </a>
                    </div>
                </div>

                <!-- Book 2 -->
                <div
                    class="group relative flex gap-6 bg-parchment-light/50 border border-sepia-edge/30 p-6 hover:shadow-lg transition-all rounded-sm">
                    <img src="https://via.placeholder.com/200x300/2C2420/F0F8FF?text=1984"
                        class="w-24 h-32 object-cover shadow-md flex-shrink-0 border-l-2 border-black/20" alt="1984"
                        loading="lazy">
                    <div class="flex flex-col justify-between flex-1">
                        <div>
                            <div
                                class="flex items-center gap-1 text-[10px] tracking-widest text-coffee/80 uppercase font-bold mb-1">
                                <x-lucide-star class="w-3 h-3 fill-current text-yellow-700/80" /> Pilihan Kami
                            </div>
                            <h3 class="text-lg font-bold italic text-ink mb-2 group-hover:text-coffee transition">
                                1984
                            </h3>
                            <p class="text-xs text-coffee/70 italic line-clamp-2">George Orwell</p>
                        </div>
                        <a href="/books/2"
                            class="flex items-center gap-1 text-xs font-bold uppercase tracking-widest text-coffee hover:text-ink transition self-start">
                            Lihat Selengkapnya
                            <x-lucide-move-right class="w-4 h-4" />
                        </a>
                    </div>
                </div>

            </div>
        </section>

        {{-- POPULER --}}
        <section class="bg-coffee/5 py-16 border-y border-sepia-edge/10">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="flex items-center gap-3 text-3xl font-bold italic text-ink mb-8">
                    <x-lucide-sparkles class="w-8 h-8 text-coffee" /> Buku Populer
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">

                    <!-- Popular Book 1 -->
                    <a href="/books/3" class="group cursor-pointer text-left relative block">
                        <div
                            class="relative overflow-hidden aspect-[3/4] mb-3 border border-sepia-edge/20 shadow-sm bg-white p-1">
                            <img src="https://via.placeholder.com/150x225/DEB887/8B4513?text=Mockingbird"
                                alt="To Kill a Mockingbird" loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 sepia-[0.1]">
                        </div>
                        <h4 class="text-xs font-bold italic text-ink truncate">To Kill a Mockingbird</h4>
                        <p class="text-[10px] text-coffee/60">Harper Lee</p>
                    </a>

                    <!-- Popular Book 2 -->
                    <a href="/books/5" class="group cursor-pointer text-left relative block">
                        <div
                            class="relative overflow-hidden aspect-[3/4] mb-3 border border-sepia-edge/20 shadow-sm bg-white p-1">
                            <img src="https://via.placeholder.com/150x225/8B4513/F5DEB3?text=Hobbit" alt="The Hobbit"
                                loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 sepia-[0.1]">
                        </div>
                        <h4 class="text-xs font-bold italic text-ink truncate">The Hobbit</h4>
                        <p class="text-[10px] text-coffee/60">J.R.R. Tolkien</p>
                    </a>

                    <!-- Popular Book 3 -->
                    <a href="/books/6" class="group cursor-pointer text-left relative block">
                        <div
                            class="relative overflow-hidden aspect-[3/4] mb-3 border border-sepia-edge/20 shadow-sm bg-white p-1">
                            <img src="https://via.placeholder.com/150x225/2C2420/E6E6FA?text=Harry+Potter"
                                alt="Harry Potter" loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 sepia-[0.1]">
                        </div>
                        <h4 class="text-xs font-bold italic text-ink truncate">Harry Potter</h4>
                        <p class="text-[10px] text-coffee/60">J.K. Rowling</p>
                    </a>

                    <!-- Popular Book 4 -->
                    <a href="/books/7" class="group cursor-pointer text-left relative block">
                        <div
                            class="relative overflow-hidden aspect-[3/4] mb-3 border border-sepia-edge/20 shadow-sm bg-white p-1">
                            <img src="https://via.placeholder.com/150x225/8B0000/FFFACD?text=Alchemist"
                                alt="The Alchemist" loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 sepia-[0.1]">
                        </div>
                        <h4 class="text-xs font-bold italic text-ink truncate">The Alchemist</h4>
                        <p class="text-[10px] text-coffee/60">Paulo Coelho</p>
                    </a>

                    <!-- Popular Book 5 -->
                    <a href="/books/8" class="group cursor-pointer text-left relative block">
                        <div
                            class="relative overflow-hidden aspect-[3/4] mb-3 border border-sepia-edge/20 shadow-sm bg-white p-1">
                            <img src="https://via.placeholder.com/150x225/4B0082/F0E68C?text=Little+Prince"
                                alt="The Little Prince" loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 sepia-[0.1]">
                        </div>
                        <h4 class="text-xs font-bold italic text-ink truncate">The Little Prince</h4>
                        <p class="text-[10px] text-coffee/60">Antoine de Saint-Exupéry</p>
                    </a>

                    <!-- Popular Book 6 -->
                    <a href="/books/9" class="group cursor-pointer text-left relative block">
                        <div
                            class="relative overflow-hidden aspect-[3/4] mb-3 border border-sepia-edge/20 shadow-sm bg-white p-1">
                            <img src="https://via.placeholder.com/150x225/556B2F/FAFAD2?text=Lord+of+Rings"
                                alt="Lord of the Rings" loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 sepia-[0.1]">
                        </div>
                        <h4 class="text-xs font-bold italic text-ink truncate">Lord of the Rings</h4>
                        <p class="text-[10px] text-coffee/60">J.R.R. Tolkien</p>
                    </a>

                </div>
            </div>
        </section>

        {{-- DAFTAR SEMUA BUKU --}}
        <section class="max-w-7xl mx-auto px-6 pb-20">
            <div class="mb-12">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-8">
                    <div>
                        <h2 class="text-3xl font-bold italic text-ink mb-1">Jelajahi Koleksi</h2>
                        <p class="text-sm text-coffee/60">20 naskah tersedia</p>
                    </div>
                    <div class="flex gap-2 flex-wrap">
                        <a href="#"
                            class="px-4 py-2 text-xs uppercase font-bold tracking-wider bg-coffee text-parchment-light shadow-[2px_2px_0px_#2c2420] rounded-sm transition">
                            Semua
                        </a>
                        <a href="#"
                            class="px-4 py-2 text-xs uppercase font-bold tracking-wider border border-sepia-edge/40 text-ink hover:bg-sepia-edge/10 rounded-sm transition">
                            Fiksi
                        </a>
                        <a href="#"
                            class="px-4 py-2 text-xs uppercase font-bold tracking-wider border border-sepia-edge/40 text-ink hover:bg-sepia-edge/10 rounded-sm transition">
                            Non-Fiksi
                        </a>
                    </div>
                </div>

                <div class="mb-8 relative">
                    <div class="absolute left-4 top-1/2 -translate-y-1/2">
                        <x-lucide-search class="w-5 h-5 text-coffee/50" />
                    </div>
                    <input type="text" placeholder="Cari judul atau nama penulis..."
                        class="w-full pl-12 pr-4 py-3 border border-sepia-edge/40 rounded-sm bg-white/50 text-ink placeholder:text-coffee/50 italic focus:outline-none focus:border-coffee focus:ring-1 focus:ring-coffee/30">
                </div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">

                <!-- All Books 1 -->
                <div
                    class="group relative bg-white/40 backdrop-blur-sm border border-sepia-edge/30 p-4 shadow-sm hover:shadow-[4px_4px_0px_#d2b48c] transition-all duration-300 rounded-sm overflow-hidden flex flex-col h-full">
                    <div
                        class="relative aspect-[3/4] overflow-hidden shadow-md border-l-4 border-ink/20 mb-3 bg-white p-1">
                        <img src="https://via.placeholder.com/200x300/F5DEB3/8B4513?text=Pride"
                            alt="Pride and Prejudice" loading="lazy"
                            class="w-full h-full object-cover sepia-[0.2] group-hover:sepia-0 transition-all duration-700">
                        <div
                            class="absolute top-2 right-2 bg-parchment-base text-[10px] font-bold px-2 py-1 border border-sepia-edge/50 shadow-sm">
                            <span class="text-green-800">Tersedia 3</span>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1">
                        <div
                            class="flex items-center gap-1 text-[10px] font-mono text-coffee/60 uppercase tracking-widest">
                            <x-lucide-tag class="w-3 h-3" /> Fiksi
                        </div>
                        <h3
                            class="text-sm font-bold text-ink italic leading-tight group-hover:text-coffee transition-colors line-clamp-2">
                            Pride and Prejudice
                        </h3>
                        <p class="text-xs text-coffee/70 italic">Jane Austen</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-sepia-edge/30 flex items-center justify-between">
                        <x-ui.button href="/books/4" size="sm" variant="ghost">Lihat Detail</x-ui.button>
                        <a href="#"
                            class="text-[10px] font-bold uppercase tracking-widest text-ink border-2 border-ink px-3 py-1 hover:bg-ink hover:text-parchment-light transition-colors shadow-[2px_2px_0px_#2c2420] active:translate-y-[2px] active:shadow-none">
                            Pinjam
                        </a>
                    </div>
                </div>

                <!-- All Books 2 -->
                <div
                    class="group relative bg-white/40 backdrop-blur-sm border border-sepia-edge/30 p-4 shadow-sm hover:shadow-[4px_4px_0px_#d2b48c] transition-all duration-300 rounded-sm overflow-hidden flex flex-col h-full">
                    <div
                        class="relative aspect-[3/4] overflow-hidden shadow-md border-l-4 border-ink/20 mb-3 bg-white p-1">
                        <img src="https://via.placeholder.com/200x300/8B4513/FFF8DC?text=Jane+Eyre" alt="Jane Eyre"
                            loading="lazy"
                            class="w-full h-full object-cover sepia-[0.2] group-hover:sepia-0 transition-all duration-700">
                        <div
                            class="absolute top-2 right-2 bg-parchment-base text-[10px] font-bold px-2 py-1 border border-sepia-edge/50 shadow-sm">
                            <span class="text-green-800">Tersedia 1</span>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1">
                        <div
                            class="flex items-center gap-1 text-[10px] font-mono text-coffee/60 uppercase tracking-widest">
                            <x-lucide-tag class="w-3 h-3" /> Fiksi
                        </div>
                        <h3
                            class="text-sm font-bold text-ink italic leading-tight group-hover:text-coffee transition-colors line-clamp-2">
                            Jane Eyre
                        </h3>
                        <p class="text-xs text-coffee/70 italic">Charlotte Brontë</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-sepia-edge/30 flex items-center justify-between">
                        <x-ui.button href="/books/10" size="sm" variant="ghost">Lihat Detail</x-ui.button>
                        <a href="#"
                            class="text-[10px] font-bold uppercase tracking-widest text-ink border-2 border-ink px-3 py-1 hover:bg-ink hover:text-parchment-light transition-colors shadow-[2px_2px_0px_#2c2420] active:translate-y-[2px] active:shadow-none">
                            Pinjam
                        </a>
                    </div>
                </div>

                <!-- All Books 3 -->
                <div
                    class="group relative bg-white/40 backdrop-blur-sm border border-sepia-edge/30 p-4 shadow-sm hover:shadow-[4px_4px_0px_#d2b48c] transition-all duration-300 rounded-sm overflow-hidden flex flex-col h-full">
                    <div
                        class="relative aspect-[3/4] overflow-hidden shadow-md border-l-4 border-ink/20 mb-3 bg-white p-1">
                        <img src="https://via.placeholder.com/200x300/2F4F4F/F5F5DC?text=Wuthering"
                            alt="Wuthering Heights" loading="lazy"
                            class="w-full h-full object-cover sepia-[0.2] group-hover:sepia-0 transition-all duration-700">
                        <div
                            class="absolute top-2 right-2 bg-parchment-base text-[10px] font-bold px-2 py-1 border border-sepia-edge/50 shadow-sm">
                            <span class="text-red-800">Dipinjam</span>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1">
                        <div
                            class="flex items-center gap-1 text-[10px] font-mono text-coffee/60 uppercase tracking-widest">
                            <x-lucide-tag class="w-3 h-3" /> Fiksi
                        </div>
                        <h3
                            class="text-sm font-bold text-ink italic leading-tight group-hover:text-coffee transition-colors line-clamp-2">
                            Wuthering Heights
                        </h3>
                        <p class="text-xs text-coffee/70 italic">Emily Brontë</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-sepia-edge/30 flex items-center justify-between">
                        <x-ui.button href="/books/11" size="sm" variant="ghost">Lihat Detail</x-ui.button>
                        <span
                            class="text-[10px] font-bold uppercase tracking-widest text-red-800/60 border-2 border-red-800/20 border-dashed px-3 py-1 cursor-not-allowed rotate-[-2deg]">
                            Dipinjam
                        </span>
                    </div>
                </div>

                <!-- All Books 4 -->
                <div
                    class="group relative bg-white/40 backdrop-blur-sm border border-sepia-edge/30 p-4 shadow-sm hover:shadow-[4px_4px_0px_#d2b48c] transition-all duration-300 rounded-sm overflow-hidden flex flex-col h-full">
                    <div
                        class="relative aspect-[3/4] overflow-hidden shadow-md border-l-4 border-ink/20 mb-3 bg-white p-1">
                        <img src="https://via.placeholder.com/200x300/556B2F/FFFACD?text=Frankenstein"
                            alt="Frankenstein" loading="lazy"
                            class="w-full h-full object-cover sepia-[0.2] group-hover:sepia-0 transition-all duration-700">
                        <div
                            class="absolute top-2 right-2 bg-parchment-base text-[10px] font-bold px-2 py-1 border border-sepia-edge/50 shadow-sm">
                            <span class="text-green-800">Tersedia 5</span>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1">
                        <div
                            class="flex items-center gap-1 text-[10px] font-mono text-coffee/60 uppercase tracking-widest">
                            <x-lucide-tag class="w-3 h-3" /> Fiksi
                        </div>
                        <h3
                            class="text-sm font-bold text-ink italic leading-tight group-hover:text-coffee transition-colors line-clamp-2">
                            Frankenstein
                        </h3>
                        <p class="text-xs text-coffee/70 italic">Mary Shelley</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-sepia-edge/30 flex items-center justify-between">
                        <x-ui.button href="/books/12" size="sm" variant="ghost">Lihat Detail</x-ui.button>
                        <a href="#"
                            class="text-[10px] font-bold uppercase tracking-widest text-ink border-2 border-ink px-3 py-1 hover:bg-ink hover:text-parchment-light transition-colors shadow-[2px_2px_0px_#2c2420] active:translate-y-[2px] active:shadow-none">
                            Pinjam
                        </a>
                    </div>
                </div>

                <!-- All Books 5 -->
                <div
                    class="group relative bg-white/40 backdrop-blur-sm border border-sepia-edge/30 p-4 shadow-sm hover:shadow-[4px_4px_0px_#d2b48c] transition-all duration-300 rounded-sm overflow-hidden flex flex-col h-full">
                    <div
                        class="relative aspect-[3/4] overflow-hidden shadow-md border-l-4 border-ink/20 mb-3 bg-white p-1">
                        <img src="https://via.placeholder.com/200x300/8B0000/FFD700?text=Dracula" alt="Dracula"
                            loading="lazy"
                            class="w-full h-full object-cover sepia-[0.2] group-hover:sepia-0 transition-all duration-700">
                        <div
                            class="absolute top-2 right-2 bg-parchment-base text-[10px] font-bold px-2 py-1 border border-sepia-edge/50 shadow-sm">
                            <span class="text-green-800">Tersedia 2</span>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1">
                        <div
                            class="flex items-center gap-1 text-[10px] font-mono text-coffee/60 uppercase tracking-widest">
                            <x-lucide-tag class="w-3 h-3" /> Fiksi
                        </div>
                        <h3
                            class="text-sm font-bold text-ink italic leading-tight group-hover:text-coffee transition-colors line-clamp-2">
                            Dracula
                        </h3>
                        <p class="text-xs text-coffee/70 italic">Bram Stoker</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-sepia-edge/30 flex items-center justify-between">
                        <x-ui.button href="/books/13" size="sm" variant="ghost">Lihat Detail</x-ui.button>
                        <a href="#"
                            class="text-[10px] font-bold uppercase tracking-widest text-ink border-2 border-ink px-3 py-1 hover:bg-ink hover:text-parchment-light transition-colors shadow-[2px_2px_0px_#2c2420] active:translate-y-[2px] active:shadow-none">
                            Pinjam
                        </a>
                    </div>
                </div>

                <!-- All Books 6 -->
                <div
                    class="group relative bg-white/40 backdrop-blur-sm border border-sepia-edge/30 p-4 shadow-sm hover:shadow-[4px_4px_0px_#d2b48c] transition-all duration-300 rounded-sm overflow-hidden flex flex-col h-full">
                    <div
                        class="relative aspect-[3/4] overflow-hidden shadow-md border-l-4 border-ink/20 mb-3 bg-white p-1">
                        <img src="https://via.placeholder.com/200x300/4B0082/E6E6FA?text=Picture+Dorian"
                            alt="The Picture of Dorian Gray" loading="lazy"
                            class="w-full h-full object-cover sepia-[0.2] group-hover:sepia-0 transition-all duration-700">
                        <div
                            class="absolute top-2 right-2 bg-parchment-base text-[10px] font-bold px-2 py-1 border border-sepia-edge/50 shadow-sm">
                            <span class="text-red-800">Dipinjam</span>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1">
                        <div
                            class="flex items-center gap-1 text-[10px] font-mono text-coffee/60 uppercase tracking-widest">
                            <x-lucide-tag class="w-3 h-3" /> Fiksi
                        </div>
                        <h3
                            class="text-sm font-bold text-ink italic leading-tight group-hover:text-coffee transition-colors line-clamp-2">
                            The Picture of Dorian Gray
                        </h3>
                        <p class="text-xs text-coffee/70 italic">Oscar Wilde</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-sepia-edge/30 flex items-center justify-between">
                        <x-ui.button href="/books/14" size="sm" variant="ghost">Lihat Detail</x-ui.button>
                        <span
                            class="text-[10px] font-bold uppercase tracking-widest text-red-800/60 border-2 border-red-800/20 border-dashed px-3 py-1 cursor-not-allowed rotate-[-2deg]">
                            Dipinjam
                        </span>
                    </div>
                </div>

                <!-- All Books 7 -->
                <div
                    class="group relative bg-white/40 backdrop-blur-sm border border-sepia-edge/30 p-4 shadow-sm hover:shadow-[4px_4px_0px_#d2b48c] transition-all duration-300 rounded-sm overflow-hidden flex flex-col h-full">
                    <div
                        class="relative aspect-[3/4] overflow-hidden shadow-md border-l-4 border-ink/20 mb-3 bg-white p-1">
                        <img src="https://via.placeholder.com/200x300/8B4513/FFF8DC?text=Anna+Karenina"
                            alt="Anna Karenina" loading="lazy"
                            class="w-full h-full object-cover sepia-[0.2] group-hover:sepia-0 transition-all duration-700">
                        <div
                            class="absolute top-2 right-2 bg-parchment-base text-[10px] font-bold px-2 py-1 border border-sepia-edge/50 shadow-sm">
                            <span class="text-green-800">Tersedia 4</span>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1">
                        <div
                            class="flex items-center gap-1 text-[10px] font-mono text-coffee/60 uppercase tracking-widest">
                            <x-lucide-tag class="w-3 h-3" /> Fiksi
                        </div>
                        <h3
                            class="text-sm font-bold text-ink italic leading-tight group-hover:text-coffee transition-colors line-clamp-2">
                            Anna Karenina
                        </h3>
                        <p class="text-xs text-coffee/70 italic">Leo Tolstoy</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-sepia-edge/30 flex items-center justify-between">
                        <x-ui.button href="/books/15" size="sm" variant="ghost">Lihat Detail</x-ui.button>
                        <a href="#"
                            class="text-[10px] font-bold uppercase tracking-widest text-ink border-2 border-ink px-3 py-1 hover:bg-ink hover:text-parchment-light transition-colors shadow-[2px_2px_0px_#2c2420] active:translate-y-[2px] active:shadow-none">
                            Pinjam
                        </a>
                    </div>
                </div>

                <!-- All Books 8 -->
                <div
                    class="group relative bg-white/40 backdrop-blur-sm border border-sepia-edge/30 p-4 shadow-sm hover:shadow-[4px_4px_0px_#d2b48c] transition-all duration-300 rounded-sm overflow-hidden flex flex-col h-full">
                    <div
                        class="relative aspect-[3/4] overflow-hidden shadow-md border-l-4 border-ink/20 mb-3 bg-white p-1">
                        <img src="https://via.placeholder.com/200x300/2C2420/F0F8FF?text=Crime+Punishment"
                            alt="Crime and Punishment" loading="lazy"
                            class="w-full h-full object-cover sepia-[0.2] group-hover:sepia-0 transition-all duration-700">
                        <div
                            class="absolute top-2 right-2 bg-parchment-base text-[10px] font-bold px-2 py-1 border border-sepia-edge/50 shadow-sm">
                            <span class="text-green-800">Tersedia 1</span>
                        </div>
                    </div>
                    <div class="space-y-2 flex-1">
                        <div
                            class="flex items-center gap-1 text-[10px] font-mono text-coffee/60 uppercase tracking-widest">
                            <x-lucide-tag class="w-3 h-3" /> Fiksi
                        </div>
                        <h3
                            class="text-sm font-bold text-ink italic leading-tight group-hover:text-coffee transition-colors line-clamp-2">
                            Crime and Punishment
                        </h3>
                        <p class="text-xs text-coffee/70 italic">Fyodor Dostoevsky</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-sepia-edge/30 flex items-center justify-between">
                        <x-ui.button href="/books/16" size="sm" variant="ghost">Lihat Detail</x-ui.button>
                        <a href="#"
                            class="text-[10px] font-bold uppercase tracking-widest text-ink border-2 border-ink px-3 py-1 hover:bg-ink hover:text-parchment-light transition-colors shadow-[2px_2px_0px_#2c2420] active:translate-y-[2px] active:shadow-none">
                            Pinjam
                        </a>
                    </div>
                </div>

            </div>

            <div class="mt-16">
                Page 1 of 5
            </div>
        </section>
    </div>
</x-layouts.app>
