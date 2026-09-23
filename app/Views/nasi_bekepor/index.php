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

    <!-- Flash Messages (Tailwind Alert dengan Icon Minimalis) -->
    <?php if (session()->getFlashdata('success')): ?>
        <div id="flash-success" class="fixed top-5 right-5 z-50 bg-neutral-900 text-white px-5 py-3 rounded-2xl shadow-2xl flex items-center space-x-3 border border-neutral-700">
            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span class="text-xs font-medium"><?= session()->getFlashdata('success') ?></span>
            <button onclick="document.getElementById('flash-success').remove()" class="text-gray-400 hover:text-white font-bold ml-2">&times;</button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div id="flash-error" class="fixed top-5 right-5 z-50 bg-neutral-900 text-white px-5 py-3 rounded-2xl shadow-2xl flex items-center space-x-3 border border-rose-500/30">
            <svg class="w-4 h-4 text-rose-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            <span class="text-xs font-medium"><?= session()->getFlashdata('error') ?></span>
            <button onclick="document.getElementById('flash-error').remove()" class="text-gray-400 hover:text-white font-bold ml-2">&times;</button>
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
                <button onclick="openModalTambah()" class="bg-brandDeep/80 hover:bg-brandDeep text-white border border-purple-300/30 font-medium px-4 py-1.5 rounded-full text-xs uppercase tracking-wider transition shadow-sm flex items-center space-x-1.5">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                    <span>Tambah Menu</span>
                </button>
                <div class="flex items-center space-x-3 pl-2 text-white/90">
                    <span class="text-xs font-semibold bg-white/10 px-3 py-1 rounded-full border border-white/20 flex items-center space-x-1.5">
                        <svg class="w-3 h-3 text-brandPinkLight" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Kaltim</span>
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
                HANIF THEORY
            </h1>
            <p class="mt-6 text-sm sm:text-base text-purple-200/90 max-w-2xl mx-auto leading-relaxed font-light">
                At Hanif Theory, we turn fragrant rice, infused coconut milk, and ancient Kutai herbs into royal culinary perfection. Warm, savory, and delicately spiced — each mouthful is a royal experiment in sheer happiness.
            </p>
        </div>

        <!-- 3 Seamless Featured Dishes (Tanpa Box/Card, Persis Desain Banner Crumb Theory) -->
        <div class="max-w-6xl mx-auto mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 sm:gap-10 items-end">
            <!-- Plate 1 -->
            <a href="<?= base_url('makanan/detail/1') ?>" class="group flex flex-col items-center text-center transition-transform duration-500 hover:-translate-y-3">
                <div class="relative w-full max-w-[280px] sm:max-w-[320px] aspect-square flex items-center justify-center">
                    <img src="<?= base_url('images/nasi_bekepor_hero.png') ?>" alt="Nasi Bekepor Daging Masak Bumi" 
                         class="w-full h-full object-contain filter drop-shadow-[0_25px_30px_rgba(0,0,0,0.55)] transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="mt-4">
                    <h4 class="font-serif text-lg font-bold text-white tracking-wide group-hover:text-brandPinkLight transition">Nasi Bekepor Daging Bumi</h4>
                    <span class="text-xs text-brandPinkLight/80 font-medium inline-flex items-center space-x-1 mt-1">
                        <span>Lihat Detail</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </span>
                </div>
            </a>

            <!-- Plate 2 (Centerpiece) -->
            <a href="<?= base_url('makanan/detail/8') ?>" class="group flex flex-col items-center text-center transition-transform duration-500 hover:-translate-y-3 md:-translate-y-4">
                <div class="relative w-full max-w-[320px] sm:max-w-[360px] aspect-square flex items-center justify-center">
                    <img src="<?= base_url('images/nasi_bekepor_hero.png') ?>" alt="Nasi Bekepor Royal Sultan" 
                         class="w-full h-full object-contain filter drop-shadow-[0_30px_35px_rgba(0,0,0,0.65)] transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="mt-4">
                    <span class="bg-white/15 text-brandPinkLight text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest mb-1.5 inline-block border border-white/20">
                        Royal Signature
                    </span>
                    <h4 class="font-serif text-xl sm:text-2xl font-bold text-white tracking-wide group-hover:text-brandPinkLight transition">Nasi Bekepor Royal Sultan</h4>
                    <span class="text-xs text-brandPinkLight/80 font-medium inline-flex items-center space-x-1 mt-1">
                        <span>Jelajahi Resep Keraton</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </span>
                </div>
            </a>

            <!-- Plate 3 -->
            <a href="<?= base_url('makanan/detail/2') ?>" class="group flex flex-col items-center text-center transition-transform duration-500 hover:-translate-y-3">
                <div class="relative w-full max-w-[280px] sm:max-w-[320px] aspect-square flex items-center justify-center">
                    <img src="<?= base_url('images/nasi_bekepor_hero.png') ?>" alt="Nasi Bekepor Ikan Haruan" 
                         class="w-full h-full object-contain filter drop-shadow-[0_25px_30px_rgba(0,0,0,0.55)] transition-transform duration-700 group-hover:scale-105 [transform:scaleX(-1)]">
                </div>
                <div class="mt-4">
                    <h4 class="font-serif text-lg font-bold text-white tracking-wide group-hover:text-brandPinkLight transition">Nasi Bekepor Ikan Haruan</h4>
                    <span class="text-xs text-brandPinkLight/80 font-medium inline-flex items-center space-x-1 mt-1">
                        <span>Lihat Detail</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </span>
                </div>
            </a>
        </div>
    </header>


    <!-- ========================================== -->
    <!-- SECTION 2: THE PROOF IS IN THE SPICES      -->
    <!-- ========================================== -->
    <section id="heritage" class="max-w-7xl mx-auto py-24 px-6 sm:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        <!-- Kolom Kiri: Foto berseni + badge doodle -->
        <div class="lg:col-span-6 relative">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white aspect-[4/3]">
                <img src="<?= base_url('images/nasi_bekepor_ai.jpg') ?>" alt="Rempah Nasi Bekepor Hanif Theory" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-brandDark/10 mix-blend-multiply"></div>
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
                    Beras dimasak perlahan di dalam kuali tembikar dengan santan kelapa murni, daun kemangi segar, dan irisan ikan asin jambal roti. Dipadukan dengan Sambal Raja 6 rasa yang diproses secara tradisional.
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
    <!-- ============================================================== -->
    <section id="katalog" class="max-w-7xl mx-auto py-16 px-6 sm:px-12">
        
        <!-- Header Section dengan Garis Panjang -->
        <div class="flex items-center justify-between pb-8">
            <div class="flex items-center space-x-6 flex-1">
                <h3 class="font-serif text-3xl sm:text-4xl uppercase tracking-[0.15em] font-extrabold text-brandDark whitespace-nowrap">
                    BEST SELLERS
                </h3>
                <div class="h-[2px] bg-brandDark/30 w-full hidden sm:block"></div>
            </div>
            
            <!-- Tombol Tambah Menu CRUD Utama -->
            <button onclick="openModalTambah()" class="ml-6 bg-brandDark hover:bg-brandDeep text-white px-5 py-2.5 rounded-full text-xs uppercase tracking-wider font-semibold shadow-lg hover:shadow-brandDark/30 transition flex items-center space-x-2 whitespace-nowrap">
                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                <span>Tambah Menu</span>
            </button>
        </div>

        <!-- ============================================================== -->
        <!-- UI FILTER & SORTING + MENU GRID (AJAX TANPA REFRESH HALAMAN)  -->
        <!-- ============================================================== -->
        <div id="katalogContainer" class="transition-opacity duration-300">
            <div class="bg-brandCream border border-brandDark/15 rounded-2xl p-6 sm:p-7 shadow-sm mb-12">
                <form action="<?= base_url() ?>" method="get" id="filterFormMain" onsubmit="event.preventDefault(); applySearchForm();">
                    <input type="hidden" name="kategori" id="inputKategori" value="<?= esc($selectedKat) ?>">
                    <input type="hidden" name="sort" id="inputSort" value="<?= esc($selectedSort) ?>">
                    <input type="hidden" name="search" id="inputSearch" value="<?= esc($searchQuery) ?>">

                    <!-- Row 1: Left [Filters Button + Clear All], Right [Sort by Dropdown] -->
                    <div class="flex flex-wrap items-center justify-between gap-4 pb-5 border-b border-brandDark/10">
                        
                        <!-- Left: Filters Button + Clear All -->
                        <div class="flex items-center space-x-4">
                            <button type="button" onclick="toggleSearchInput()" 
                                    class="inline-flex items-center space-x-2 border border-brandDark/25 hover:border-brandDark/50 bg-brandCream text-brandDark px-4 py-2 rounded-full text-xs font-semibold shadow-sm transition">
                                <!-- Sliders / Filter Minimalist SVG Icon -->
                                <svg class="w-3.5 h-3.5 text-brandDark" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                                <span>Filters</span>
                            </button>

                            <?php if (!empty($searchQuery) || ($selectedKat !== 'Semua' && !empty($selectedKat)) || !empty($selectedSort)): ?>
                                <button type="button" onclick="clearAllFilters()" class="text-xs font-semibold text-brandPink hover:underline transition">
                                    Clear all
                                </button>
                            <?php endif; ?>
                        </div>

                        <!-- Right: Sort by Dropdown with Chevron -->
                        <div class="relative">
                            <select name="sort" id="selectSortMain" onchange="applySort(this.value)" 
                                    class="appearance-none bg-brandCream border border-brandDark/25 hover:border-brandDark/50 rounded-xl py-2 pl-4 pr-9 text-xs font-medium text-brandDark focus:outline-none focus:ring-1 focus:ring-brandPink focus:border-brandPink cursor-pointer shadow-sm">
                                <option value="">Sort by</option>
                                <option value="harga_asc" <?= $selectedSort === 'harga_asc' ? 'selected' : '' ?>>Harga: Rendah ke Tinggi</option>
                                <option value="harga_desc" <?= $selectedSort === 'harga_desc' ? 'selected' : '' ?>>Harga: Tinggi ke Rendah</option>
                                <option value="nama_asc" <?= $selectedSort === 'nama_asc' ? 'selected' : '' ?>>Nama: A - Z</option>
                                <option value="nama_desc" <?= $selectedSort === 'nama_desc' ? 'selected' : '' ?>>Nama: Z - A</option>
                                <option value="rating_desc" <?= $selectedSort === 'rating_desc' ? 'selected' : '' ?>>Rating Tertinggi</option>
                                <option value="stok_desc" <?= $selectedSort === 'stok_desc' ? 'selected' : '' ?>>Stok Terbanyak</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-brandDark/60">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Search Input -->
                    <div id="searchBarWrapper" class="<?= empty($searchQuery) ? 'hidden' : '' ?> pt-4 pb-2">
                        <div class="relative max-w-md">
                            <input type="text" id="liveSearchInput" placeholder="Ketik nama menu, rempah, atau bumbu..." value="<?= esc($searchQuery) ?>" 
                                   class="w-full bg-brandCream border border-brandDark/25 rounded-full py-2 pl-9 pr-4 text-xs text-brandDark placeholder-brandDark/40 focus:outline-none focus:border-brandPink"
                                   onkeydown="if(event.key==='Enter'){event.preventDefault();applySearch(this.value);}">
                            <svg class="w-4 h-4 text-brandDark/50 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                    </div>

                    <!-- Row 2: Active Filter Chips & Category Pills (Dark Rounded Pills dengan icon [x] persis gambar) -->
                    <div class="pt-4 flex flex-wrap items-center gap-2">
                        <!-- Chip: Semua -->
                        <button type="button" onclick="applyCategory('Semua')" 
                                class="<?= $selectedKat === 'Semua' ? 'bg-neutral-900 text-white' : 'bg-brandCreamDark hover:bg-[#E2D6C3] text-brandDark border border-brandDark/10' ?> px-3.5 py-1.5 rounded-full text-xs font-medium flex items-center space-x-1.5 transition">
                            <span>Semua Menu</span>
                            <?php if ($selectedKat === 'Semua'): ?>
                                <span class="w-3.5 h-3.5 rounded-full bg-white/20 flex items-center justify-center text-[10px]">&times;</span>
                            <?php endif; ?>
                        </button>

                        <!-- Category Chips -->
                        <?php foreach ($categories as $cat): ?>
                            <?php $isActive = ($selectedKat === $cat); ?>
                            <button type="button" onclick="applyCategory('<?= $isActive ? 'Semua' : esc($cat) ?>')" 
                                    class="<?= $isActive ? 'bg-neutral-900 text-white' : 'bg-brandCreamDark hover:bg-[#E2D6C3] text-brandDark border border-brandDark/10' ?> px-3.5 py-1.5 rounded-full text-xs font-medium flex items-center space-x-1.5 transition">
                                <span><?= esc($cat) ?></span>
                                <?php if ($isActive): ?>
                                    <span class="w-3.5 h-3.5 rounded-full bg-white/20 flex items-center justify-center text-[10px]">&times;</span>
                                <?php endif; ?>
                            </button>
                        <?php endforeach; ?>

                    <!-- Active Sort Chip (jika sort terpilih) -->
                    <?php if (!empty($selectedSort)): ?>
                        <button type="button" onclick="clearSort()" 
                                class="bg-neutral-900 text-white px-3.5 py-1.5 rounded-full text-xs font-medium flex items-center space-x-1.5 transition">
                            <span>
                                <?php
                                    switch($selectedSort) {
                                        case 'harga_asc': echo 'Harga: Rendah ke Tinggi'; break;
                                        case 'harga_desc': echo 'Harga: Tinggi ke Rendah'; break;
                                        case 'nama_asc': echo 'Nama: A - Z'; break;
                                        case 'nama_desc': echo 'Nama: Z - A'; break;
                                        case 'rating_desc': echo 'Rating Tertinggi'; break;
                                        case 'stok_desc': echo 'Stok Terbanyak'; break;
                                        default: echo esc($selectedSort); break;
                                    }
                                ?>
                            </span>
                            <span class="w-3.5 h-3.5 rounded-full bg-white/20 flex items-center justify-center text-[10px]">&times;</span>
                        </button>
                    <?php endif; ?>

                    <!-- Active Search Chip (jika search terisi) -->
                    <?php if (!empty($searchQuery)): ?>
                        <button type="button" onclick="clearSearch()" 
                                class="bg-neutral-900 text-white px-3.5 py-1.5 rounded-full text-xs font-medium flex items-center space-x-1.5 transition">
                            <span>Pencarian: "<?= esc($searchQuery) ?>"</span>
                            <span class="w-3.5 h-3.5 rounded-full bg-white/20 flex items-center justify-center text-[10px]">&times;</span>
                        </button>
                    <?php endif; ?>
                </div>

            </form>
        </div>

        <!-- ============================================================== -->
        <!-- 4-COLUMN CARD GRID (GAMBAR HAMPIR MEMENUHI BOX)               -->
        <!-- ============================================================== -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php if (!empty($menuList)): ?>
                <?php foreach ($menuList as $item): ?>
                    <div class="group flex flex-col items-center text-center">
                        
                        <!-- Card Box Container (Gambar hampir memenuhi box dengan padding minimal p-2) -->
                        <div class="relative w-full aspect-square bg-[#E5D7C2] rounded-[28px] p-2 sm:p-2.5 flex items-center justify-center overflow-hidden shadow-md group-hover:shadow-xl transition-all duration-300">
                            
                            <!-- Foto Makanan Nasi Bekepor (Hampir memenuhi seluruh frame box) -->
                            <a href="<?= base_url('makanan/detail/' . $item['id']) ?>" class="relative z-10 w-full h-full block overflow-hidden rounded-[22px]">
                                <img src="<?= esc($item['gambar']) ?>" alt="<?= esc($item['nama_makanan']) ?>" 
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </a>

                            <!-- Minimalist Rating badge -->
                            <span class="absolute top-4 right-4 z-20 bg-brandDark/85 backdrop-blur text-white text-[11px] font-bold px-2.5 py-1 rounded-full border border-brandPink/30 flex items-center space-x-1 shadow">
                                <svg class="w-3 h-3 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span><?= esc($item['rating']) ?></span>
                            </span>

                            <!-- Floating Action Buttons (Detail, Edit & Delete dengan Icon Minimalis) -->
                            <div class="absolute inset-0 bg-brandDark/80 backdrop-blur-[2px] opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center gap-2 z-30 p-4">
                                <a href="<?= base_url('makanan/detail/' . $item['id']) ?>" 
                                   class="bg-brandPink hover:bg-brandPinkLight hover:text-brandDark text-white font-bold px-4 py-2 rounded-full text-xs transition shadow-lg w-32 flex items-center justify-center space-x-1.5">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    <span>Detail Menu</span>
                                </a>
                                <div class="flex items-center space-x-2">
                                    <button onclick='openModalEdit(<?= json_encode($item) ?>)' 
                                            class="bg-white hover:bg-gray-100 text-brandDark font-semibold px-3 py-1.5 rounded-full text-xs transition shadow flex items-center space-x-1">
                                        <svg class="w-3 h-3 text-brandDark" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                        <span>Edit</span>
                                    </button>
                                    <a href="<?= base_url('makanan/delete/' . $item['id']) ?>" 
                                       onclick="return confirm('Apakah Anda yakin ingin menghapus menu \'<?= esc($item['nama_makanan']) ?>\'?')"
                                       class="bg-rose-600 hover:bg-rose-700 text-white font-semibold px-3 py-1.5 rounded-full text-xs transition shadow flex items-center space-x-1">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        <span>Hapus</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Pill Tag (Kategori) -->
                        <div class="mt-5">
                            <span class="border border-brandDark/40 text-brandDark text-[10px] font-bold uppercase tracking-[0.2em] px-4 py-1 rounded-full inline-block">
                                <?= esc($item['kategori']) ?>
                            </span>
                        </div>

                        <!-- Menu Name & Price -->
                        <a href="<?= base_url('makanan/detail/' . $item['id']) ?>" class="font-serif text-lg font-bold text-brandDark mt-3 leading-snug hover:text-brandPink transition block">
                            <?= esc($item['nama_makanan']) ?>
                        </a>
                        
                        <p class="text-brandPink font-extrabold text-sm mt-1">
                            Rp <?= number_format($item['harga'], 0, ',', '.') ?>
                        </p>

                        <!-- Deskripsi Singkat -->
                        <p class="text-gray-600 text-xs mt-2 line-clamp-2 leading-relaxed max-w-[240px]">
                            <?= esc($item['deskripsi']) ?>
                        </p>

                        <!-- Link Detail Bawah -->
                        <a href="<?= base_url('makanan/detail/' . $item['id']) ?>" class="text-[11px] text-brandDark/70 hover:text-brandPink font-bold mt-2 inline-flex items-center space-x-1">
                            <span>Selengkapnya</span>
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>

                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-16 bg-white/60 rounded-3xl border border-brandDark/10">
                    <p class="font-serif text-2xl text-brandDark">Menu Tidak Ditemukan</p>
                    <p class="text-sm text-gray-500 mt-2">Tidak ada menu yang sesuai dengan filter atau kata kunci pencarian.</p>
                    <button type="button" onclick="clearAllFilters()" class="mt-4 inline-block bg-brandDark hover:bg-brandDeep text-white px-6 py-2 rounded-full text-xs uppercase tracking-wider font-semibold transition">Tampilkan Semua</button>
                </div>
            <?php endif; ?>
        </div>
    </div> <!-- /#katalogContainer -->
    </section>


    <!-- ============================================================== -->
    <!-- SECTION 4: THE MAGIC BEHIND HANIF THEORY                       -->
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

            <!-- 2 Foto Besar Berdampingan -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Foto 1: AI Masterpiece -->
                <div class="rounded-3xl overflow-hidden shadow-2xl border border-brandPink/30 group relative aspect-[4/3]">
                    <img src="<?= base_url('images/nasi_bekepor_detail_ai.jpg') ?>" alt="AI Masterpiece Hanif Theory" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-brandDeep via-brandDeep/30 to-transparent flex items-end p-8">
                        <div>
                            <span class="text-brandPinkLight text-xs font-bold tracking-widest uppercase inline-flex items-center space-x-1.5">
                                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="currentColor"><path d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                                <span>AI Visual Generatif</span>
                            </span>
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
                            <span class="text-brandPinkLight text-xs font-bold tracking-widest uppercase inline-flex items-center space-x-1.5">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span>Tradisi Kendil Besi</span>
                            </span>
                            <h4 class="font-serif text-2xl font-bold text-white mt-1">Nasi Liwet Bekepor Matang Sempurna</h4>
                            <p class="text-purple-200 text-xs mt-2 max-w-md font-light leading-relaxed">
                                Dimasak di atas arang menyala sampai menciptakan kerak nasi gurih khas yang sangat dicari.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================================== -->
    <!-- SECTION 5: READY TO TASTE & STAMP BADGE                        -->
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
            <!-- Circular Stamp Badge dengan Monogram Minimalis HT -->
            <div class="absolute -left-6 z-20 w-28 h-28 sm:w-32 sm:h-32 bg-brandPink text-white rounded-full flex items-center justify-center shadow-2xl border-4 border-white stamp-rotate">
                <svg class="w-full h-full p-2" viewBox="0 0 100 100">
                    <path id="circlePath" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="none"/>
                    <text font-size="8" font-weight="bold" fill="currentColor" letter-spacing="2">
                        <textPath xlink:href="#circlePath" startOffset="0%">
                            • KALIMANTAN TIMUR • HANIF THEORY •
                        </textPath>
                    </text>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center font-serif font-black text-sm tracking-wider">
                    HT
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

    <!-- Scripts for Interactivity (Modal & Non-Reloading Filter) -->
    <script>
        function getFilterParams() {
            const params = new URLSearchParams();
            const katEl = document.getElementById('inputKategori');
            const sortEl = document.getElementById('inputSort');
            const searchEl = document.getElementById('inputSearch');

            const kat = katEl ? katEl.value : 'Semua';
            const sort = sortEl ? sortEl.value : '';
            const search = searchEl ? searchEl.value : '';

            if (kat && kat !== 'Semua') params.set('kategori', kat);
            if (sort) params.set('sort', sort);
            if (search) params.set('search', search);
            return params;
        }

        async function loadKatalogAjax(params, updateUrl = true) {
            const container = document.getElementById('katalogContainer');
            if (!container) return;

            container.classList.add('opacity-40', 'pointer-events-none');
            const queryString = params.toString();
            const url = '<?= base_url() ?>' + (queryString ? ('?' + queryString) : '');

            try {
                const response = await fetch(url, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                const html = await response.text();
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newKatalog = doc.getElementById('katalogContainer');

                if (newKatalog) {
                    container.innerHTML = newKatalog.innerHTML;
                    if (updateUrl) {
                        window.history.pushState({}, '', url);
                    }
                }
            } catch (err) {
                console.error('AJAX Filter error:', err);
                window.location.href = url;
            } finally {
                container.classList.remove('opacity-40', 'pointer-events-none');
            }
        }

        window.addEventListener('popstate', function() {
            const params = new URLSearchParams(window.location.search);
            loadKatalogAjax(params, false);
        });

        function applyCategory(cat) {
            const katEl = document.getElementById('inputKategori');
            if (katEl) katEl.value = cat;
            loadKatalogAjax(getFilterParams());
        }

        function applySort(sortVal) {
            const sortEl = document.getElementById('inputSort');
            if (sortEl) sortEl.value = sortVal;
            loadKatalogAjax(getFilterParams());
        }

        function clearSort() {
            const sortEl = document.getElementById('inputSort');
            if (sortEl) sortEl.value = '';
            loadKatalogAjax(getFilterParams());
        }

        function clearSearch() {
            const searchEl = document.getElementById('inputSearch');
            if (searchEl) searchEl.value = '';
            const liveInput = document.getElementById('liveSearchInput');
            if (liveInput) liveInput.value = '';
            loadKatalogAjax(getFilterParams());
        }

        function clearAllFilters() {
            const katEl = document.getElementById('inputKategori');
            const sortEl = document.getElementById('inputSort');
            const searchEl = document.getElementById('inputSearch');
            if (katEl) katEl.value = 'Semua';
            if (sortEl) sortEl.value = '';
            if (searchEl) searchEl.value = '';
            const liveInput = document.getElementById('liveSearchInput');
            if (liveInput) liveInput.value = '';
            loadKatalogAjax(new URLSearchParams());
        }

        function applySearch(query) {
            const searchEl = document.getElementById('inputSearch');
            if (searchEl) searchEl.value = query.trim();
            loadKatalogAjax(getFilterParams());
        }

        function applySearchForm() {
            const liveInput = document.getElementById('liveSearchInput');
            if (liveInput) applySearch(liveInput.value);
        }

        function toggleSearchInput() {
            const wrapper = document.getElementById('searchBarWrapper');
            if (!wrapper) return;
            wrapper.classList.toggle('hidden');
            const input = document.getElementById('liveSearchInput');
            if (!wrapper.classList.contains('hidden') && input) {
                input.focus();
            }
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
