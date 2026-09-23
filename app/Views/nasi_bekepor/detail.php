<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Playfair Display & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandDark: '#581C87',       /* Deep Purple */
                        brandDeep: '#3B0764',       /* Darkest Royal Purple */
                        brandPink: '#D946EF',       /* Fuchsia Accent */
                        brandPinkLight: '#F0ABFC',
                        brandCream: '#FAF6F0',      /* Editorial Cream */
                        brandCreamDark: '#EFE7DA',  /* Soft pedestal background */
                    },
                    fontFamily: {
                        serif: ['"Playfair Display"', 'serif'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .font-editorial-italic {
            font-family: 'Playfair Display', serif;
            font-style: italic;
        }
    </style>
</head>
<body class="bg-brandCream text-gray-900 font-sans antialiased selection:bg-brandPink selection:text-white pb-20">

    <!-- Navbar -->
    <nav class="bg-brandDark text-white px-6 sm:px-12 py-5 sticky top-0 z-40 backdrop-blur-md bg-brandDark/95 border-b border-brandPink/20">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="<?= base_url() ?>" class="font-serif text-xl sm:text-2xl tracking-[0.25em] font-extrabold uppercase hover:text-brandPinkLight transition">
                HANIF THEORY
            </a>
            <div class="flex items-center space-x-3">
                <a href="<?= base_url() ?>#katalog" class="border border-white/30 hover:border-brandPink hover:text-brandPink px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition">
                    &larr; Kembali ke Katalog
                </a>
                <button onclick="openModalEditDetail()" class="bg-brandPink hover:bg-brandPinkLight hover:text-brandDeep text-white px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition shadow-md flex items-center space-x-1">
                    <span>✏️</span>
                    <span>Edit Menu</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Detail Showcase Section -->
    <main class="max-w-7xl mx-auto pt-10 pb-16 px-6 sm:px-12">
        
        <!-- Breadcrumb -->
        <div class="flex items-center space-x-2 text-xs text-gray-500 mb-8 uppercase tracking-widest font-semibold">
            <a href="<?= base_url() ?>" class="hover:text-brandDark">HANIF THEORY</a>
            <span>/</span>
            <a href="<?= base_url() ?>#katalog" class="hover:text-brandDark">Katalog Nasi Bekepor</a>
            <span>/</span>
            <span class="text-brandPink"><?= esc($menu['kategori']) ?></span>
        </div>

        <!-- Detail Grid (Foto Besar Kiri, Informasi dan Fitur Tambahan Kanan) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Kolom Kiri: Showcase Foto Makanan AI & Badges -->
            <div class="lg:col-span-6 space-y-6">
                <div class="relative bg-[#E5D7C2] rounded-[36px] p-6 shadow-2xl border-2 border-white overflow-hidden group">
                    <img src="<?= esc($menu['gambar']) ?>" alt="<?= esc($menu['nama_makanan']) ?>" 
                         class="w-full aspect-[4/3] object-cover rounded-3xl shadow-xl transition-transform duration-700 group-hover:scale-105">
                    
                    <!-- AI & Origin Badges -->
                    <div class="absolute top-8 left-8 flex flex-col gap-2">
                        <span class="bg-brandDark/90 backdrop-blur-md text-white text-[11px] font-bold px-3.5 py-1.5 rounded-full border border-brandPink/30 uppercase tracking-widest flex items-center space-x-1.5 shadow-lg">
                            <span>✨</span>
                            <span>AI Culinary Masterpiece</span>
                        </span>
                        <span class="bg-brandPink text-white text-[10px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider shadow">
                            📍 <?= esc($menu['asal_daerah']) ?>
                        </span>
                    </div>

                    <!-- Rating pill -->
                    <div class="absolute top-8 right-8 bg-white/90 backdrop-blur-md text-brandDark font-bold text-xs px-3.5 py-1.5 rounded-full shadow-lg border border-brandDark/10 flex items-center space-x-1">
                        <span class="text-amber-500">★</span>
                        <span><?= esc($menu['rating']) ?> / 5.0</span>
                    </div>
                </div>

                <!-- Komposisi Rempah Otentik Kalimantan Timur -->
                <div class="bg-white/80 backdrop-blur border border-brandDark/10 rounded-3xl p-6 shadow-sm">
                    <h4 class="font-serif text-lg font-bold text-brandDark uppercase tracking-wider mb-4 flex items-center space-x-2">
                        <span>🌿</span>
                        <span>Racikan Rempah Khas Kutai</span>
                    </h4>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 text-xs">
                        <div class="bg-brandCream rounded-2xl p-3 border border-brandDark/10 text-center">
                            <span class="font-bold text-brandDark block">Beras Mahakam</span>
                            <span class="text-gray-500 text-[10px]">Pulen &amp; Beraroma</span>
                        </div>
                        <div class="bg-brandCream rounded-2xl p-3 border border-brandDark/10 text-center">
                            <span class="font-bold text-brandDark block">Santan Kelapa</span>
                            <span class="text-gray-500 text-[10px]">Gurih Lembut</span>
                        </div>
                        <div class="bg-brandCream rounded-2xl p-3 border border-brandDark/10 text-center">
                            <span class="font-bold text-brandDark block">Daun Salam</span>
                            <span class="text-gray-500 text-[10px]">Aroma Alami</span>
                        </div>
                        <div class="bg-brandCream rounded-2xl p-3 border border-brandDark/10 text-center">
                            <span class="font-bold text-brandDark block">Ikan Jambal</span>
                            <span class="text-gray-500 text-[10px]">Gurih Asin Renyah</span>
                        </div>
                        <div class="bg-brandCream rounded-2xl p-3 border border-brandDark/10 text-center">
                            <span class="font-bold text-brandDark block">Sambal Raja</span>
                            <span class="text-gray-500 text-[10px]">6 Sensasi Rasa</span>
                        </div>
                        <div class="bg-brandCream rounded-2xl p-3 border border-brandDark/10 text-center">
                            <span class="font-bold text-brandDark block">Minyak Sayur</span>
                            <span class="text-gray-500 text-[10px]">Tekstur Berkilau</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Detail Informasi, Filosofi, & FITUR TAMBAHAN Interaktif -->
            <div class="lg:col-span-6 space-y-8">
                
                <div>
                    <!-- Kategori Pill -->
                    <span class="border border-brandDark/40 text-brandDark text-[11px] font-bold uppercase tracking-[0.25em] px-4 py-1.5 rounded-full inline-block mb-3">
                        <?= esc($menu['kategori']) ?>
                    </span>

                    <!-- Nama Makanan -->
                    <h1 class="font-serif text-3xl sm:text-5xl font-extrabold text-brandDark leading-tight tracking-wide">
                        <?= esc($menu['nama_makanan']) ?>
                    </h1>

                    <!-- Harga & Stok -->
                    <div class="flex items-center space-x-6 mt-4">
                        <span class="font-serif text-3xl sm:text-4xl font-extrabold text-brandPink">
                            Rp <?= number_format($menu['harga'], 0, ',', '.') ?>
                        </span>
                        <div class="h-6 w-px bg-brandDark/20"></div>
                        <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-3.5 py-1.5 rounded-full border border-emerald-300">
                            ✓ Tersedia <?= esc($menu['stok']) ?> Porsi
                        </span>
                    </div>
                </div>

                <!-- Deskripsi Filosofis Editorial -->
                <div class="space-y-4 text-gray-700 leading-relaxed text-sm sm:text-base border-t border-b border-brandDark/15 py-6">
                    <p class="font-light">
                        <?= esc($menu['deskripsi']) ?>
                    </p>
                    <p class="text-xs text-gray-500 font-light italic">
                        "Setiap hidangan Nasi Bekepor disajikan selagi hangat dari periuk tembikar, menghasilkan harmoni cita rasa rempah pesisir dan kemewahan santap para bangsawan Kesultanan Kutai."
                    </p>
                </div>

                <!-- ============================================================== -->
                <!-- FITUR TAMBAHAN: SIMULASI PESANAN & KALKULATOR PORSI OTOMATIS   -->
                <!-- ============================================================== -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-xl border border-brandDark/10 space-y-6">
                    <div class="flex items-center justify-between border-b border-gray-100 pb-4">
                        <div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-brandPink">Fitur Tambahan Interaktif</span>
                            <h3 class="font-serif text-xl font-bold text-brandDark">Kalkulator Pesanan &amp; Level Rasa</h3>
                        </div>
                        <span class="text-2xl">⚡</span>
                    </div>

                    <!-- Pilihan Level Pedas Sambal Raja -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Level Pedas Sambal Raja:</label>
                        <div class="grid grid-cols-3 gap-2">
                            <label class="cursor-pointer">
                                <input type="radio" name="pedas" value="Sedang" checked class="peer sr-only" onchange="updateCalc()">
                                <div class="p-3 text-center rounded-2xl border border-gray-200 peer-checked:border-brandPink peer-checked:bg-purple-50 peer-checked:text-brandDark transition text-xs font-semibold">
                                    🌶️ Sedang
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="pedas" value="Pedas Mantap" class="peer sr-only" onchange="updateCalc()">
                                <div class="p-3 text-center rounded-2xl border border-gray-200 peer-checked:border-brandPink peer-checked:bg-purple-50 peer-checked:text-brandDark transition text-xs font-semibold">
                                    🌶️🌶️ Pedas
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="pedas" value="Gahar Mahakam" class="peer sr-only" onchange="updateCalc()">
                                <div class="p-3 text-center rounded-2xl border border-gray-200 peer-checked:border-brandPink peer-checked:bg-purple-50 peer-checked:text-brandDark transition text-xs font-semibold">
                                    🔥 Gahar
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Jumlah Porsi & Addons -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Jumlah Porsi:</label>
                            <div class="flex items-center space-x-3 bg-gray-50 border border-gray-200 rounded-full p-1.5 w-fit">
                                <button type="button" onclick="changeQty(-1)" class="w-8 h-8 rounded-full bg-white shadow text-brandDark font-bold hover:bg-brandPink hover:text-white transition flex items-center justify-center">-</button>
                                <span id="qtyDisplay" class="font-bold text-sm px-3">1</span>
                                <button type="button" onclick="changeQty(1)" class="w-8 h-8 rounded-full bg-white shadow text-brandDark font-bold hover:bg-brandPink hover:text-white transition flex items-center justify-center">+</button>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Pelengkap Khas:</label>
                            <label class="flex items-center space-x-2 text-xs font-medium text-gray-600 cursor-pointer">
                                <input type="checkbox" id="addSayurAsam" onchange="updateCalc()" class="rounded text-brandPink focus:ring-brandPink">
                                <span>+ Kuah Sayur Asam (+Rp 5.000)</span>
                            </label>
                            <label class="flex items-center space-x-2 text-xs font-medium text-gray-600 cursor-pointer mt-1">
                                <input type="checkbox" id="addLidahBuaya" onchange="updateCalc()" class="rounded text-brandPink focus:ring-brandPink">
                                <span>+ Es Lidah Buaya Kaltim (+Rp 7.000)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Total Estimasi & Tombol Reservasi -->
                    <div class="pt-4 border-t border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <span class="text-xs text-gray-500 uppercase tracking-wider block">Total Estimasi:</span>
                            <span id="totalDisplay" class="font-serif text-2xl font-black text-brandDark">
                                Rp <?= number_format($menu['harga'], 0, ',', '.') ?>
                            </span>
                        </div>
                        <button type="button" onclick="simulasiOrder()" class="bg-brandDark hover:bg-brandDeep text-white px-8 py-3.5 rounded-full text-xs font-bold uppercase tracking-widest shadow-xl hover:shadow-brandDark/40 transition">
                            Pesan / Reservasi
                        </button>
                    </div>
                </div>

                <!-- Navigasi Aksi CRUD Cepat -->
                <div class="flex items-center space-x-4 pt-2">
                    <button onclick="openModalEditDetail()" class="border border-brandDark text-brandDark hover:bg-brandDark hover:text-white px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition">
                        ✏️ Edit Data Menu Ini
                    </button>
                    <a href="<?= base_url('makanan/delete/' . $menu['id']) ?>" 
                       onclick="return confirm('Hapus permanen menu <?= esc($menu['nama_makanan']) ?>?')"
                       class="text-rose-600 hover:text-rose-800 text-xs font-bold uppercase tracking-wider py-2.5 transition">
                        🗑️ Hapus Menu
                    </a>
                </div>

            </div>
        </div>

        <!-- ============================================================== -->
        <!-- MENU REKOMENDASI TERKAIT (RELATED DISHES)                      -->
        <!-- ============================================================== -->
        <div class="mt-28 border-t border-brandDark/15 pt-16">
            <div class="flex items-center justify-between mb-10">
                <h3 class="font-serif text-2xl sm:text-3xl font-extrabold uppercase tracking-widest text-brandDark">
                    MENU LAINNYA DI HANIF THEORY
                </h3>
                <a href="<?= base_url() ?>#katalog" class="text-xs font-bold uppercase tracking-wider text-brandPink hover:underline">
                    Lihat Semua &rarr;
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                <?php foreach ($relatedMenus as $rel): ?>
                    <a href="<?= base_url('makanan/detail/' . $rel['id']) ?>" class="group block text-center">
                        <div class="relative w-full aspect-square bg-[#E5D7C2] rounded-[32px] p-4 flex items-center justify-center overflow-hidden shadow-md group-hover:shadow-xl transition-all duration-300">
                            <img src="<?= esc($rel['gambar']) ?>" alt="<?= esc($rel['nama_makanan']) ?>" 
                                 class="w-4/5 h-4/5 object-cover rounded-2xl shadow-lg transition-transform duration-500 group-hover:scale-105">
                            <span class="absolute top-3 right-3 bg-brandDark text-white text-[10px] font-bold px-2 py-0.5 rounded-full">
                                ★ <?= esc($rel['rating']) ?>
                            </span>
                        </div>
                        <span class="border border-brandDark/30 text-brandDark text-[9px] font-bold uppercase tracking-[0.2em] px-3 py-0.5 rounded-full inline-block mt-4">
                            <?= esc($rel['kategori']) ?>
                        </span>
                        <h4 class="font-serif text-base font-bold text-brandDark mt-2 group-hover:text-brandPink transition">
                            <?= esc($rel['nama_makanan']) ?>
                        </h4>
                        <p class="text-brandPink font-bold text-xs mt-1">
                            Rp <?= number_format($rel['harga'], 0, ',', '.') ?>
                        </p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-brandDark text-purple-200/80 py-10 px-6 text-center text-xs border-t border-brandPink/20 mt-16">
        <p class="font-serif text-lg tracking-[0.2em] uppercase text-white font-bold mb-2">HANIF THEORY</p>
        <p>Aplikasi Detail Kuliner Kalimantan Timur &bull; Nasi Bekepor &bull; Dibuat dengan CodeIgniter 4 &amp; Tailwind CSS</p>
    </footer>

    <!-- MODAL EDIT MENU DARI HALAMAN DETAIL -->
    <div id="modalEditDetail" class="fixed inset-0 bg-brandDeep/80 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-lg w-full p-8 shadow-2xl border border-brandPink/30 relative max-h-[90vh] overflow-y-auto">
            <button onclick="closeModalEditDetail()" class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 text-2xl font-bold">&times;</button>
            
            <div class="mb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-brandPink">Perbarui Data Menu</span>
                <h3 class="font-serif text-2xl font-bold text-brandDark mt-1">Edit <?= esc($menu['nama_makanan']) ?></h3>
            </div>

            <form action="<?= base_url('makanan/update/' . $menu['id']) ?>" method="post" class="space-y-4">
                <?= csrf_field() ?>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Nama Menu</label>
                    <input type="text" name="nama_makanan" value="<?= esc($menu['nama_makanan']) ?>" required 
                           class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Kategori</label>
                        <select name="kategori" required class="w-full bg-gray-50 border border-gray-300 rounded-xl px-3 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                            <option value="Paket Komplit" <?= $menu['kategori'] === 'Paket Komplit' ? 'selected' : '' ?>>Paket Komplit</option>
                            <option value="Olahan Daging" <?= $menu['kategori'] === 'Olahan Daging' ? 'selected' : '' ?>>Olahan Daging</option>
                            <option value="Olahan Ikan" <?= $menu['kategori'] === 'Olahan Ikan' ? 'selected' : '' ?>>Olahan Ikan</option>
                            <option value="Olahan Ayam" <?= $menu['kategori'] === 'Olahan Ayam' ? 'selected' : '' ?>>Olahan Ayam</option>
                            <option value="Menu Tradisional" <?= $menu['kategori'] === 'Menu Tradisional' ? 'selected' : '' ?>>Menu Tradisional</option>
                            <option value="Menu Spesial" <?= $menu['kategori'] === 'Menu Spesial' ? 'selected' : '' ?>>Menu Spesial</option>
                            <option value="Menu Hemat" <?= $menu['kategori'] === 'Menu Hemat' ? 'selected' : '' ?>>Menu Hemat</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Harga (Rp)</label>
                        <input type="number" name="harga" value="<?= esc($menu['harga']) ?>" required 
                               class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Stok Porsi</label>
                        <input type="number" name="stok" value="<?= esc($menu['stok']) ?>" required 
                               class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Rating</label>
                        <input type="number" step="0.1" max="5.0" min="1.0" name="rating" value="<?= esc($menu['rating']) ?>" 
                               class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">URL Gambar</label>
                    <input type="text" name="gambar" value="<?= esc($menu['gambar']) ?>" 
                           class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Deskripsi Singkat</label>
                    <textarea name="deskripsi" rows="3" required 
                              class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink"><?= esc($menu['deskripsi']) ?></textarea>
                </div>

                <div class="pt-4 flex justify-end space-x-3">
                    <button type="button" onclick="closeModalEditDetail()" class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider text-gray-500 hover:text-gray-700">
                        Batal
                    </button>
                    <button type="submit" class="bg-brandPink hover:bg-brandPinkLight hover:text-brandDeep text-white px-7 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-lg transition">
                        Perbarui Menu
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script Kalkulator Porsi & Modal -->
    <script>
        const basePrice = <?= (int) $menu['harga'] ?>;
        let currentQty = 1;

        function changeQty(delta) {
            currentQty = Math.max(1, currentQty + delta);
            document.getElementById('qtyDisplay').innerText = currentQty;
            updateCalc();
        }

        function updateCalc() {
            let addSayur = document.getElementById('addSayurAsam').checked ? 5000 : 0;
            let addLidah = document.getElementById('addLidahBuaya').checked ? 7000 : 0;
            let total = (basePrice + addSayur + addLidah) * currentQty;
            document.getElementById('totalDisplay').innerText = 'Rp ' + total.toLocaleString('id-ID');
        }

        function simulasiOrder() {
            let pedas = document.querySelector('input[name="pedas"]:checked').value;
            let total = document.getElementById('totalDisplay').innerText;
            alert('🎉 Terima kasih! Pesanan simulasi untuk <?= esc($menu['nama_makanan']) ?> (' + currentQty + ' porsi, Level: ' + pedas + ') dengan ' + total + ' berhasil dibuat!');
        }

        function openModalEditDetail() {
            document.getElementById('modalEditDetail').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModalEditDetail() {
            document.getElementById('modalEditDetail').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>
</body>
</html>
