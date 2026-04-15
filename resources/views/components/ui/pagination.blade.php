<nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center gap-4 py-10">
    <!-- Previous disabled (first page mock) -->
    <span class="px-4 py-2 text-xs uppercase tracking-widest text-coffee/30 border border-sepia-edge/10 italic cursor-not-allowed">
        ← Arsip Sebelumnya
    </span>

    <!-- Pages: 1 2(active) 3 4 5 ... -->
    <div class="hidden md:flex items-center gap-2 px-4 py-2 bg-parchment-base/50 border-x border-dashed border-sepia-edge/40 font-mono text-sm">
        <a href="#" class="w-8 h-8 flex items-center justify-center text-coffee hover:bg-sepia-edge/20 transition-colors rounded-full">1</a>
        <span class="w-8 h-8 flex items-center justify-center bg-coffee text-parchment-light rounded-full shadow-inner font-bold">2</span>
        <a href="#" class="w-8 h-8 flex items-center justify-center text-coffee hover:bg-sepia-edge/20 transition-colors rounded-full">3</a>
        <span class="px-2 text-coffee/40">...</span>
        <a href="#" class="w-8 h-8 flex items-center justify-center text-coffee hover:bg-sepia-edge/20 transition-colors rounded-full">10</a>
    </div>

    <!-- Next active -->
    <a href="#" class="px-4 py-2 text-xs uppercase tracking-widest text-coffee border border-sepia-edge/40 hover:bg-coffee hover:text-parchment-light transition-all duration-300 shadow-[3px_3px_0px_#d2b48c] active:shadow-none active:translate-x-[2px] active:translate-y-[2px]">
        Arsip Berikutnya →
    </a>
</nav>
