<x-layouts.app>
    <div class="space-y-8 text-ink">
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end border-b-2 border-ink pb-4 gap-4">
            <div>
                <h2 class="text-3xl font-bold italic font-serif">Manajemen Pengguna</h2>
                <p class="text-xs uppercase tracking-widest text-muted mt-1">Daftar Keanggotaan & Pegawai</p>
            </div>
            <button onclick="alert('Mock: Open create user form!')"
                class="inline-flex items-center gap-2 px-4 py-2 border-2 border-ink font-mono font-black uppercase shadow-[4px_4px_0px_rgba(44,36,32,1)] hover:translate-y-[1px] transition-all bg-[#fcfaf5] text-ink text-sm tracking-[0.2em]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Tambah
            </button>
        </div>

        <!-- Search -->
        <div class="max-w-2xl mx-auto mb-12">
            <div
                class="relative flex shadow-[8px_8px_0px_rgba(44,36,32,1)] focus-within:shadow-[4px_4px_0px_rgba(44,36,32,1)] focus-within:translate-y-1 focus-within:translate-x-1 transition-all">
                <div class="relative flex-1">
                    <input type="text" name="search" oninput="filterTable(this.value)"
                        placeholder="CARI NAMA ATAU EMAIL..."
                        class="w-full pl-12 pr-4 py-4 bg-[#fcfaf5] border-2 border-ink border-r-0 focus:ring-0 font-mono text-sm placeholder-ink/40 uppercase" />
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-6 h-6 text-ink/60" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <div
                    class="bg-ink text-[#fcfaf5] px-8 py-4 font-mono font-black uppercase tracking-widest border-2 border-ink flex items-center justify-center select-none cursor-pointer hover:bg-coffee transition-colors">
                    Lacak
                </div>
            </div>
            <script>
                function filterTable(query) {
                    const rows = document.querySelectorAll('tbody tr');
                    rows.forEach(row => {
                        const text = row.textContent.toLowerCase();
                        row.style.display = text.includes(query.toLowerCase()) ? '' : 'none';
                    });
                }
            </script>
        </div>

        <!-- Tabel -->
        <div class="bg-white border-2 border-ink overflow-hidden shadow-lg rounded-lg">
            <table class="w-full text-left border-collapse">
                <thead class="bg-[#f8f6f1] text-xs uppercase tracking-widest border-b-2 border-ink font-mono font-bold">
                    <tr>
                        <th class="p-4 border-r border-ink w-1/3 cursor-pointer hover:bg-ink/20"
                            onclick="mockSort('name')">
                            <div class="flex items-center justify-between">
                                <span>Identitas Pengguna</span>
                                <span class="text-[10px] opacity-50 hover:opacity-100 transition-opacity">▲▼</span>
                            </div>
                        </th>
                        <th class="p-4 border-r border-ink cursor-pointer hover:bg-ink/20" onclick="mockSort('email')">
                            <div class="flex items-center justify-between">
                                <span>Kontak (Email)</span>
                                <span class="text-[10px] opacity-50 hover:opacity-100 transition-opacity">▲▼</span>
                            </div>
                        </th>
                        <th class="p-4 border-r border-ink text-left">Peran</th>
                        <th class="p-4 border-r border-ink w-28 text-center cursor-pointer hover:bg-ink/20"
                            onclick="mockSort('verify')">
                            <div class="flex items-center justify-center gap-2">
                                <span>Status</span>
                                <span class="text-[10px] opacity-50 hover:opacity-100 transition-opacity">▲▼</span>
                            </div>
                        </th>
                        <th class="p-4 text-right">Tindakan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-ink/20">
                    <!-- Static 5 dummy users -->
                    <tr class="hover:bg-[#f9f7f4] transition-colors">
                        <td class="p-4 border-r border-ink">
                            <div class="font-bold font-serif italic">John Doe</div>
                            <div class="text-sm font-mono">Administrator</div>
                        </td>
                        <td class="p-4 text-sm font-mono border-r border-ink">john.doe@scriptoria.com</td>
                        <td class="p-4 border-r border-ink">
                            <span
                                class="px-2 py-1 border border-ink text-[10px] font-bold uppercase tracking-widest bg-ink text-white">Admin</span>
                        </td>
                        <td class="p-4 border-r border-ink text-center">
                            <span
                                class="inline-block px-2 py-1 border border-green-700 bg-green-700 text-white text-xs font-bold uppercase tracking-widest">Terverifikasi</span>
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <a href="#" onclick="alert('Mock edit user')"
                                class="text-sm italic text-blue-700 hover:text-blue-500">✎ Ubah</a>
                            <button onclick="if(confirm('Hapus John Doe?')) alert('Mock delete!')"
                                class="text-sm italic text-red-700 hover:text-red-500">× Hapus</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-[#f9f7f4] transition-colors">
                        <td class="p-4 border-r border-ink">
                            <div class="font-bold font-serif italic">Jane Smith</div>
                            <div class="text-sm font-mono">Petugas Scriptoria</div>
                        </td>
                        <td class="p-4 text-sm font-mono border-r border-ink">jane.smith@scriptoria.com</td>
                        <td class="p-4 border-r border-ink">
                            <span
                                class="px-2 py-1 border border-ink text-[10px] font-bold uppercase tracking-widest">Staff</span>
                        </td>
                        <td class="p-4 border-r border-ink text-center">
                            <span
                                class="inline-block px-2 py-1 border border-yellow-700 text-yellow-800 text-xs font-bold uppercase tracking-widest">Pending</span>
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <a href="#" onclick="alert('Mock edit user')"
                                class="text-sm italic text-blue-700 hover:text-blue-500">✎ Ubah</a>
                            <button onclick="if(confirm('Hapus Jane Smith?')) alert('Mock delete!')"
                                class="text-sm italic text-red-700 hover:text-red-500">× Hapus</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-[#f9f7f4] transition-colors">
                        <td class="p-4 border-r border-ink">
                            <div class="font-bold font-serif italic">Bob Johnson</div>
                            <div class="text-sm font-mono">Anggota</div>
                        </td>
                        <td class="p-4 text-sm font-mono border-r border-ink">bob.johnson@scriptoria.com</td>
                        <td class="p-4 border-r border-ink">
                            <span
                                class="px-2 py-1 border border-ink text-[10px] font-bold uppercase tracking-widest bg-blue-500/20 text-blue-700">Member</span>
                        </td>
                        <td class="p-4 border-r border-ink text-center">
                            <span
                                class="inline-block px-2 py-1 border border-green-700 bg-green-700 text-white text-xs font-bold uppercase tracking-widest">Terverifikasi</span>
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <a href="#" onclick="alert('Mock edit user')"
                                class="text-sm italic text-blue-700 hover:text-blue-500">✎ Ubah</a>
                            <button onclick="if(confirm('Hapus Bob Johnson?')) alert('Mock delete!')"
                                class="text-sm italic text-red-700 hover:text-red-500">× Hapus</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-[#f9f7f4] transition-colors">
                        <td class="p-4 border-r border-ink">
                            <div class="font-bold font-serif italic">Alice Brown</div>
                            <div class="text-sm font-mono">Anggota</div>
                        </td>
                        <td class="p-4 text-sm font-mono border-r border-ink">alice.brown@scriptoria.com</td>
                        <td class="p-4 border-r border-ink">
                            <span
                                class="px-2 py-1 border border-ink text-[10px] font-bold uppercase tracking-widest bg-blue-500/20 text-blue-700">Member</span>
                        </td>
                        <td class="p-4 border-r border-ink text-center">
                            <span
                                class="inline-block px-2 py-1 border border-yellow-700 text-yellow-800 text-xs font-bold uppercase tracking-widest">Pending</span>
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <a href="#" onclick="alert('Mock edit user')"
                                class="text-sm italic text-blue-700 hover:text-blue-500">✎ Ubah</a>
                            <button onclick="if(confirm('Hapus Alice Brown?')) alert('Mock delete!')"
                                class="text-sm italic text-red-700 hover:text-red-500">× Hapus</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-[#f9f7f4] transition-colors">
                        <td class="p-4 border-r border-ink">
                            <div class="font-bold font-serif italic">Charlie Wilson</div>
                            <div class="text-sm font-mono">Petugas</div>
                        </td>
                        <td class="p-4 text-sm font-mono border-r border-ink">charlie.wilson@scriptoria.com</td>
                        <td class="p-4 border-r border-ink">
                            <span
                                class="px-2 py-1 border border-ink text-[10px] font-bold uppercase tracking-widest">Staff</span>
                        </td>
                        <td class="p-4 border-r border-ink text-center">
                            <span
                                class="inline-block px-2 py-1 border border-green-700 bg-green-700 text-white text-xs font-bold uppercase tracking-widest">Terverifikasi</span>
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <a href="#" onclick="alert('Mock edit user')"
                                class="text-sm italic text-blue-700 hover:text-blue-500">✎ Ubah</a>
                            <button onclick="if(confirm('Hapus Charlie Wilson?')) alert('Mock delete!')"
                                class="text-sm italic text-red-700 hover:text-red-500">× Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination mock -->
        <div class="pt-4 border-t-2 border-ink border-dotted flex justify-center">
            <nav class="flex items-center gap-1">
                <a href="#"
                    class="px-3 py-2 text-xs font-bold text-coffee border rounded hover:bg-coffee hover:text-white transition">«</a>
                <span class="px-2 text-coffee/50">1</span>
                <span class="px-3 py-2 bg-coffee text-white rounded font-bold">2</span>
                <span class="px-2 text-coffee/50">3</span>
                <a href="#"
                    class="px-3 py-2 text-xs font-bold text-coffee border rounded hover:bg-coffee hover:text-white transition">»</a>
            </nav>
        </div>
    </div>

    <script>
        function mockSort(field) {
            alert('Mock sort by ' + field);
        }
    </script>
</x-layouts.app>
