<aside
    class="fixed left-0 top-0 h-screen w-64 bg-[#fcfaf5] text-ink z-50 border-r flex flex-col shadow-[-10px_0_30px_rgba(44,36,32,0.03)_inset]">
    <div class="flex-shrink-0 pt-10 pb-8 px-6 text-center relative border-b">
        <div class="absolute bottom-[3px] left-6 right-6 border-b border-ink/10"></div>

        <x-lucide-book-open class="w-7 h-7 mx-auto text-ink mb-3 stroke-[1.5]" />
        <h1 class="font-serif text-2xl font-black tracking-[0.15em] text-ink uppercase">Scriptoria</h1>

        <div class="flex items-center justify-center gap-3 mt-3 opacity-80">
            <div class="h-px w-8 bg-coffee/40"></div>
            <p class="text-[9px] font-mono uppercase tracking-[0.3em] text-coffee">Digital Archive</p>
            <div class="h-px w-8 bg-coffee/40"></div>
        </div>
    </div>

    <nav class="flex-1 overflow-y-auto py-6">

        <x-layouts.partials.sidebar-item icon="dashboard" label="Dashboard" href="{{ route('admin.dashboard') }}" />

        <div class="px-8 mt-8 mb-3 flex items-center gap-2">
            <span class="text-[10px] font-bold uppercase tracking-widest text-coffee/50 font-serif">I. Katalog</span>
            <div class="h-px flex-1 bg-ink/5"></div>
        </div>

        <x-layouts.partials.sidebar-item icon="book" label="Buku" href="{{ route('books.index') }}" />

        <div class="px-8 mt-8 mb-3 flex items-center gap-2">
            <span class="text-[10px] font-bold uppercase tracking-widest text-coffee/50 font-serif">II. Manajemen</span>
            <div class="h-px flex-1 bg-ink/5"></div>
        </div>

        <x-layouts.partials.sidebar-item icon="users" label="Data Pengguna" href="{{ route('admin.users.index') }}" />
    </nav>

    <div class="flex-shrink-0 p-6 border-t bg-[#f9f7f1]">
        <a href="{{ route('profile') }}"
            class="flex items-center gap-3 px-4 py-2.5 text-sm font-serif text-coffee hover:text-ink transition-colors group">
            <x-lucide-circle-user-round class="w-4 h-4 opacity-60 group-hover:opacity-100 transition-opacity" />
            <span>Profil Pengguna</span>
        </a>

        <form method="POST" action="#" class="w-full mt-1">
            <button onclick="alert('Mock logout')"
                class="w-full flex items-center gap-3 px-4 py-2.5 text-sm font-serif text-coffee/80 hover:text-red-800 transition-colors group">
                <x-lucide-log-out class="w-4 h-4 opacity-60 group-hover:opacity-100 transition-opacity" />
                <span>Tutup Sesi</span>
            </button>
        </form>
    </div>
</aside>
