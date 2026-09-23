<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Playfair Display (Serif Editorial) & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandDark: '#581C87',       /* Deep Purple from prompt */
                        brandDeep: '#3B0764',       /* Darkest Royal Purple */
                        brandPink: '#D946EF',       /* Fuchsia Accent from prompt */
                        brandPinkLight: '#F0ABFC',
                        brandCream: '#FAF6F0',      /* Editorial Cream from reference */
                        brandCreamDark: '#EFE7DA',  /* Soft pedestal background */
                        brandMuted: '#9CA3AF',
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
            font-weight: 400;
        }
        .stamp-rotate {
            animation: spinSlow 20s linear infinite;
        }
        @keyframes spinSlow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="bg-brandCream text-gray-900 font-sans antialiased selection:bg-brandPink selection:text-white">

    <!-- Flash Messages (Tailwind Alert) -->
    <?php if (session()->getFlashdata('success')): ?>
        <div id="flash-success" class="fixed top-5 right-5 z-50 bg-emerald-700 text-white px-6 py-4 rounded-full shadow-2xl flex items-center space-x-3 border border-emerald-400/30">
            <span>✨ <?= session()->getFlashdata('success') ?></span>
            <button onclick="document.getElementById('flash-success').remove()" class="text-white/80 hover:text-white font-bold ml-2">&times;</button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div id="flash-error" class="fixed top-5 right-5 z-50 bg-rose-700 text-white px-6 py-4 rounded-full shadow-2xl flex items-center space-x-3 border border-rose-400/30">
            <span>⚠️ <?= session()->getFlashdata('error') ?></span>
            <button onclick="document.getElementById('flash-error').remove()" class="text-white/80 hover:text-white font-bold ml-2">&times;</button>
        </div>
    <?php endif; ?>

    <!-- ========================================== -->
    <!-- SECTION 1: HERO HEADER (DEEP PURPLE #581C87) -->
    <!-- ========================================== -->
    <header class="bg-brandDark text-white pt-6 pb-20 px-6 sm:px-12 relative overflow-hidden">
        
        <!-- Navbar -->
        <nav class="max-w-7xl mx-auto flex items-center justify-between border-b border-brandPink/20 pb-6">
            <a href="<?= base_url() ?>" class="font-serif text-2xl tracking-[0.25em] font-extrabold uppercase hover:text-brandPinkLight transition">
                HANIF THEORY
            </a>

            <div class="flex items-center space-x-3 sm:space-x-4">
                <a href="#katalog" class="border border-white/40 hover:border-brandPink hover:text-brandPink px-4 py-1.5 rounded-full text-xs font-medium uppercase tracking-wider transition">
                    Menu
                </a>
                <a href="#heritage" class="border border-white/40 hover:border-brandPink hover:text-brandPink px-4 py-1.5 rounded-full text-xs font-medium uppercase tracking-wider transition hidden sm:inline-block">
                    Asal Usul
                </a>
                <button onclick="openModalTambah()" class="bg-brandPink hover:bg-brandPinkLight hover:text-brandDeep text-white font-semibold px-4 py-1.5 rounded-full text-xs uppercase tracking-wider transition shadow-md shadow-brandPink/30 flex items-center space-x-1">
                    <span>+</span>
                    <span>Tambah Menu</span>
                </button>
                <div class="flex items-center space-x-3 pl-2 text-white/90">
                    <span class="text-xs font-semibold bg-white/10 px-3 py-1 rounded-full border border-white/20">
                        📍 Kaltim
                    </span>
                    <button class="hover:text-brandPink transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Big Hero Title & Description -->
        <div class="max-w-4xl mx-auto text-center mt-16 sm:mt-20">
            <div class="inline-block bg-brandPink/20 border border-brandPink/40 text-brandPinkLight px-4 py-1 rounded-full text-[11px] font-bold uppercase tracking-widest mb-4">
                ✨ Traditional Kutai Rice Reimagined
            </div>
            <h1 class="font-serif text-5xl sm:text-7xl lg:text-8xl tracking-[0.08em] font-extrabold uppercase leading-none drop-shadow-sm">
                HANIF THEORY
            </h1>
            <p class="mt-6 text-sm sm:text-base text-purple-200/90 max-w-2xl mx-auto leading-relaxed font-light">
                At Hanif Theory, we turn fragrant rice, infused coconut milk, and ancient Kutai herbs into royal culinary perfection. Warm, savory, and delicately spiced — each mouthful is a royal experiment in sheer happiness.
            </p>
        </div>

        <!-- 3 Featured Plates (Dilengkapi Gambar AI Nasi Bekepor) -->
        <div class="max-w-6xl mx-auto mt-14 grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 items-center">
            <!-- Plate 1 (AI Image) -->
            <a href="<?= base_url('makanan/detail/1') ?>" class="group relative rounded-3xl overflow-hidden bg-brandDeep/60 border border-brandPink/30 shadow-2xl transition-all duration-500 hover:-translate-y-2 block">
                <div class="h-64 sm:h-72 overflow-hidden">
                    <img src="<?= base_url('images/nasi_bekepor_ai.jpg') ?>" alt="Nasi Bekepor Daging Masak Bumi" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-brandDeep via-brandDeep/20 to-transparent flex items-end p-5">
                    <div>
                        <span class="text-[10px] font-bold tracking-widest uppercase bg-brandPink text-white px-2.5 py-0.5 rounded-full inline-block mb-1">✨ AI Generated Art</span>
                        <h4 class="font-serif text-xl font-bold text-white">Nasi Bekepor Daging Bumi</h4>
                        <span class="text-xs text-brandPinkLight font-semibold">Lihat Detail &rarr;</span>
                    </div>
                </div>
            </a>

            <!-- Plate 2 (Centerpiece / AI Detail Highlight) -->
            <a href="<?= base_url('makanan/detail/8') ?>" class="group relative rounded-3xl overflow-hidden bg-brandDeep/60 border-2 border-brandPink shadow-2xl transition-all duration-500 hover:-translate-y-3 md:-translate-y-4 block">
                <div class="h-72 sm:h-80 overflow-hidden">
                    <img src="<?= base_url('images/nasi_bekepor_detail_ai.jpg') ?>" alt="Nasi Bekepor Royal Sultan" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-brandDeep via-brandDeep/30 to-transparent flex items-end p-6">
                    <div>
                        <span class="bg-brandPink text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2 inline-block">✨ AI Royal Feast</span>
                        <h4 class="font-serif text-2xl font-bold text-white">Nasi Bekepor Royal Sultan</h4>
                        <span class="text-xs text-brandPinkLight font-semibold">Jelajahi Resep Keraton &rarr;</span>
                    </div>
                </div>
            </a>

            <!-- Plate 3 -->
            <a href="<?= base_url('makanan/detail/2') ?>" class="group relative rounded-3xl overflow-hidden bg-brandDeep/60 border border-brandPink/30 shadow-2xl transition-all duration-500 hover:-translate-y-2 block">
                <div class="h-64 sm:h-72 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?auto=format&fit=crop&w=700&q=80" alt="Nasi Bekepor Ikan Haruan" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-brandDeep via-brandDeep/20 to-transparent flex items-end p-5">
                    <div>
                        <span class="text-[11px] font-semibold tracking-widest uppercase text-brandPinkLight">Sungai Mahakam</span>
                        <h4 class="font-serif text-xl font-bold text-white">Nasi Bekepor Ikan Haruan</h4>
                        <span class="text-xs text-brandPinkLight font-semibold">Lihat Detail &rarr;</span>
                    </div>
                </div>
            </a>
        </div>
    </header>


    <!-- ========================================== -->
    <!-- SECTION 2: THE PROOF IS IN THE SPICES      -->
    <!-- (Cream background dengan foto + ilustrasi) -->
    <!-- ========================================== -->
    <section id="heritage" class="max-w-7xl mx-auto py-24 px-6 sm:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        <!-- Kolom Kiri: Foto berseni + badge doodle -->
        <div class="lg:col-span-6 relative">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white aspect-[4/3]">
                <img src="<?= base_url('images/nasi_bekepor_ai.jpg') ?>" alt="Rempah Nasi Bekepor Hanif Theory" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-brandDark/10 mix-blend-multiply"></div>
            </div>

            <!-- Artistic line doodle badge overlay -->
            <div class="absolute -bottom-8 -right-4 sm:-bottom-10 sm:right-6 bg-brandDark text-white p-6 rounded-3xl shadow-2xl border-2 border-brandPink/40 max-w-[240px] transform rotate-2">
                <span class="text-2xl block mb-1">👑</span>
                <p class="font-serif text-sm font-semibold tracking-wide leading-tight">Hanif Theory: Cita Rasa Bangsawan Kutai Abad ke-13</p>
            </div>
        </div>

        <!-- Kolom Kanan: Teks Editorial dengan font cursive italic -->
        <div class="lg:col-span-6 lg:pl-6">
            <h2 class="font-serif text-4xl sm:text-5xl lg:text-6xl uppercase tracking-wider text-brandDark font-extrabold leading-[1.1]">
                THE PROOF <br>
                IS IN THE <span class="font-editorial-italic lowercase text-brandPink font-normal">spices</span>
            </h2>
            <div class="mt-8 space-y-5 text-gray-700 font-light leading-relaxed text-sm sm:text-base">
                <p>
                    Di bawah naungan <strong>HANIF THEORY</strong>, Nasi Bekepor dihadirkan kembali dengan menjaga keaslian racikan bumbu khas Kesultanan Kutai Kartanegara, Kalimantan Timur.
                </p>
                <p>
                    Beras dimasak perlahan di dalam kuali tembikar dengan santan kelapa murni, daun kemangi segar, dan irisan ikan asin jambal roti. Dipadukan dengan Sambal Raja 6 rasa yang pedas bergelora.
                </p>
            </div>
            <div class="mt-8 pt-6 border-t border-brandDark/15 flex items-center space-x-6">
                <div>
                    <span class="block font-serif text-3xl font-extrabold text-brandDark">100%</span>
                    <span class="text-xs uppercase tracking-wider text-gray-500 font-medium">Bahan Asli Kaltim</span>
                </div>
                <div class="h-10 w-px bg-brandDark/20"></div>
                <div>
                    <span class="block font-serif text-3xl font-extrabold text-brandDark">AI Ready</span>
                    <span class="text-xs uppercase tracking-wider text-gray-500 font-medium">Visual Generatif</span>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================================== -->
    <!-- SECTION 3: BEST SELLERS & CRUD MENU LISTING                    -->
    <!-- (Header dengan garis panjang + Card Pedestal + Filter/Sort)    -->
    <!-- ============================================================== -->
    <section id="katalog" class="max-w-7xl mx-auto py-16 px-6 sm:px-12">
        
        <!-- Header Section dengan Garis Panjang persis di referensi -->
        <div class="flex items-center justify-between pb-8">
            <div class="flex items-center space-x-6 flex-1">
                <h3 class="font-serif text-3xl sm:text-4xl uppercase tracking-[0.15em] font-extrabold text-brandDark whitespace-nowrap">
                    BEST SELLERS
                </h3>
                <div class="h-[2px] bg-brandDark/30 w-full hidden sm:block"></div>
            </div>
            
            <!-- Tombol Tambah Menu CRUD Utama -->
            <button onclick="openModalTambah()" class="ml-6 bg-brandDark hover:bg-brandDeep text-white px-5 py-2.5 rounded-full text-xs uppercase tracking-wider font-semibold shadow-lg hover:shadow-brandDark/30 transition flex items-center space-x-2 whitespace-nowrap">
                <span class="text-base leading-none text-brandPink font-bold">+</span>
                <span>Tambah Menu</span>
            </button>
        </div>

        <!-- Filter, Sorting & Live Search Controls (Menggunakan Tailwind) -->
        <div class="bg-brandCreamDark/60 backdrop-blur border border-brandDark/10 rounded-2xl p-5 mb-12 shadow-sm">
            <form action="<?= base_url() ?>" method="get" id="filterFormMain" class="flex flex-col md:flex-row gap-4 items-center justify-between">
                
                <!-- Category Pills (Filter) -->
                <div class="flex items-center gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0 scrollbar-none">
                    <span class="text-xs font-bold uppercase tracking-wider text-brandDark/60 mr-1 hidden sm:inline">Kategori:</span>
                    <a href="javascript:void(0)" onclick="applyCategory('Semua')" 
                       class="px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider border transition whitespace-nowrap <?= $selectedKat === 'Semua' ? 'bg-brandDark text-white border-brandDark shadow' : 'bg-white/80 text-brandDark border-brandDark/20 hover:border-brandDark' ?>">
                        Semua
                    </a>
                    <?php foreach ($categories as $cat): ?>
                        <a href="javascript:void(0)" onclick="applyCategory('<?= esc($cat) ?>')" 
                           class="px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider border transition whitespace-nowrap <?= $selectedKat === $cat ? 'bg-brandDark text-white border-brandDark shadow' : 'bg-white/80 text-brandDark border-brandDark/20 hover:border-brandDark' ?>">
                            <?= esc($cat) ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <input type="hidden" name="kategori" id="inputKategori" value="<?= esc($selectedKat) ?>">

                <!-- Search & Sorting Dropdown -->
                <div class="flex items-center gap-3 w-full md:w-auto">
                    <div class="relative flex-1 md:w-56">
                        <input type="text" name="search" placeholder="Cari menu..." value="<?= esc($searchQuery) ?>" 
                               class="w-full bg-white border border-brandDark/20 rounded-full py-1.5 pl-9 pr-3 text-xs text-gray-800 placeholder-gray-400 focus:outline-none focus:border-brandPink">
                        <svg class="w-4 h-4 text-gray-400 absolute left-3 top-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>

                    <!-- Sorting Dropdown -->
                    <select name="sort" onchange="document.getElementById('filterFormMain').submit()" 
                            class="bg-white border border-brandDark/20 rounded-full py-1.5 px-4 text-xs font-medium text-brandDark focus:outline-none focus:border-brandPink cursor-pointer">
                        <option value="">Urutkan</option>
                        <option value="harga_asc" <?= $selectedSort === 'harga_asc' ? 'selected' : '' ?>>Harga: Rendah ke Tinggi</option>
                        <option value="harga_desc" <?= $selectedSort === 'harga_desc' ? 'selected' : '' ?>>Harga: Tinggi ke Rendah</option>
                        <option value="nama_asc" <?= $selectedSort === 'nama_asc' ? 'selected' : '' ?>>Nama: A - Z</option>
                        <option value="nama_desc" <?= $selectedSort === 'nama_desc' ? 'selected' : '' ?>>Nama: Z - A</option>
                        <option value="rating_desc" <?= $selectedSort === 'rating_desc' ? 'selected' : '' ?>>Rating Tertinggi</option>
                    </select>

                    <?php if (!empty($searchQuery) || ($selectedKat !== 'Semua' && !empty($selectedKat)) || !empty($selectedSort)): ?>
                        <a href="<?= base_url() ?>" class="text-xs text-brandDark/60 hover:text-brandDark underline whitespace-nowrap">Reset</a>
                    <?php endif; ?>
                </div>
            </form>
        </div>

        <!-- 4-Column Card Grid (Persis tata letak Best Sellers di gambar referensi) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php if (!empty($menuList)): ?>
                <?php foreach ($menuList as $item): ?>
                    <div class="group flex flex-col items-center text-center">
                        
                        <!-- Card Pedestal Container -->
                        <div class="relative w-full aspect-square bg-[#E5D7C2] rounded-[32px] p-5 flex items-center justify-center overflow-hidden shadow-md group-hover:shadow-xl transition-all duration-300">
                            <!-- Circular Pedestal Illusion -->
                            <div class="absolute bottom-4 w-4/5 h-10 bg-brandDark/20 rounded-[100%] blur-[6px]"></div>
                            <div class="absolute bottom-6 w-3/4 h-8 bg-brandDark/70 rounded-[100%] border border-brandPink/30"></div>
                            
                            <!-- Foto Makanan Nasi Bekepor -->
                            <a href="<?= base_url('makanan/detail/' . $item['id']) ?>" class="relative z-10 w-4/5 h-4/5 block">
                                <img src="<?= esc($item['gambar']) ?>" alt="<?= esc($item['nama_makanan']) ?>" 
                                     class="w-full h-full object-cover rounded-2xl shadow-xl transition-transform duration-500 group-hover:scale-105 group-hover:-translate-y-2">
                            </a>

                            <!-- Rating badge -->
                            <span class="absolute top-3 right-3 z-20 bg-brandDark/85 backdrop-blur text-white text-[11px] font-bold px-2.5 py-1 rounded-full border border-brandPink/30 flex items-center space-x-1">
                                <span class="text-amber-300">★</span>
                                <span><?= esc($item['rating']) ?></span>
                            </span>

                            <!-- Floating Action Buttons (Detail, CRUD Edit & Delete) -->
                            <div class="absolute inset-0 bg-brandDark/80 backdrop-blur-[2px] opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center gap-2 z-30 p-4">
                                <a href="<?= base_url('makanan/detail/' . $item['id']) ?>" 
                                   class="bg-brandPink hover:bg-brandPinkLight hover:text-brandDark text-white font-bold px-4 py-2 rounded-full text-xs transition shadow-lg w-32 flex items-center justify-center space-x-1">
                                    <span>👁️</span>
                                    <span>Detail Menu</span>
                                </a>
                                <div class="flex items-center space-x-2">
                                    <button onclick='openModalEdit(<?= json_encode($item) ?>)' 
                                            class="bg-white hover:bg-gray-100 text-brandDark font-semibold px-3 py-1.5 rounded-full text-xs transition shadow flex items-center space-x-1">
                                        <span>✏️</span>
                                        <span>Edit</span>
                                    </button>
                                    <a href="<?= base_url('makanan/delete/' . $item['id']) ?>" 
                                       onclick="return confirm('Apakah Anda yakin ingin menghapus menu \'<?= esc($item['nama_makanan']) ?>\'?')"
                                       class="bg-rose-600 hover:bg-rose-700 text-white font-semibold px-3 py-1.5 rounded-full text-xs transition shadow flex items-center space-x-1">
                                        <span>🗑️</span>
                                        <span>Hapus</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Pill Tag (Persis di bawah gambar seperti CROISSANT / BAGUETTE) -->
                        <div class="mt-5">
                            <span class="border border-brandDark/40 text-brandDark text-[10px] font-bold uppercase tracking-[0.2em] px-4 py-1 rounded-full inline-block">
                                <?= esc($item['kategori']) ?>
                            </span>
                        </div>

                        <!-- Menu Name (Link to Detail) & Price -->
                        <a href="<?= base_url('makanan/detail/' . $item['id']) ?>" class="font-serif text-lg font-bold text-brandDark mt-3 leading-snug hover:text-brandPink transition block">
                            <?= esc($item['nama_makanan']) ?>
                        </a>
                        
                        <p class="text-brandPink font-extrabold text-sm mt-1">
                            Rp <?= number_format($item['harga'], 0, ',', '.') ?>
                        </p>

                        <!-- Deskripsi Singkat persis seperti caption referensi -->
                        <p class="text-gray-600 text-xs mt-2 line-clamp-2 leading-relaxed max-w-[240px]">
                            <?= esc($item['deskripsi']) ?>
                        </p>

                        <!-- Link Detail Bawah -->
                        <a href="<?= base_url('makanan/detail/' . $item['id']) ?>" class="text-[11px] text-brandDark/70 hover:text-brandPink font-bold mt-2 underline">
                            Selengkapnya &rarr;
                        </a>

                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-16 bg-white/60 rounded-3xl border border-brandDark/10">
                    <p class="font-serif text-2xl text-brandDark">Menu Tidak Ditemukan</p>
                    <p class="text-sm text-gray-500 mt-2">Tidak ada menu yang sesuai dengan filter atau kata kunci pencarian.</p>
                    <a href="<?= base_url() ?>" class="mt-4 inline-block bg-brandDark text-white px-6 py-2 rounded-full text-xs uppercase tracking-wider font-semibold">Tampilkan Semua</a>
                </div>
            <?php endif; ?>
        </div>
    </section>


    <!-- ============================================================== -->
    <!-- SECTION 4: THE MAGIC BEHIND HANIF THEORY                       -->
    <!-- (Deep background dengan 2 foto besar berdampingan)             -->
    <!-- ============================================================== -->
    <section class="bg-brandDark text-white py-24 px-6 sm:px-12 mt-12">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-14">
                <h3 class="font-serif text-3xl sm:text-5xl uppercase tracking-[0.1em] font-extrabold">
                    THE <span class="font-editorial-italic lowercase text-brandPink font-normal">magic</span> BEHIND HANIF THEORY
                </h3>
                <p class="text-purple-200/80 text-sm max-w-xl mx-auto mt-4 font-light">
                    Kombinasi beras pulen lokal Mahakam, kelapa tua pilihan, daun kemangi segar, dan racikan sambal raja yang diproses secara tradisional.
                </p>
            </div>

            <!-- 2 Foto Besar Berdampingan (Foto AI Nasi Bekepor) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Foto 1: AI Masterpiece -->
                <div class="rounded-3xl overflow-hidden shadow-2xl border border-brandPink/30 group relative aspect-[4/3]">
                    <img src="<?= base_url('images/nasi_bekepor_detail_ai.jpg') ?>" alt="AI Masterpiece Hanif Theory" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-brandDeep via-brandDeep/30 to-transparent flex items-end p-8">
                        <div>
                            <span class="text-brandPinkLight text-xs font-bold tracking-widest uppercase">✨ AI Visual Generatif</span>
                            <h4 class="font-serif text-2xl font-bold text-white mt-1">Daging Masak Bumi &amp; Sambal Raja</h4>
                            <p class="text-purple-200 text-xs mt-2 max-w-md font-light leading-relaxed">
                                Gurih daging sapi karamelisasi dengan pedas tajam sambal terong ungu goreng khas pesisir Kutai.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Foto 2: Nasi Bekepor Kendil -->
                <div class="rounded-3xl overflow-hidden shadow-2xl border border-brandPink/30 group relative aspect-[4/3]">
                    <img src="<?= base_url('images/nasi_bekepor_ai.jpg') ?>" alt="Kendil Nasi Bekepor Hanif Theory" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-brandDeep via-brandDeep/30 to-transparent flex items-end p-8">
                        <div>
                            <span class="text-brandPinkLight text-xs font-bold tracking-widest uppercase">Tradisi Kendil Besi</span>
                            <h4 class="font-serif text-2xl font-bold text-white mt-1">Nasi Liwet Bekepor Matang Sempurna</h4>
                            <p class="text-purple-200 text-xs mt-2 max-w-md font-light leading-relaxed">
                                Dimasak di atas arang menyala sampai menciptakan kerak nasi (*intip*) gurih khas yang sangat dicari.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================================== -->
    <!-- SECTION 5: READY TO TASTE & STAMP BADGE                        -->
    <!-- (Split Call to action dengan circular badge seperti di gambar) -->
    <!-- ============================================================== -->
    <section class="max-w-7xl mx-auto py-20 px-6 sm:px-12 grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        <!-- Kolom Kiri: Headline & CTA -->
        <div class="lg:col-span-6 space-y-6">
            <h3 class="font-serif text-4xl sm:text-5xl uppercase tracking-wider text-brandDark font-extrabold leading-[1.15]">
                READY TO TASTE <br>
                THE <span class="font-editorial-italic lowercase text-brandPink font-normal">heritage</span>?
            </h3>
            <p class="text-gray-600 text-sm sm:text-base leading-relaxed max-w-md font-light">
                Kunjungi gerai <strong>HANIF THEORY</strong> atau pesan paket istimewa Nasi Bekepor Kutai Kartanegara langsung ke meja Anda. Cita rasa kehangatan Kalimantan Timur yang selalu dirindukan.
            </p>
            <div class="pt-2 flex flex-wrap gap-4">
                <button onclick="openModalTambah()" class="bg-brandDark hover:bg-brandDeep text-white px-7 py-3 rounded-full text-xs font-bold uppercase tracking-widest shadow-xl transition hover:shadow-brandDark/40">
                    Tambah Menu Sekarang
                </button>
                <a href="#katalog" class="border border-brandDark/40 hover:border-brandDark text-brandDark px-7 py-3 rounded-full text-xs font-bold uppercase tracking-widest transition">
                    Jelajahi Menu
                </a>
            </div>
        </div>

        <!-- Kolom Kanan: Stamp Seal + Big Banquet Picture -->
        <div class="lg:col-span-6 relative flex items-center justify-center">
            <!-- Circular Stamp Badge -->
            <div class="absolute -left-6 z-20 w-28 h-28 sm:w-32 sm:h-32 bg-brandPink text-white rounded-full flex items-center justify-center shadow-2xl border-4 border-white stamp-rotate">
                <svg class="w-full h-full p-2" viewBox="0 0 100 100">
                    <path id="circlePath" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="none"/>
                    <text font-size="8" font-weight="bold" fill="currentColor" letter-spacing="2">
                        <textPath xlink:href="#circlePath" startOffset="0%">
                            • KALIMANTAN TIMUR • HANIF THEORY •
                        </textPath>
                    </text>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-xl">
                    🍛
                </div>
            </div>

            <!-- Banquet Box / Platter Image -->
            <div class="w-full rounded-3xl overflow-hidden shadow-2xl border-4 border-white aspect-[16/11]">
                <img src="<?= base_url('images/nasi_bekepor_detail_ai.jpg') ?>" alt="Sajian Nasi Bekepor Hanif Theory" class="w-full h-full object-cover">
            </div>
        </div>
    </section>


    <!-- ========================================== -->
    <!-- FOOTER                                     -->
    <!-- ========================================== -->
    <footer class="bg-brandDark text-purple-200/80 py-12 px-6 border-t border-brandPink/20 text-center text-xs">
        <p class="font-serif text-lg tracking-[0.2em] uppercase text-white font-bold mb-2">HANIF THEORY</p>
        <p>Aplikasi CRUD &amp; Detail Katalog Kuliner &bull; Kalimantan Timur &bull; Tema: #D946EF &amp; #581C87</p>
        <p class="mt-2 text-white/50">&copy; <?= date('Y') ?> Hanif Theory. Dibuat dengan CodeIgniter 4 &amp; Tailwind CSS.</p>
    </footer>


    <!-- ============================================================== -->
    <!-- MODAL CRUD 1: TAMBAH MENU (CREATE)                             -->
    <!-- ============================================================== -->
    <div id="modalTambah" class="fixed inset-0 bg-brandDeep/80 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-lg w-full p-8 shadow-2xl border border-brandPink/30 relative max-h-[90vh] overflow-y-auto">
            <button onclick="closeModalTambah()" class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 text-2xl font-bold">&times;</button>
            
            <div class="mb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-brandPink">Formulir Tambah Menu</span>
                <h3 class="font-serif text-2xl font-bold text-brandDark mt-1">Tambah Nasi Bekepor Baru</h3>
            </div>

            <form action="<?= base_url('makanan/store') ?>" method="post" class="space-y-4">
                <?= csrf_field() ?>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Nama Menu Makanan</label>
                    <input type="text" name="nama_makanan" required placeholder="Contoh: Nasi Bekepor Daging Masak Bumi" 
                           class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Kategori</label>
                        <select name="kategori" required class="w-full bg-gray-50 border border-gray-300 rounded-xl px-3 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                            <option value="Paket Komplit">Paket Komplit</option>
                            <option value="Olahan Daging">Olahan Daging</option>
                            <option value="Olahan Ikan">Olahan Ikan</option>
                            <option value="Olahan Ayam">Olahan Ayam</option>
                            <option value="Menu Tradisional">Menu Tradisional</option>
                            <option value="Menu Spesial">Menu Spesial</option>
                            <option value="Menu Hemat">Menu Hemat</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Harga (Rp)</label>
                        <input type="number" name="harga" required placeholder="35000" 
                               class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Stok Porsi</label>
                        <input type="number" name="stok" required value="20" 
                               class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Rating (1.0 - 5.0)</label>
                        <input type="number" step="0.1" max="5.0" min="1.0" name="rating" value="4.9" 
                               class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">URL Gambar / Foto Makanan</label>
                    <input type="text" name="gambar" placeholder="<?= base_url('images/nasi_bekepor_ai.jpg') ?>" 
                           class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                    <span class="text-[11px] text-gray-400">Kosongkan jika ingin menggunakan gambar AI default.</span>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Deskripsi Singkat</label>
                    <textarea name="deskripsi" rows="3" required placeholder="Jelaskan aroma dan racikan bumbu khas..." 
                              class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink"></textarea>
                </div>

                <div class="pt-4 flex justify-end space-x-3">
                    <button type="button" onclick="closeModalTambah()" class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider text-gray-500 hover:text-gray-700">
                        Batal
                    </button>
                    <button type="submit" class="bg-brandDark hover:bg-brandDeep text-white px-7 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-lg hover:shadow-brandDark/30 transition">
                        Simpan Menu
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- ============================================================== -->
    <!-- MODAL CRUD 2: EDIT MENU (UPDATE)                               -->
    <!-- ============================================================== -->
    <div id="modalEdit" class="fixed inset-0 bg-brandDeep/80 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-lg w-full p-8 shadow-2xl border border-brandPink/30 relative max-h-[90vh] overflow-y-auto">
            <button onclick="closeModalEdit()" class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 text-2xl font-bold">&times;</button>
            
            <div class="mb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-brandPink">Perbarui Data</span>
                <h3 class="font-serif text-2xl font-bold text-brandDark mt-1">Edit Menu Nasi Bekepor</h3>
            </div>

            <form id="formEdit" action="" method="post" class="space-y-4">
                <?= csrf_field() ?>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Nama Menu Makanan</label>
                    <input type="text" id="edit_nama" name="nama_makanan" required 
                           class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Kategori</label>
                        <select id="edit_kategori" name="kategori" required class="w-full bg-gray-50 border border-gray-300 rounded-xl px-3 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                            <option value="Paket Komplit">Paket Komplit</option>
                            <option value="Olahan Daging">Olahan Daging</option>
                            <option value="Olahan Ikan">Olahan Ikan</option>
                            <option value="Olahan Ayam">Olahan Ayam</option>
                            <option value="Menu Tradisional">Menu Tradisional</option>
                            <option value="Menu Spesial">Menu Spesial</option>
                            <option value="Menu Hemat">Menu Hemat</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Harga (Rp)</label>
                        <input type="number" id="edit_harga" name="harga" required 
                               class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Stok Porsi</label>
                        <input type="number" id="edit_stok" name="stok" required 
                               class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Rating</label>
                        <input type="number" step="0.1" max="5.0" min="1.0" id="edit_rating" name="rating" 
                               class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">URL Gambar / Foto</label>
                    <input type="text" id="edit_gambar" name="gambar" 
                           class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Deskripsi Singkat</label>
                    <textarea id="edit_deskripsi" name="deskripsi" rows="3" required 
                              class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink"></textarea>
                </div>

                <div class="pt-4 flex justify-end space-x-3">
                    <button type="button" onclick="closeModalEdit()" class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider text-gray-500 hover:text-gray-700">
                        Batal
                    </button>
                    <button type="submit" class="bg-brandPink hover:bg-brandPinkLight hover:text-brandDeep text-white px-7 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-lg transition">
                        Perbarui Menu
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts for Interactivity (Modal & Filter) -->
    <script>
        function applyCategory(cat) {
            document.getElementById('inputKategori').value = cat;
            document.getElementById('filterFormMain').submit();
        }

        function openModalTambah() {
            document.getElementById('modalTambah').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModalTambah() {
            document.getElementById('modalTambah').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function openModalEdit(item) {
            document.getElementById('formEdit').action = "<?= base_url('makanan/update/') ?>/" + item.id;
            document.getElementById('edit_nama').value = item.nama_makanan;
            document.getElementById('edit_kategori').value = item.kategori;
            document.getElementById('edit_harga').value = item.harga;
            document.getElementById('edit_stok').value = item.stok;
            document.getElementById('edit_rating').value = item.rating;
            document.getElementById('edit_gambar').value = item.gambar || '';
            document.getElementById('edit_deskripsi').value = item.deskripsi;

            document.getElementById('modalEdit').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModalEdit() {
            document.getElementById('modalEdit').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>

</body>
</html>
