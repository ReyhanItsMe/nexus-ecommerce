<!DOCTYPE html>
<html lang="id" x-data="{ darkMode: localStorage.getItem('dark') === 'true', openCart: false }" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusEco — Premium Organic Store</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        organic: { 
                            light: '#F8F9F4', 
                            dark: '#06110D' 
                        }
                    },
                    borderRadius: {
                        '4xl': '2rem',
                        '5xl': '3rem',
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Mencegah elemen Alpine 'berkedip' saat load */
        [x-cloak] { display: none !important; }
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            -webkit-tap-highlight-color: transparent;
            transition: background-color 0.5s ease;
        }

        /* Custom Scrollbar untuk tema Organik */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #059669;
            border-radius: 10px;
        }

        /* Animasi CSS murni untuk Drawer agar tidak blink */
        .cart-drawer {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .cart-overlay {
            transition: opacity 0.4s ease;
        }
    </style>
</head>

<body class="bg-organic-light dark:bg-organic-dark text-slate-800 dark:text-emerald-50 overflow-x-hidden">
    <?php include './../components/navbar_main.php'; ?>

    <main class="relative pt-20 pb-12 min-h-[calc(100vh-80px)] transition-all duration-300">

<section class="w-full bg-white dark:bg-organic-dark pt-10 pb-10 transition-colors duration-300 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        
        <div class="relative group">
            
            <div class="swiper promo-slider overflow-hidden border border-emerald-900 dark:border-emerald-500/30" style="touch-action: pan-y;">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide w-full relative aspect-[2/1] md:aspect-[3/1] bg-emerald-950 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1453904300235-0f2f60b15b5d?auto=format&fit=crop&q=80&w=2000" 
                             class="absolute inset-0 w-full h-full object-cover opacity-50 grayscale hover:grayscale-0 scale-100 hover:scale-105 transition-all duration-1000" 
                             alt="Flash Sale">
                        
                        <div class="absolute inset-0 bg-gradient-to-r from-emerald-950/90 via-emerald-950/40 to-transparent"></div>
                        
                        <div class="absolute inset-0 flex flex-col justify-center p-8 md:p-16 z-10 w-full md:w-2/3">
                            <div class="flex items-center gap-4 mb-4">
                                <span class="w-8 h-px bg-emerald-400"></span>
                                <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.5em]">Limited Offer</span>
                            </div>
                            <h2 class="text-3xl md:text-6xl font-black text-white uppercase italic tracking-tighter leading-[0.8] mb-6">
                                Flash Sale <br><span class="text-emerald-500">End of Season.</span>
                            </h2>
                            <a href="#katalog" class="inline-flex w-fit items-center gap-3 bg-emerald-500 text-emerald-950 px-6 py-3 font-black text-[10px] uppercase tracking-widest hover:bg-white transition-colors">
                                Shop Now <i class='bx bx-right-arrow-alt text-lg'></i>
                            </a>
                        </div>
                    </div>
                
                    <div class="swiper-slide w-full relative aspect-[2/1] md:aspect-[3/1] bg-emerald-950 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&q=80&w=2000" 
                             class="absolute inset-0 w-full h-full object-cover opacity-50 grayscale hover:grayscale-0 scale-100 hover:scale-105 transition-all duration-1000" 
                             alt="New Arrival">
                        
                        <div class="absolute inset-0 bg-emerald-950/50 backdrop-blur-[2px]"></div>
                        
                        <div class="absolute inset-0 flex flex-col items-center justify-center p-8 md:p-16 z-10 text-center">
                            <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.5em] mb-4 border border-emerald-400/30 px-4 py-1">New Arrivals</span>
                            <h2 class="text-3xl md:text-6xl font-black text-white uppercase italic tracking-tighter leading-[0.8]">
                                Rare Species <br><span class="text-emerald-500">Collection.</span>
                            </h2>
                        </div>
                    </div>
                
                    <div class="swiper-slide w-full relative aspect-[2/1] md:aspect-[3/1] bg-emerald-950 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1463320898484-cdee8141c787?auto=format&fit=crop&q=80&w=2000" 
                             class="absolute inset-0 w-full h-full object-cover opacity-50 grayscale hover:grayscale-0 scale-100 hover:scale-105 transition-all duration-1000" 
                             alt="Bundle Pack">
                        
                        <div class="absolute inset-0 bg-gradient-to-l from-emerald-950/90 via-emerald-950/40 to-transparent"></div>
                        
                        <div class="absolute inset-0 flex flex-col justify-center items-end p-8 md:p-16 z-10 text-right">
                            <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.5em] mb-4">Bundle Pack</span>
                            <h2 class="text-3xl md:text-6xl font-black text-white uppercase italic tracking-tighter leading-[0.8] mb-6">
                                Starter Kit <br><span class="text-emerald-500">Save 25%.</span>
                            </h2>
                            <a href="#bundle" class="inline-flex w-fit items-center gap-3 border border-emerald-500 text-emerald-500 hover:bg-emerald-500 hover:text-emerald-950 px-6 py-3 font-black text-[10px] uppercase tracking-widest transition-colors">
                                Lihat Bundle
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-prev !w-12 !h-12 !bg-emerald-900/80 backdrop-blur-sm !text-white border border-emerald-500/30 opacity-0 group-hover:opacity-100 transition-all duration-300 !left-4 md:!left-8 !top-1/2 !-translate-y-1/2 after:hidden flex items-center justify-center z-20 hover:!bg-emerald-500 hover:!text-emerald-950">
                    <i class='bx bx-left-arrow-alt text-2xl'></i>
                </div>
                
                <div class="swiper-button-next !w-12 !h-12 !bg-emerald-900/80 backdrop-blur-sm !text-white border border-emerald-500/30 opacity-0 group-hover:opacity-100 transition-all duration-300 !right-4 md:!right-8 !top-1/2 !-translate-y-1/2 after:hidden flex items-center justify-center z-20 hover:!bg-emerald-500 hover:!text-emerald-950">
                    <i class='bx bx-right-arrow-alt text-2xl'></i>
                </div>
            </div>

            <div class="swiper-pagination !relative !bottom-0 !mt-6 flex justify-center gap-2"></div>
        </div>

    </div>
</section>

<style>
    /* Styling Swiper Bullets jadi bentuk garis horizontal */
    .swiper-pagination-bullet {
        width: 16px !important;
        height: 4px !important;
        border-radius: 0 !important;
        background-color: #10b981 !important; /* emerald-500 */
        opacity: 0.3 !important;
        transition: all 0.3s ease !important;
    }
    .swiper-pagination-bullet-active {
        width: 32px !important;
        opacity: 1 !important;
    }
</style>

<script>
  const swiper = new Swiper('.promo-slider', {
    loop: true,
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    pagination: { el: '.swiper-pagination', clickable: true },
    // Autoplay opsional
    // autoplay: { delay: 5000, disableOnInteraction: false },
});
</script>

<section class="bg-white dark:bg-organic-dark transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7">
                <div class="flex items-center gap-4 mb-6">
                    <span class="text-[10px] font-black text-emerald-500 uppercase tracking-[0.4em]">Curated Botany</span>
                    <div class="h-px w-12 bg-emerald-500/30"></div>
                </div>
                
                <h2 class="text-4xl md:text-6xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter leading-[0.85] mb-8">
                    Living <span class="text-emerald-500">Art</span> for Your <br> Inner Sanctuary.
                </h2>
                
                <p class="max-w-xl text-sm md:text-base text-emerald-900/50 dark:text-white/40 font-medium leading-relaxed">
                    Selamat datang di NexusEco Store. Lebih dari sekadar toko, ini adalah kurasi dari keajaiban alam. Setiap tanaman yang Anda lihat telah melewati proses seleksi ketat dan aklimatisasi di nursery kami untuk memastikan mereka siap tumbuh bersama Anda.
                </p>
            </div>

            <div class="lg:col-span-5 grid grid-cols-2 gap-4">
                <div class="p-8 border border-emerald-100 dark:border-emerald-800 bg-emerald-50/50 dark:bg-emerald-900/5 group hover:bg-emerald-500 transition-all duration-500">
                    <span class="block text-4xl font-black text-emerald-900 dark:text-white group-hover:text-emerald-950 transition-colors italic tracking-tighter">500+</span>
                    <span class="text-[9px] font-black text-emerald-500 uppercase tracking-widest group-hover:text-emerald-900 transition-colors">Species Catalog</span>
                </div>
                
                <div class="p-8 border border-emerald-100 dark:border-emerald-800 bg-emerald-50/50 dark:bg-emerald-900/5 group hover:bg-emerald-500 transition-all duration-500">
                    <span class="block text-4xl font-black text-emerald-900 dark:text-white group-hover:text-emerald-950 transition-colors italic tracking-tighter">10k+</span>
                    <span class="text-[9px] font-black text-emerald-500 uppercase tracking-widest group-hover:text-emerald-900 transition-colors">Happy Growers</span>
                </div>

                <div class="col-span-2 p-6 bg-emerald-900 dark:bg-emerald-800 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <i class='bx bxs-certification text-3xl text-emerald-400'></i>
                        <div>
                            <p class="text-[10px] font-black text-white uppercase tracking-widest leading-none mb-1">Nexus Verified</p>
                            <p class="text-[8px] font-medium text-emerald-400 uppercase tracking-tighter">Quality & Health Guaranteed</p>
                        </div>
                    </div>
                    <div class="h-10 w-px bg-white/10"></div>
                    <div class="text-right">
                        <span class="text-[10px] font-black text-white uppercase italic tracking-widest">Est. 2026</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="pt-16 pb-8 bg-white dark:bg-organic-dark transition-colors overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        
        <div class="flex justify-between items-end gap-6 mb-10 px-2">
            <div>
                <span class="text-[10px] font-black text-emerald-500 uppercase tracking-[0.4em] mb-2 block">Our Catalog</span>
                <h2 class="text-4xl md:text-6xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase italic leading-[0.8]">
                    Curated <br> <span class="text-emerald-500 underline decoration-4 underline-offset-[12px]">Collection</span>
                </h2>
            </div>
            
            <button onclick="toggleFilter()" class="group flex items-center gap-3 bg-emerald-900 dark:bg-emerald-500 px-6 py-4 shadow-[10px_10px_0px_0px_rgba(16,185,129,0.1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all z-10 relative">
                <span class="text-[10px] font-black text-white dark:text-emerald-950 uppercase tracking-widest">Filter</span>
                <i class='bx bx-filter-alt text-white dark:text-emerald-950 text-lg group-hover:rotate-180 transition-transform'></i>
            </button>
        </div>

        <div class="relative px-2">
            <div class="absolute inset-y-0 left-6 flex items-center pointer-events-none">
                <i class='bx bx-search text-xl text-emerald-500'></i>
            </div>
            <input type="text" placeholder="CARI TANAMAN, PUPUK, ATAU AKSESORIS..." 
                class="w-full bg-gray-50 dark:bg-emerald-900/10 border-b-2 border-emerald-100 dark:border-emerald-800 py-5 pl-16 pr-6 focus:border-emerald-500 focus:outline-none text-emerald-900 dark:text-white font-medium placeholder:text-emerald-900/20 dark:placeholder:text-white/20 transition-all uppercase text-xs tracking-widest">
        </div>
        
    </div>
</section>

<section id="store-catalog" class="py-16 bg-white dark:bg-organic-dark transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        
        <div class="flex flex-col mb-12 border-l-4 border-emerald-500 pl-6">
            <span class="text-[10px] font-black text-emerald-500 uppercase tracking-[0.4em] mb-2">Available Now</span>
            <h2 class="text-4xl md:text-5xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase italic leading-none">
                Nursery <span class="text-emerald-500">Inventory</span>
            </h2>
        </div>

<div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-10">

    <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden transition-all hover:shadow-[20px_20px_0px_0px_rgba(16,185,129,0.05)]">
        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
            <button class="absolute top-3 right-3 z-20 w-9 h-9 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:text-rose-500 transition-all">
                <i class='bx bx-heart text-xl'></i>
            </button>
            <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=600" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Monstera">
            
            <a href="/pages/product/detail-product.php?id=1" class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20 tracking-widest text-center">
                Lihat Selengkapnya
            </a>
        </div>
        <div class="p-4 md:p-6 flex flex-col flex-1">
            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Indoor / Aroid</p>
            <h3 class="font-black text-emerald-900 dark:text-white text-base md:text-xl leading-tight mb-4 italic uppercase">Monstera <br> Deliciosa King</h3>
            <div class="mt-auto pt-4 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                <span class="text-lg font-black text-emerald-900 dark:text-emerald-400">Rp 150.000</span>
            </div>
        </div>
    </div>

    <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden transition-all hover:shadow-[20px_20px_0px_0px_rgba(16,185,129,0.05)]">
        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
            <div class="absolute top-3 left-3 z-10 bg-rose-500 text-white text-[9px] font-black px-3 py-1 uppercase tracking-widest">20% OFF</div>
            <button class="absolute top-3 right-3 z-20 w-9 h-9 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:text-rose-500 transition-all">
                <i class='bx bx-heart text-xl'></i>
            </button>
            <img src="https://images.unsplash.com/photo-1614594975525-e45190c55d0b?w=600" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Philodendron">
            
            <a href="/pages/product/detail-product.php?id=2" class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20 tracking-widest text-center">
                Lihat Selengkapnya
            </a>
        </div>
        <div class="p-4 md:p-6 flex flex-col flex-1">
            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Rare Species</p>
            <h3 class="font-black text-emerald-900 dark:text-white text-base md:text-xl leading-tight mb-4 italic uppercase">Philodendron <br> Pink Princess</h3>
            <div class="mt-auto pt-4 flex flex-col md:flex-row md:items-end gap-2 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                <span class="text-lg font-black text-rose-500">Rp 400.000</span>
                <span class="text-[10px] text-gray-400 line-through mb-1 italic">Rp 500.000</span>
            </div>
        </div>
    </div>

    <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden transition-all hover:shadow-[20px_20px_0px_0px_rgba(16,185,129,0.05)]">
        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
            <div class="absolute top-3 left-3 z-10 bg-rose-500 text-white text-[9px] font-black px-3 py-1 uppercase tracking-widest">Flash Sale</div>
            <button class="absolute top-3 right-3 z-20 w-9 h-9 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:text-rose-500 transition-all">
                <i class='bx bx-heart text-xl'></i>
            </button>
            <img src="https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?w=600" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Sansevieria">
            
            <div class="absolute bottom-0 left-0 right-0 bg-emerald-900/90 backdrop-blur-sm p-3 flex justify-center items-center gap-4 text-white z-10 group-hover:opacity-0 transition-opacity">
                <div class="flex gap-2 font-mono text-xs font-bold"><span>02</span>:<span>15</span>:<span>40</span></div>
            </div>
            
            <a href="/pages/product/detail-product.php?id=3" class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20 tracking-widest text-center">
                Lihat Selengkapnya
            </a>
        </div>
        <div class="p-4 md:p-6 flex flex-col flex-1">
            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Outdoor / Tough</p>
            <h3 class="font-black text-emerald-900 dark:text-white text-base md:text-xl leading-tight mb-4 italic uppercase">Sansevieria <br> Trifasciata</h3>
            <div class="mt-auto pt-4 flex items-end gap-2 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                <span class="text-lg font-black text-rose-500">Rp 85.000</span>
                <span class="text-[10px] text-gray-400 line-through mb-1 italic">Rp 120.000</span>
            </div>
        </div>
    </div>

    <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden transition-all hover:shadow-[20px_20px_0px_0px_rgba(16,185,129,0.05)]">
        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
            <div class="absolute top-3 left-3 z-10 bg-amber-400 text-emerald-950 text-[9px] font-black px-3 py-1 uppercase tracking-widest">Best Seller</div>
            <button class="absolute top-3 right-3 z-20 w-9 h-9 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:text-rose-500 transition-all">
                <i class='bx bx-heart text-xl'></i>
            </button>
            <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?w=600" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Ficus">
            
            <a href="/pages/product/detail-product.php?id=4" class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20 tracking-widest text-center">
                Lihat Selengkapnya
            </a>
        </div>
        <div class="p-4 md:p-6 flex flex-col flex-1">
            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Indoor / Rubber</p>
            <h3 class="font-black text-emerald-900 dark:text-white text-base md:text-xl leading-tight mb-4 italic uppercase">Ficus Elastica <br> Burgundy</h3>
            <div class="mt-auto pt-4 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                <span class="text-lg font-black text-emerald-900 dark:text-emerald-400">Rp 180.000</span>
            </div>
        </div>
    </div>

    <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden transition-all hover:shadow-[20px_20px_0px_0px_rgba(16,185,129,0.05)]">
        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
            <div class="absolute top-3 left-3 z-10 flex flex-col gap-1">
                <div class="bg-amber-400 text-emerald-950 text-[8px] font-black px-2 py-1 uppercase tracking-widest">Best Seller</div>
                <div class="bg-rose-500 text-white text-[8px] font-black px-2 py-1 uppercase tracking-widest w-fit">15% OFF</div>
            </div>
            <button class="absolute top-3 right-3 z-20 w-9 h-9 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:text-rose-500 transition-all">
                <i class='bx bx-heart text-xl'></i>
            </button>
            <img src="https://images.unsplash.com/photo-1520412099551-62b6bafeb5bb?w=600" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Aloe">
            
            <a href="/pages/product/detail-product.php?id=5" class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20 tracking-widest text-center">
                Lihat Selengkapnya
            </a>
        </div>
        <div class="p-4 md:p-6 flex flex-col flex-1">
            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Succulent</p>
            <h3 class="font-black text-emerald-900 dark:text-white text-base md:text-xl leading-tight mb-4 italic uppercase">Aloe Vera <br> Premium Kit</h3>
            <div class="mt-auto pt-4 flex items-end gap-2 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                <span class="text-lg font-black text-rose-500">Rp 45.000</span>
                <span class="text-[10px] text-gray-400 line-through mb-1 italic">Rp 55.000</span>
            </div>
        </div>
    </div>

    <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden transition-all hover:shadow-[20px_20px_0px_0px_rgba(16,185,129,0.05)]">
        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
            <div class="absolute top-3 left-3 z-10 bg-emerald-900 text-white text-[8px] font-black px-3 py-1 uppercase tracking-widest">Last Stock</div>
            <button class="absolute top-3 right-3 z-20 w-9 h-9 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:text-rose-500 transition-all">
                <i class='bx bx-heart text-xl'></i>
            </button>
            <img src="https://images.unsplash.com/photo-1525498128493-380d1990a112?w=600" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Peace Lily">
            
            <div class="absolute bottom-0 left-0 right-0 bg-rose-600/90 backdrop-blur-sm p-2 flex justify-center items-center gap-2 text-white z-10 group-hover:opacity-0 transition-opacity">
                <span class="text-[9px] font-black uppercase tracking-tighter">Ending In:</span>
                <span class="font-mono text-xs font-bold">05:00:22</span>
            </div>
            
            <a href="/pages/product/detail-product.php?id=6" class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20 tracking-widest text-center">
                Lihat Selengkapnya
            </a>
        </div>
        <div class="p-4 md:p-6 flex flex-col flex-1">
            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Indoor / Air Purifier</p>
            <h3 class="font-black text-emerald-900 dark:text-white text-base md:text-xl leading-tight mb-4 italic uppercase">Peace Lily <br> Domino Var.</h3>
            <div class="mt-auto pt-4 flex items-end gap-2 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                <span class="text-lg font-black text-rose-500">Rp 190.000</span>
                <span class="text-[10px] text-gray-400 line-through mb-1 italic">Rp 250.000</span>
            </div>
        </div>
    </div>

    <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden transition-all hover:shadow-[20px_20px_0px_0px_rgba(16,185,129,0.05)]">
        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
            <div class="absolute top-3 left-3 z-10 bg-emerald-500 text-emerald-950 text-[9px] font-black px-3 py-1 uppercase tracking-widest italic">New</div>
            <button class="absolute top-3 right-3 z-20 w-9 h-9 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:text-rose-500 transition-all">
                <i class='bx bx-heart text-xl'></i>
            </button>
            <img src="https://images.unsplash.com/photo-1545239351-ef35f43d514b?w=600" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Calathea">
            
            <a href="/pages/product/detail-product.php?id=7" class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20 tracking-widest text-center">
                Lihat Selengkapnya
            </a>
        </div>
        <div class="p-4 md:p-6 flex flex-col flex-1">
            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Prayer Plant</p>
            <h3 class="font-black text-emerald-900 dark:text-white text-base md:text-xl leading-tight mb-4 italic uppercase">Calathea <br> Orbifolia</h3>
            <div class="mt-auto pt-4 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                <span class="text-lg font-black text-emerald-900 dark:text-emerald-400">Rp 125.000</span>
            </div>
        </div>
    </div>

    <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden transition-all hover:shadow-[20px_20px_0px_0px_rgba(16,185,129,0.05)]">
        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
            <div class="absolute top-3 left-3 z-10 bg-emerald-950 text-white text-[8px] font-black px-3 py-1 uppercase tracking-widest">Collectors Item</div>
            <button class="absolute top-3 right-3 z-20 w-9 h-9 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:text-rose-500 transition-all">
                <i class='bx bx-heart text-xl'></i>
            </button>
            <img src="https://images.unsplash.com/photo-1614594975525-e45190c55d0b?w=600" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Anthurium">
            
            <a href="/pages/product/detail-product.php?id=8" class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20 tracking-widest text-center">
                Lihat Selengkapnya
            </a>
        </div>
        <div class="p-4 md:p-6 flex flex-col flex-1">
            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Exclusive</p>
            <h3 class="font-black text-emerald-900 dark:text-white text-base md:text-xl leading-tight mb-4 italic uppercase">Anthurium <br> Crystallinum</h3>
            <div class="mt-auto pt-4 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                <span class="text-lg font-black text-emerald-900 dark:text-emerald-400">Rp 850.000</span>
            </div>
        </div>
    </div>

</div>

    </div>
</section>

<style>
    .skeleton-glow {
        background: linear-gradient(
            90deg,
            transparent 0%,
            rgba(16, 185, 129, 0.05) 50%,
            transparent 100%
        );
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite linear;
    }

    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }

    /* Dark mode adjustment */
    .dark .skeleton-glow {
        background: linear-gradient(
            90deg,
            transparent 0%,
            rgba(255, 255, 255, 0.03) 50%,
            transparent 100%
        );
    }
</style>


<div id="filterDrawer" class="fixed inset-0 z-[100] invisible transition-all duration-500">
    
    <div id="filterBackdrop" onclick="toggleFilter()" class="absolute inset-0 bg-emerald-950/60 backdrop-blur-sm opacity-0 transition-opacity duration-500 cursor-pointer"></div>
    
    <div id="filterSheet" class="absolute bottom-0 left-0 right-0 bg-white dark:bg-organic-dark translate-y-full transition-transform duration-500 ease-out shadow-[0px_-20px_50px_rgba(0,0,0,0.3)] h-2/3 flex flex-col rounded-t-[30px]">
        
        <div class="px-6 pt-10 pb-6 border-b border-emerald-50 dark:border-emerald-800/30">
            <div class="max-w-4xl mx-auto flex justify-between items-center">
                <h3 class="text-xl font-black text-emerald-900 dark:text-white uppercase italic leading-none">Filter <span class="text-emerald-500">System.</span></h3>
                <button onclick="toggleFilter()" class="w-10 h-10 border border-emerald-900 dark:border-emerald-500 text-emerald-900 dark:text-emerald-500 flex items-center justify-center hover:bg-emerald-900 hover:text-white transition-all">
                    <i class='bx bx-x text-xl'></i>
                </button>
            </div>
        </div>

        <div class="flex-1 overflow-y-auto px-6 py-8">
            <div class="max-w-4xl mx-auto space-y-10">
                
                <div class="filter-group">
                    <span class="text-[9px] font-black text-emerald-500 uppercase tracking-[0.3em] mb-4 block">01. Klasifikasi Tanaman</span>
                    <div class="flex flex-wrap gap-2">
                        <button onclick="handleFilterClick(this)" class="filter-chip active-filter text-[9px] px-4 py-2">Semua Tanaman</button>
                        <button onclick="handleFilterClick(this)" class="filter-chip text-[9px] px-4 py-2">Rare Series</button>
                        <button onclick="handleFilterClick(this)" class="filter-chip text-[9px] px-4 py-2">Indoor Plants</button>
                        <button onclick="handleFilterClick(this)" class="filter-chip text-[9px] px-4 py-2">Low Light Kits</button>
                    </div>
                </div>

                <div class="filter-group">
                    <span class="text-[9px] font-black text-emerald-500 uppercase tracking-[0.3em] mb-4 block">02. Maintenance & Care</span>
                    <div class="flex flex-wrap gap-2">
                        <button onclick="handleFilterClick(this)" class="filter-chip active-filter text-[9px] px-4 py-2">Semua Produk</button>
                        <button onclick="handleFilterClick(this)" class="filter-chip text-[9px] px-4 py-2">Organic Fertilizer</button>
                        <button onclick="handleFilterClick(this)" class="filter-chip text-[9px] px-4 py-2">Premium Soil Mix</button>
                    </div>
                </div>

                <div class="filter-group">
                    <span class="text-[9px] font-black text-emerald-500 uppercase tracking-[0.3em] mb-4 block">03. Nursery Essentials</span>
                    <div class="flex flex-wrap gap-2">
                        <button onclick="handleFilterClick(this)" class="filter-chip active-filter text-[9px] px-4 py-2">Semua Aksesoris</button>
                        <button onclick="handleFilterClick(this)" class="filter-chip text-[9px] px-4 py-2">Terracotta Pots</button>
                        <button onclick="handleFilterClick(this)" class="filter-chip text-[9px] px-4 py-2">Handmade Ceramics</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="px-6 py-6 bg-white dark:bg-organic-dark border-t border-emerald-50 dark:border-emerald-800/50 shadow-[0px_-10px_30px_rgba(0,0,0,0.05)]">
            <div class="max-w-4xl mx-auto flex items-center gap-3">
                <button onclick="resetFilters()" class="flex-none w-14 h-14 border border-emerald-200 dark:border-emerald-800 text-emerald-900 dark:text-white flex items-center justify-center hover:bg-gray-50 dark:hover:bg-emerald-900/20 transition-all">
                    <i class='bx bx-refresh text-xl'></i>
                </button>
            
                <button onclick="toggleFilter()" class="flex-1 bg-emerald-900 dark:bg-emerald-500 h-14 text-[10px] font-black text-white dark:text-emerald-950 uppercase tracking-[0.3em] shadow-[8px_8px_0px_0px_rgba(16,185,129,0.1)] hover:translate-y-1 hover:shadow-none transition-all">
                    Terapkan Filter
                </button>
            </div>
        </div>

    </div>
</div>

<style>
    /* Styling for Filter Chips (Boxy Brutalist Style) */
    .filter-chip {
        padding: 0.75rem 1.25rem;
        border: 1px solid #d1fae5; /* emerald-100 */
        font-size: 10px;
        font-weight: 900; /* black */
        text-transform: uppercase;
        letter-spacing: 0.1em;
        transition: all 0.3s ease;
        color: #064e3b; /* emerald-900 */
        background-color: transparent;
        cursor: pointer;
    }

    /* Dark Mode override untuk border & warna text awal */
    .dark .filter-chip {
        border-color: rgba(6, 78, 59, 0.5); /* emerald-900/50 */
        color: rgba(255, 255, 255, 0.5);
    }

    .filter-chip:hover {
        border-color: #10b981; /* emerald-500 */
        color: #10b981;
    }

    /* State Active */
    .filter-chip.active-filter {
        background-color: #10b981; /* emerald-500 */
        border-color: #10b981;
        color: #022c22; /* emerald-950 */
        box-shadow: 4px 4px 0px 0px rgba(6, 78, 59, 0.2);
    }
</style>

<script>
    // 1. Fungsi Buka/Tutup Modal Filter (Bottom Sheet)
    function toggleFilter() {
        const drawer = document.getElementById('filterDrawer');
        const sheet = document.getElementById('filterSheet');
        const backdrop = document.getElementById('filterBackdrop');

        // Cek apakah sedang tertutup
        if (drawer.classList.contains('invisible')) {
            // BUKA: Hilangkan invisible, lalu jalankan animasi masuk
            drawer.classList.remove('invisible');
            
            // Timeout kecil agar transisi CSS terbaca oleh browser
            setTimeout(() => {
                backdrop.classList.replace('opacity-0', 'opacity-100');
                sheet.classList.remove('translate-y-full');
            }, 10);
            
            // Cegah body dibisa di-scroll saat modal terbuka
            document.body.style.overflow = 'hidden';
            
        } else {
            // TUTUP: Jalankan animasi keluar, lalu tambah invisible
            backdrop.classList.replace('opacity-100', 'opacity-0');
            sheet.classList.add('translate-y-full');
            
            // Kembalikan scroll body
            document.body.style.overflow = 'auto';

            // Tunggu animasi selesai baru hilangkan elemen dari DOM (500ms)
            setTimeout(() => {
                drawer.classList.add('invisible');
            }, 500);
        }
    }

    // 2. Fungsi Interaksi Klik Kotak Filter
    function handleFilterClick(element) {
        // Cari container group filter terdekat
        const group = element.closest('.filter-group');
        const allChips = group.querySelectorAll('.filter-chip');
        const activeChips = group.querySelectorAll('.active-filter');
        const isSemua = element.innerText.trim().toUpperCase().includes('SEMUA');

        // Jika tombol sudah aktif
        if (element.classList.contains('active-filter')) {
            // Jangan matikan jika ini adalah satu-satunya yang aktif
            if (activeChips.length > 1 && !isSemua) {
                element.classList.remove('active-filter');
            }
        } 
        // Jika tombol belum aktif
        else {
            if (isSemua) {
                // Jika klik "Semua", matikan semua chip lain di grup ini
                allChips.forEach(chip => chip.classList.remove('active-filter'));
                element.classList.add('active-filter');
            } else {
                // Jika klik yang spesifik, matikan tombol "Semua" di grup ini
                allChips.forEach(chip => {
                    if (chip.innerText.trim().toUpperCase().includes('SEMUA')) {
                        chip.classList.remove('active-filter');
                    }
                });
                element.classList.add('active-filter');
            }
        }
    }

    // 3. Fungsi Reset Filter (Kembalikan ke Default "Semua")
    function resetFilters() {
        document.querySelectorAll('.filter-group').forEach(group => {
            const chips = group.querySelectorAll('.filter-chip');
            chips.forEach(chip => {
                if (chip.innerText.trim().toUpperCase().includes('SEMUA')) {
                    chip.classList.add('active-filter');
                } else {
                    chip.classList.remove('active-filter');
                }
            });
        });
    }
</script>







    </main>

    <?php include './../components/footer_main.php'; ?>
</body>

</html>
