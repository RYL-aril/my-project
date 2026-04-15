<x-layouts.app>
    <div class="max-w-4xl mx-auto py-16 px-6">
        <div class="bg-[#fdfbf7] border-2 border-ink shadow-2xl">
            <div class="border-b border-ink/20 px-10 py-6 flex justify-between items-center">
                <div>
                    <h1 class="font-serif text-3xl italic font-black text-ink">
                        Arsip Koleksi
                    </h1>
                    <p class="text-[11px] font-mono uppercase tracking-[0.3em] text-ink/60">
                        Kartu Inventaris Scriptoria
                    </p>
                </div>
                <span class="text-xs font-mono uppercase bg-ink/5 border border-ink/20 px-3 py-1">
                    ID #1
                </span>
            </div>


            <div class="grid md:grid-cols-[200px_1fr] gap-10 p-10">
                {{-- sampul bukunyanyanya --}}
                <div class="space-y-4">
                    <div class="aspect-[2/3] border-2 border-ink bg-white shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=200&h=300&fit=crop"
                            class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="text-center text-[10px] font-mono uppercase text-ink/60">
                        Sampul Koleksi
                    </div>
                </div>


                {{-- METADATA --}}
                <div class="space-y-6">
                    <div>
                        <h2 class="font-serif text-3xl italic font-bold text-ink">
                            Sejarah Peradaban Barat
                        </h2>
                        <p class="text-lg text-ink/80 font-serif">
                            Will Durant
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-x-10 gap-y-4 text-sm">
                        <div>
                            <p class="text-[10px] font-mono uppercase text-ink/60">
                                ISBN
                            </p>
                            <p class="font-serif text-lg">
                                978-0-7432-7356-5
                            </p>
                        </div>
                        <div>
                            <p class="text-[10px] font-mono uppercase text-ink/60">
                                Kategori
                            </p>
                            <p class="font-serif text-lg">
                                Fiksi Klasik
                            </p>
                        </div>
                        <div>
                            <p class="text-[10px] font-mono uppercase text-ink/60">
                                Stok
                            </p>
                            <p class="font-serif text-lg">
                                3 / 5
                            </p>
                        </div>
                        <div>
                            <p class="text-[10px] font-mono uppercase text-ink/60">
                                Ditambahkan
                            </p>
                            <p class="font-serif text-lg">
                                15 Jan 2024
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Deskripsi --}}
            <div class="border-t border-ink/20 p-10">
                <h3 class="text-xs font-mono uppercase tracking-widest text-ink mb-4">
                    Catatan Pustakawan
                </h3>
                <p class="font-serif italic text-lg text-ink/80 leading-relaxed">
                    Sejarah Peradaban Barat adalah karya monumental yang menggambarkan perkembangan peradaban Barat dari
                    masa kuno hingga modern. Melalui analisis mendalam, Will Durant menelusuri akar budaya, seni,
                    filsafat, dan politik yang membentuk dunia kontemporer.
                </p>
            </div>


            {{-- Footer --}}
            <div class="border-t border-ink/20 px-10 py-6 flex justify-between items-center">
                <a href="/books"
                    class="inline-flex items-center gap-2 text-sm font-mono font-black uppercase hover:underline">
                    ← kembali ke rak
                </a>
                <div>
                    <a href="#"
                        class="inline-flex items-center gap-2 px-6 py-2 text-sm font-mono font-black uppercase bg-transparent text-ink border-2 border-ink shadow-[4px_4px_0px_rgba(44,36,32,1)] hover:translate-y-1 hover:shadow-[2px_2px_0px_rgba(44,36,32,1)] transition-all">
                        Pinjam &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
