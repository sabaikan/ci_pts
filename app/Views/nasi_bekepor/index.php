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
        
        <!-- Navbar (Mirip referensi dengan pill buttons) -->
        <nav class="max-w-7xl mx-auto flex items-center justify-between border-b border-brandPink/20 pb-6">
            <a href="<?= base_url() ?>" class="font-serif text-2xl tracking-[0.25em] font-extrabold uppercase hover:text-brandPinkLight transition">
                BEKEPOR THEORY
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
            <h1 class="font-serif text-5xl sm:text-7xl lg:text-8xl tracking-[0.08em] font-extrabold uppercase leading-none drop-shadow-sm">
                BEKEPOR THEORY
            </h1>
            <p class="mt-6 text-sm sm:text-base text-purple-200/90 max-w-2xl mx-auto leading-relaxed font-light">
                At Bekepor Theory, we turn fragrant rice, infused coconut milk, and ancient Kutai herbs into royal culinary perfection. Warm, savory, and delicately spiced — each mouthful is a royal experiment in sheer happiness.
            </p>
        </div>

        <!-- 3 Featured Plates (Persis 3 foto jejer di referensi) -->
        <div class="max-w-6xl mx-auto mt-14 grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 items-center">
            <!-- Plate 1 -->
            <div class="group relative rounded-3xl overflow-hidden bg-brandDeep/60 border border-brandPink/20 shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="h-64 sm:h-72 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=700&q=80" alt="Nasi Bekepor Daging Masak Bumi" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-brandDeep via-transparent to-transparent flex items-end p-5">
                    <div>
                        <span class="text-[11px] font-semibold tracking-widest uppercase text-brandPinkLight">Khas Kutai Kartanegara</span>
                        <h4 class="font-serif text-xl font-bold text-white">Nasi Bekepor Daging Bumi</h4>
                    </div>
                </div>
            </div>

            <!-- Plate 2 (Centerpiece / Highlight) -->
            <div class="group relative rounded-3xl overflow-hidden bg-brandDeep/60 border-2 border-brandPink shadow-2xl transition-all duration-500 hover:-translate-y-3 md:-translate-y-4">
                <div class="h-72 sm:h-80 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=700&q=80" alt="Nasi Bekepor Royal Sultan" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-brandDeep via-brandDeep/20 to-transparent flex items-end p-6">
                    <div>
                        <span class="bg-brandPink text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2 inline-block">Hidangan Keraton</span>
                        <h4 class="font-serif text-2xl font-bold text-white">Nasi Bekepor Royal Sultan</h4>
                    </div>
                </div>
            </div>

            <!-- Plate 3 -->
            <div class="group relative rounded-3xl overflow-hidden bg-brandDeep/60 border border-brandPink/20 shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="h-64 sm:h-72 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?auto=format&fit=crop&w=700&q=80" alt="Nasi Bekepor Ikan Haruan" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-brandDeep via-transparent to-transparent flex items-end p-5">
                    <div>
                        <span class="text-[11px] font-semibold tracking-widest uppercase text-brandPinkLight">Sungai Mahakam</span>
                        <h4 class="font-serif text-xl font-bold text-white">Nasi Bekepor Ikan Haruan</h4>
                    </div>
                </div>
            </div>
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
                <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?auto=format&fit=crop&w=800&q=80" alt="Rempah Nasi Bekepor" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-brandDark/10 mix-blend-multiply"></div>
            </div>

            <!-- Artistic line doodle badge overlay persis gaya ilustrasi roti di gambar -->
            <div class="absolute -bottom-8 -right-4 sm:-bottom-10 sm:right-6 bg-brandDark text-white p-6 rounded-3xl shadow-2xl border-2 border-brandPink/40 max-w-[240px] transform rotate-2">
                <svg class="w-10 h-10 text-brandPink mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                <p class="font-serif text-sm font-semibold tracking-wide leading-tight">Warisan Adat Kerajaan Kutai Sejak Abad ke-13</p>
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
                    Nasi Bekepor merupakan sajian pusaka tanah Kutai Kartanegara, Kalimantan Timur, yang pada masa silam dipersembahkan khusus bagi para bangsawan dan tamu agung Kesultanan Kutai.
                </p>
                <p>
                    Dimasak perlahan di dalam kuali besi (*kendil*) bersama daun salam, kemangi, minyak sayur, dan potongan ikan asin jambal, aroma wangi yang menguar menjadi saksi bisu kekayaan rempah nusantara di pesisir khatulistiwa.
                </p>
            </div>
            <div class="mt-8 pt-6 border-t border-brandDark/15 flex items-center space-x-6">
                <div>
                    <span class="block font-serif text-3xl font-extrabold text-brandDark">100%</span>
                    <span class="text-xs uppercase tracking-wider text-gray-500 font-medium">Bahan Asli Kaltim</span>
                </div>
                <div class="h-10 w-px bg-brandDark/20"></div>
                <div>
                    <span class="block font-serif text-3xl font-extrabold text-brandDark">6 Rasa</span>
                    <span class="text-xs uppercase tracking-wider text-gray-500 font-medium">Sambal Raja Otentik</span>
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
                        
                        <!-- Card Pedestal Container (Square rounded corners dengan efek pedestal elegan) -->
                        <div class="relative w-full aspect-square bg-[#E5D7C2] rounded-[32px] p-5 flex items-center justify-center overflow-hidden shadow-md group-hover:shadow-xl transition-all duration-300">
                            <!-- Circular Pedestal Illusion -->
                            <div class="absolute bottom-4 w-4/5 h-10 bg-brandDark/20 rounded-[100%] blur-[6px]"></div>
                            <div class="absolute bottom-6 w-3/4 h-8 bg-brandDark/70 rounded-[100%] border border-brandPink/30"></div>
                            
                            <!-- Foto Makanan Nasi Bekepor -->
                            <img src="<?= esc($item['gambar']) ?>" alt="<?= esc($item['nama_makanan']) ?>" 
                                 class="relative z-10 w-4/5 h-4/5 object-cover rounded-2xl shadow-xl transition-transform duration-500 group-hover:scale-105 group-hover:-translate-y-2">

                            <!-- Rating badge -->
                            <span class="absolute top-3 right-3 z-20 bg-brandDark/85 backdrop-blur text-white text-[11px] font-bold px-2.5 py-1 rounded-full border border-brandPink/30 flex items-center space-x-1">
                                <span class="text-amber-300">★</span>
                                <span><?= esc($item['rating']) ?></span>
                            </span>

                            <!-- Floating Action Buttons (CRUD Edit & Delete) -->
                            <div class="absolute inset-0 bg-brandDark/75 backdrop-blur-[2px] opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-3 z-30">
                                <button onclick='openModalEdit(<?= json_encode($item) ?>)' 
                                        class="bg-white hover:bg-brandPink hover:text-white text-brandDark font-semibold px-3 py-1.5 rounded-full text-xs transition shadow-lg flex items-center space-x-1">
                                    <span>✏️</span>
                                    <span>Edit</span>
                                </button>
                                <a href="<?= base_url('makanan/delete/' . $item['id']) ?>" 
                                   onclick="return confirm('Apakah Anda yakin ingin menghapus menu \'<?= esc($item['nama_makanan']) ?>\'?')"
                                   class="bg-rose-600 hover:bg-rose-700 text-white font-semibold px-3 py-1.5 rounded-full text-xs transition shadow-lg flex items-center space-x-1">
                                    <span>🗑️</span>
                                    <span>Hapus</span>
                                </a>
                            </div>
                        </div>

                        <!-- Pill Tag (Persis di bawah gambar seperti CROISSANT / BAGUETTE) -->
                        <div class="mt-5">
                            <span class="border border-brandDark/40 text-brandDark text-[10px] font-bold uppercase tracking-[0.2em] px-4 py-1 rounded-full inline-block">
                                <?= esc($item['kategori']) ?>
                            </span>
                        </div>

                        <!-- Menu Name & Price -->
                        <h4 class="font-serif text-lg font-bold text-brandDark mt-3 leading-snug hover:text-brandPink transition">
                            <?= esc($item['nama_makanan']) ?>
                        </h4>
                        
                        <p class="text-brandPink font-extrabold text-sm mt-1">
                            Rp <?= number_format($item['harga'], 0, ',', '.') ?>
                        </p>

                        <!-- Deskripsi Singkat persis seperti caption referensi -->
                        <p class="text-gray-600 text-xs mt-2 line-clamp-2 leading-relaxed max-w-[240px]">
                            <?= esc($item['deskripsi']) ?>
                        </p>

                        <!-- Stok Info -->
                        <span class="text-[11px] text-gray-500 font-medium mt-2">
                            Tersedia: <?= esc($item['stok']) ?> porsi
                        </span>

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
    <!-- SECTION 4: THE MAGIC BEHIND THE BEKEPOR                        -->
    <!-- (Deep background dengan 2 foto besar berdampingan)             -->
    <!-- ============================================================== -->
    <section class="bg-brandDark text-white py-24 px-6 sm:px-12 mt-12">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-14">
                <h3 class="font-serif text-3xl sm:text-5xl uppercase tracking-[0.1em] font-extrabold">
                    THE <span class="font-editorial-italic lowercase text-brandPink font-normal">magic</span> BEHIND THE BEKEPOR
                </h3>
                <p class="text-purple-200/80 text-sm max-w-xl mx-auto mt-4 font-light">
                    Kombinasi beras pulen lokal Mahakam, kelapa tua pilihan, daun kemangi segar, dan racikan sambal raja yang diproses secara tradisional.
                </p>
            </div>

            <!-- 2 Foto Besar Berdampingan persis di referensi -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Foto 1: Minyak Kelapa & Santan Gurih -->
                <div class="rounded-3xl overflow-hidden shadow-2xl border border-brandPink/30 group relative aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?auto=format&fit=crop&w=900&q=80" alt="Beras & Santan Nasi Bekepor" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-brandDeep via-brandDeep/30 to-transparent flex items-end p-8">
                        <div>
                            <span class="text-brandPinkLight text-xs font-bold tracking-widest uppercase">Rahasia Gurih</span>
                            <h4 class="font-serif text-2xl font-bold text-white mt-1">Santan Kelapa Asli & Daun Salam</h4>
                            <p class="text-purple-200 text-xs mt-2 max-w-md font-light leading-relaxed">
                                Dimasak dalam kendil tradisional hingga dasar nasi menghasilkan lapisan kerak gurih yang menjadi ciri khas tiada dua.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Foto 2: Nasi Bekepor Matang Berselera -->
                <div class="rounded-3xl overflow-hidden shadow-2xl border border-brandPink/30 group relative aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=80" alt="Sambal Raja & Sayur Asam" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-brandDeep via-brandDeep/30 to-transparent flex items-end p-8">
                        <div>
                            <span class="text-brandPinkLight text-xs font-bold tracking-widest uppercase">Pelengkap Sempurna</span>
                            <h4 class="font-serif text-2xl font-bold text-white mt-1">Sambal Raja & Sayur Asam Kutai</h4>
                            <p class="text-purple-200 text-xs mt-2 max-w-md font-light leading-relaxed">
                                Paduan rasa pedas, manis, dan segar dari terong asam khas Kalimantan menyempurnakan santap siang keluarga.
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
                Kunjungi gerai kami atau pesan paket istimewa Nasi Bekepor Kutai Kartanegara langsung ke meja Anda. Cita rasa kehangatan Kalimantan Timur yang selalu dirindukan.
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
            <!-- Circular Stamp Badge persis di tengah referensi -->
            <div class="absolute -left-6 z-20 w-28 h-28 sm:w-32 sm:h-32 bg-brandPink text-white rounded-full flex items-center justify-center shadow-2xl border-4 border-white stamp-rotate">
                <svg class="w-full h-full p-2" viewBox="0 0 100 100">
                    <path id="circlePath" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="none"/>
                    <text font-size="8.5" font-weight="bold" fill="currentColor" letter-spacing="2">
                        <textPath xlink:href="#circlePath" startOffset="0%">
                            • KALIMANTAN TIMUR • NASI BEKEPOR •
                        </textPath>
                    </text>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-xl">
                    🍛
                </div>
            </div>

            <!-- Banquet Box / Platter Image -->
            <div class="w-full rounded-3xl overflow-hidden shadow-2xl border-4 border-white aspect-[16/11]">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=800&q=80" alt="Sajian Nasi Bekepor" class="w-full h-full object-cover">
            </div>
        </div>
    </section>


    <!-- ========================================== -->
    <!-- FOOTER                                     -->
    <!-- ========================================== -->
    <footer class="bg-brandDark text-purple-200/80 py-12 px-6 border-t border-brandPink/20 text-center text-xs">
        <p class="font-serif text-lg tracking-[0.2em] uppercase text-white font-bold mb-2">BEKEPOR THEORY</p>
        <p>Aplikasi CRUD Katalog Kuliner PTS &bull; Kalimantan Timur &bull; Tema: #D946EF &amp; #581C87</p>
        <p class="mt-2 text-white/50">&copy; <?= date('Y') ?> Bekepor Theory. Dibuat dengan CodeIgniter 4 &amp; Tailwind CSS.</p>
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
                    <input type="url" name="gambar" placeholder="https://images.unsplash.com/..." 
                           class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brandPink">
                    <span class="text-[11px] text-gray-400">Kosongkan jika ingin menggunakan gambar default.</span>
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
                    <input type="url" id="edit_gambar" name="gambar" 
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
