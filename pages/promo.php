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
        
        /* Efek snap agar saat geser kartu berhenti di tengah */
        .scroll-snap-x { scroll-snap-type: x mandatory; }
        .snap-item { scroll-snap-align: start; }

            /* Paksa slide hanya 1 yang tampil secara presisi */
            .swiper-slide {
                width: 100% !important;
                height: auto !important;
            }
        
            /* Styling Dots Nexus style */
            .swiper-pagination-bullet {
                width: 15px !important;
                height: 3px !important;
                border-radius: 0 !important;
                background: #10b981 !important;
                opacity: 0.2 !important;
                margin: 0 6px !important;
                transition: all 0.4s ease;
            }
            .swiper-pagination-bullet-active {
                opacity: 1 !important;
                width: 50px !important;
            }
        </style>
</head>

<body class="bg-organic-light dark:bg-organic-dark text-slate-800 dark:text-emerald-50 overflow-x-hidden">
    <?php include './../components/navbar_main.php'; ?>

    <main class="relative pt-20 pb-12 min-h-[calc(100vh-80px)] transition-all duration-300">

        <section class="w-full bg-white dark:bg-organic-dark pt-10 transition-colors duration-300 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                
                <div class="relative group">
                    <div class="swiper promo-slider overflow-hidden border border-emerald-100 dark:border-emerald-800" style="touch-action: pan-y;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide w-full relative aspect-[4/1] bg-emerald-900">
                                <img src="https://images.unsplash.com/photo-1453904300235-0f2f60b15b5d?auto=format&fit=crop&q=80&w=2000" class="absolute inset-0 w-full h-full object-cover opacity-60 grayscale hover:grayscale-0 transition-all duration-700" alt="Flash Sale">
                                <div class="absolute inset-0 flex flex-col justify-center p-8 md:p-16 z-10">
                                    <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.5em] mb-2">Limited Offer</span>
                                    <h2 class="text-2xl md:text-5xl font-black text-white uppercase italic tracking-tighter leading-none">Flash Sale <br><span class="text-emerald-500">End of Season</span></h2>
                                </div>
                            </div>
                        
                            <div class="swiper-slide w-full relative aspect-[4/1] bg-emerald-950">
                                <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&q=80&w=2000" class="absolute inset-0 w-full h-full object-cover opacity-50 grayscale hover:grayscale-0 transition-all duration-700" alt="New Arrival">
                                <div class="absolute inset-0 flex flex-col justify-center p-8 md:p-16 z-10">
                                    <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.5em] mb-2">New Arrivals</span>
                                    <h2 class="text-2xl md:text-5xl font-black text-white uppercase italic tracking-tighter leading-none">Rare Species <br><span class="text-emerald-500">Collection</span></h2>
                                </div>
                            </div>
                        
                            <div class="swiper-slide w-full relative aspect-[4/1] bg-emerald-900">
                                <img src="https://images.unsplash.com/photo-1463320898484-cdee8141c787?auto=format&fit=crop&q=80&w=2000" class="absolute inset-0 w-full h-full object-cover opacity-60 grayscale hover:grayscale-0 transition-all duration-700" alt="Bundle Pack">
                                <div class="absolute inset-0 flex flex-col justify-center p-8 md:p-16 z-10 text-right items-end">
                                    <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.5em] mb-2">Bundle Pack</span>
                                    <h2 class="text-2xl md:text-5xl font-black text-white uppercase italic tracking-tighter leading-none">Starter Kit <br><span class="text-emerald-500">Save 25%</span></h2>
                                </div>
                            </div>
                        </div>
        
                        <div class="swiper-button-next !w-16 !h-16 !bg-transparent !text-white opacity-0 group-hover:opacity-100 transition-all duration-500 !right-4 !top-1/2 !-translate-y-1/2 after:hidden flex items-center justify-center z-20 active:scale-90"></div>
                        <div class="swiper-button-prev !w-16 !h-16 !bg-transparent !text-white opacity-0 group-hover:opacity-100 transition-all duration-500 !left-4 !top-1/2 !-translate-y-1/2 after:hidden flex items-center justify-center z-20 active:scale-90"></div>
                    </div>
        
                    <div class="swiper-pagination !relative !bottom-0 !mt-8"></div>
                </div>
        
            </div>
        </section>
        
        <section class="py-12 bg-white dark:bg-organic-dark transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex items-end justify-between mb-12">
                    <div>
                        <h2 class="text-[10px] font-black text-emerald-500 uppercase tracking-[0.4em] mb-3">Nexus Exclusive Rewards</h2>
                        <h3 class="text-3xl md:text-4xl font-black text-emerald-900 dark:text-white tracking-tighter italic uppercase">
                            Klaim Kupon <span class="text-emerald-600/20 dark:text-emerald-500/20 outline-text">Terbatas</span>
                        </h3>
                    </div>
                </div>
        
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="relative bg-emerald-50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800 p-8 flex items-center justify-between group overflow-hidden">
                        <div class="absolute -left-4 top-1/2 -translate-y-1/2 w-8 h-8 bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800 rounded-full z-10"></div>
                        <div class="pl-6 border-l-2 border-dashed border-emerald-200 dark:border-emerald-800">
                            <p class="text-[10px] font-black text-emerald-500 uppercase tracking-widest mb-1">Cashback Koin</p>
                            <h4 class="text-2xl font-black text-emerald-900 dark:text-white leading-none mb-2">15% COINS</h4>
                            <p class="text-[9px] text-emerald-800/40 dark:text-emerald-100/30 font-bold uppercase tracking-tighter">Max. pengembalian Rp 50.000</p>
                        </div>
                        <button class="px-8 py-4 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 font-black text-[10px] uppercase tracking-widest hover:bg-emerald-800 dark:hover:bg-emerald-400 transition-all active:scale-95 shadow-xl shadow-emerald-500/10">
                            KLAIM
                        </button>
                    </div>
        
                    <div class="relative bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800 p-8 flex items-center justify-between group overflow-hidden shadow-sm">
                        <div class="absolute -left-4 top-1/2 -translate-y-1/2 w-8 h-8 bg-emerald-50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800 rounded-full z-10"></div>
                        <div class="pl-6 border-l-2 border-dashed border-emerald-200 dark:border-emerald-800">
                            <p class="text-[10px] font-black text-emerald-500 uppercase tracking-widest mb-1">Logistik Gratis</p>
                            <h4 class="text-2xl font-black text-emerald-900 dark:text-white leading-none mb-2">FREE SHIPPING</h4>
                            <p class="text-[9px] text-emerald-800/40 dark:text-emerald-100/30 font-bold uppercase tracking-tighter">Khusus pengiriman Pulau Jawa</p>
                        </div>
                        <button class="px-8 py-4 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 font-black text-[10px] uppercase tracking-widest hover:opacity-90 transition-all active:scale-95">
                            KLAIM
                        </button>
                    </div>
        
                    <div class="relative bg-emerald-900 dark:bg-emerald-800 p-8 flex items-center justify-between group overflow-hidden border border-emerald-700">
                        <div class="absolute -left-4 top-1/2 -translate-y-1/2 w-8 h-8 bg-white dark:bg-organic-dark border-none rounded-full z-10"></div>
                        <div class="pl-6 border-l-2 border-dashed border-emerald-500/30">
                            <p class="text-[10px] font-black text-emerald-400 uppercase tracking-widest mb-1">Paket Hemat</p>
                            <h4 class="text-2xl font-black text-white leading-none mb-2">BUY 2 GET 1</h4>
                            <p class="text-[9px] text-emerald-100/40 font-bold uppercase tracking-tighter">Berlaku untuk koleksi Succulent</p>
                        </div>
                        <button class="px-8 py-4 bg-emerald-500 text-emerald-950 font-black text-[10px] uppercase tracking-widest hover:bg-emerald-400 transition-all active:scale-95">
                            KLAIM
                        </button>
                    </div>
        
                    <div class="relative bg-rose-50/50 dark:bg-rose-900/10 border border-rose-100 dark:border-rose-900/30 p-8 flex items-center justify-between group overflow-hidden">
                        <div class="absolute -left-4 top-1/2 -translate-y-1/2 w-8 h-8 bg-white dark:bg-organic-dark border border-rose-100 dark:border-rose-900/30 rounded-full z-10"></div>
                        <div class="pl-6 border-l-2 border-dashed border-rose-200 dark:border-rose-900/50">
                            <p class="text-[10px] font-black text-rose-500 uppercase tracking-widest mb-1">Member Baru</p>
                            <h4 class="text-2xl font-black text-rose-900 dark:text-rose-100 leading-none mb-2">FLAT 30% OFF</h4>
                            <p class="text-[9px] text-rose-800/40 dark:text-rose-100/30 font-bold uppercase tracking-tighter">Tanpa minimum belanja pertama</p>
                        </div>
                        <button class="px-8 py-4 bg-rose-900 dark:bg-rose-500 text-white dark:text-rose-950 font-black text-[10px] uppercase tracking-widest hover:bg-rose-800 dark:hover:bg-rose-400 transition-all active:scale-95 shadow-xl shadow-rose-500/10">
                            KLAIM
                        </button>
                    </div>
        
                </div>
            </div>
        </section>

        <section class="py-5 bg-white dark:bg-organic-dark transition-colors overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
              
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8 px-2">
                    <div class="relative">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-rose-500"></span>
                            </span>
                            <span class="text-[10px] font-black text-rose-500 uppercase tracking-[0.4em]">Live Now</span>
                        </div>
                        
                        <h2 class="text-4xl md:text-5xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase italic leading-none">
                            Flash <span class="text-emerald-500 underline decoration-4 underline-offset-8">Sale</span>
                        </h2>
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
                    <div>
                        <p class="text-[10px] font-bold text-emerald-800/40 dark:text-emerald-100/40 uppercase tracking-[0.3em] mt-1">
                            Berakhir sampai, 19:00 WIB
                        </p>
                    </div>
                    
                    <div class="flex border border-emerald-100 dark:border-emerald-800">
                        <div class="px-6 py-2 bg-emerald-900 text-white text-xs font-black uppercase italic">15:00</div>
                        <div class="px-6 py-2 bg-transparent text-emerald-900/30 dark:text-white/30 text-xs font-black uppercase italic italic border-l border-emerald-100 dark:border-emerald-800">19:00</div>
                    </div>
                </div>
        
                
                <div class="flex gap-4 overflow-x-auto no-scrollbar scroll-snap-x pb-6">
                    
                    <div class="snap-item min-w-[220px] md:min-w-[260px] group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col relative overflow-hidden transition-all hover:shadow-xl">
                        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                            <div class="absolute top-2 left-2 z-10 bg-rose-500 text-white text-[9px] font-black px-2 py-1 uppercase tracking-widest">Flash Sale</div>
                            <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                                <i class='bx bx-heart text-lg'></i>
                            </button>
                            <img src="https://images.unsplash.com/photo-1614594975525-e45190c55d0b?w=400" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            
                            <div class="absolute bottom-0 left-0 right-0 bg-emerald-900/90 backdrop-blur-sm p-2 flex justify-center items-center gap-2 text-white z-10 group-hover:opacity-0 transition-opacity">
                                <div class="text-xs font-bold font-mono text-rose-400">01:45:20</div>
                            </div>
        
                            <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20">+ Add to Cart</button>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Indoor</p>
                            <h3 class="font-bold text-emerald-900 dark:text-white text-sm mb-2 line-clamp-2 italic tracking-tight">Monstera Deliciosa</h3>
                            <div class="mt-auto pt-3 flex flex-col border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                                <span class="text-base font-black text-rose-500 leading-none">Rp 125.000</span>
                                <span class="text-[10px] text-gray-400 line-through mt-1 italic font-medium">Rp 250.000</span>
                            </div>
                        </div>
                    </div>
        
                    <div class="snap-item min-w-[220px] md:min-w-[260px] group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col relative overflow-hidden transition-all hover:shadow-xl">
                        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                            <div class="absolute top-2 left-2 z-10 bg-rose-500 text-white text-[9px] font-black px-2 py-1 uppercase tracking-widest">Flash Sale</div>
                            <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                                <i class='bx bx-heart text-lg'></i>
                            </button>
                            <img src="https://images.unsplash.com/photo-1545239351-ef35f43d514b?w=400" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute bottom-0 left-0 right-0 bg-emerald-900/90 backdrop-blur-sm p-2 flex justify-center items-center text-white z-10 group-hover:opacity-0 transition-opacity">
                                <div class="text-xs font-bold font-mono text-rose-400">02:10:05</div>
                            </div>
                            <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20">+ Add to Cart</button>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Low Light</p>
                            <h3 class="font-bold text-emerald-900 dark:text-white text-sm mb-2 italic tracking-tight">Calathea Orbifolia</h3>
                            <div class="mt-auto pt-3 flex flex-col border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                                <span class="text-base font-black text-rose-500 leading-none">Rp 95.000</span>
                                <span class="text-[10px] text-gray-400 line-through mt-1 italic font-medium">Rp 180.000</span>
                            </div>
                        </div>
                    </div>
        
                    <div class="snap-item min-w-[220px] md:min-w-[260px] group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col relative overflow-hidden transition-all hover:shadow-xl">
                        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                            <div class="absolute top-2 left-2 z-10 bg-rose-500 text-white text-[9px] font-black px-2 py-1 uppercase tracking-widest">Flash Sale</div>
                            <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                                <i class='bx bx-heart text-lg'></i>
                            </button>
                            <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?w=400" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute bottom-0 left-0 right-0 bg-emerald-900/90 backdrop-blur-sm p-2 flex justify-center items-center text-white z-10 group-hover:opacity-0 transition-opacity">
                                <div class="text-xs font-bold font-mono text-rose-400">12:00:00</div>
                            </div>
                            <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20">+ Add to Cart</button>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Trendy</p>
                            <h3 class="font-bold text-emerald-900 dark:text-white text-sm mb-2 italic tracking-tight">Ficus Burgundy</h3>
                            <div class="mt-auto pt-3 flex flex-col border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                                <span class="text-base font-black text-rose-500 leading-none">Rp 175.000</span>
                                <span class="text-[10px] text-gray-400 line-through mt-1 italic font-medium">Rp 280.000</span>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 mt-10">
              
                <div class="flex gap-4 overflow-x-auto no-scrollbar scroll-snap-x pb-6">
                    
                    <div class="snap-item min-w-[220px] md:min-w-[260px] group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col relative overflow-hidden transition-all hover:shadow-xl">
                        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                            <div class="absolute top-2 left-2 z-10 bg-rose-500 text-white text-[9px] font-black px-2 py-1 uppercase tracking-widest">Flash Sale</div>
                            <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                                <i class='bx bx-heart text-lg'></i>
                            </button>
                            <img src="https://images.unsplash.com/photo-1614594975525-e45190c55d0b?w=400" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            
                            <div class="absolute bottom-0 left-0 right-0 bg-emerald-900/90 backdrop-blur-sm p-2 flex justify-center items-center gap-2 text-white z-10 group-hover:opacity-0 transition-opacity">
                                <div class="text-xs font-bold font-mono text-rose-400">01:45:20</div>
                            </div>
        
                            <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20">+ Add to Cart</button>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Indoor</p>
                            <h3 class="font-bold text-emerald-900 dark:text-white text-sm mb-2 line-clamp-2 italic tracking-tight">Monstera Deliciosa</h3>
                            <div class="mt-auto pt-3 flex flex-col border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                                <span class="text-base font-black text-rose-500 leading-none">Rp 125.000</span>
                                <span class="text-[10px] text-gray-400 line-through mt-1 italic font-medium">Rp 250.000</span>
                            </div>
                        </div>
                    </div>
        
                    <div class="snap-item min-w-[220px] md:min-w-[260px] group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col relative overflow-hidden transition-all hover:shadow-xl">
                        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                            <div class="absolute top-2 left-2 z-10 bg-rose-500 text-white text-[9px] font-black px-2 py-1 uppercase tracking-widest">Flash Sale</div>
                            <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                                <i class='bx bx-heart text-lg'></i>
                            </button>
                            <img src="https://images.unsplash.com/photo-1545239351-ef35f43d514b?w=400" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute bottom-0 left-0 right-0 bg-emerald-900/90 backdrop-blur-sm p-2 flex justify-center items-center text-white z-10 group-hover:opacity-0 transition-opacity">
                                <div class="text-xs font-bold font-mono text-rose-400">02:10:05</div>
                            </div>
                            <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20">+ Add to Cart</button>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Low Light</p>
                            <h3 class="font-bold text-emerald-900 dark:text-white text-sm mb-2 italic tracking-tight">Calathea Orbifolia</h3>
                            <div class="mt-auto pt-3 flex flex-col border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                                <span class="text-base font-black text-rose-500 leading-none">Rp 95.000</span>
                                <span class="text-[10px] text-gray-400 line-through mt-1 italic font-medium">Rp 180.000</span>
                            </div>
                        </div>
                    </div>
        
                    <div class="snap-item min-w-[220px] md:min-w-[260px] group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col relative overflow-hidden transition-all hover:shadow-xl">
                        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                            <div class="absolute top-2 left-2 z-10 bg-rose-500 text-white text-[9px] font-black px-2 py-1 uppercase tracking-widest">Flash Sale</div>
                            <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                                <i class='bx bx-heart text-lg'></i>
                            </button>
                            <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?w=400" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute bottom-0 left-0 right-0 bg-emerald-900/90 backdrop-blur-sm p-2 flex justify-center items-center text-white z-10 group-hover:opacity-0 transition-opacity">
                                <div class="text-xs font-bold font-mono text-rose-400">12:00:00</div>
                            </div>
                            <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-black text-[10px] uppercase z-20">+ Add to Cart</button>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Trendy</p>
                            <h3 class="font-bold text-emerald-900 dark:text-white text-sm mb-2 italic tracking-tight">Ficus Burgundy</h3>
                            <div class="mt-auto pt-3 flex flex-col border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                                <span class="text-base font-black text-rose-500 leading-none">Rp 175.000</span>
                                <span class="text-[10px] text-gray-400 line-through mt-1 italic font-medium">Rp 280.000</span>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section class="py-5 bg-white dark:bg-organic-dark transition-colors overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
                    <div>
                        <h3 class="text-2xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter">
                            Next <span class="text-emerald-500">Wave</span>
                        </h3>
                        <p class="text-[10px] font-bold text-emerald-800/40 dark:text-emerald-100/40 uppercase tracking-[0.3em] mt-1">
                            Dimulai Hari Ini, 19:00 WIB
                        </p>
                    </div>
                    
                    <div class="flex border border-emerald-100 dark:border-emerald-800">
                        <div class="px-6 py-2 bg-emerald-900 text-white text-xs font-black uppercase italic">19:00</div>
                        <div class="px-6 py-2 bg-transparent text-emerald-900/30 dark:text-white/30 text-xs font-black uppercase italic italic border-l border-emerald-100 dark:border-emerald-800">22:00</div>
                    </div>
                </div>
        
                <div class="flex gap-4 overflow-x-auto no-scrollbar scroll-snap-x pb-4">
                    
                    <div class="snap-item min-w-[220px] md:min-w-[260px] group relative flex flex-col transition-all">
                        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100 border border-emerald-100 dark:border-emerald-800/30">
                            <div class="absolute inset-0 bg-emerald-950/20 z-10 group-hover:bg-transparent transition-all duration-500"></div>
                            
                            <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?w=400" class="w-full h-full object-cover grayscale brightness-75 group-hover:grayscale-0 group-hover:brightness-100 transition-all duration-700">
                            
                            <button class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20 bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-full text-white hover:bg-emerald-500 hover:border-emerald-500 transition-all active:scale-90">
                                <i class='bx bx-bell text-2xl'></i>
                            </button>
        
                            <div class="absolute bottom-4 left-4 right-4 z-20">
                                <div class="bg-emerald-900 text-white text-[8px] font-black px-3 py-2 uppercase tracking-widest text-center shadow-2xl">
                                    Remind Me
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 opacity-50 group-hover:opacity-100 transition-opacity">
                            <p class="text-[9px] font-black text-emerald-500 uppercase tracking-widest mb-1 italic">Upcoming Rare</p>
                            <h4 class="font-bold text-emerald-900 dark:text-white text-sm tracking-tight truncate">Sansevieria Whale Fin</h4>
                            <div class="mt-2 flex items-center gap-2">
                                <span class="text-sm font-black text-emerald-900 dark:text-white">Rp ???.???</span>
                            </div>
                        </div>
                    </div>
        
                    <div class="snap-item min-w-[220px] md:min-w-[260px] group relative flex flex-col transition-all">
                        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100 border border-emerald-100 dark:border-emerald-800/30">
                            <div class="absolute inset-0 bg-emerald-950/20 z-10 group-hover:bg-transparent transition-all duration-500"></div>
                            <img src="https://images.unsplash.com/photo-1525498128493-380d1990a112?w=400" class="w-full h-full object-cover grayscale brightness-75 group-hover:grayscale-0 transition-all duration-700">
                            <button class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20 bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-full text-white hover:bg-emerald-500 transition-all">
                                <i class='bx bx-bell text-2xl'></i>
                            </button>
                            <div class="absolute bottom-4 left-4 right-4 z-20">
                                <div class="bg-emerald-900 text-white text-[8px] font-black px-3 py-2 uppercase tracking-widest text-center">Remind Me</div>
                            </div>
                        </div>
                        <div class="p-4 opacity-50 group-hover:opacity-100 transition-opacity">
                            <p class="text-[9px] font-black text-emerald-500 uppercase tracking-widest mb-1 italic">Classic Indoor</p>
                            <h4 class="font-bold text-emerald-900 dark:text-white text-sm tracking-tight truncate">Peace Lily Domino</h4>
                            <div class="mt-2 flex items-center gap-2">
                                <span class="text-sm font-black text-emerald-900 dark:text-white">Rp ???.???</span>
                            </div>
                        </div>
                    </div>
        
                    <div class="snap-item min-w-[220px] md:min-w-[260px] group relative flex flex-col transition-all">
                        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100 border border-emerald-100 dark:border-emerald-800/30">
                            <div class="absolute inset-0 bg-emerald-950/20 z-10 group-hover:bg-transparent transition-all duration-500"></div>
                            
                            <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?w=400" class="w-full h-full object-cover grayscale brightness-75 group-hover:grayscale-0 group-hover:brightness-100 transition-all duration-700">
                            
                            <button class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20 bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-full text-white hover:bg-emerald-500 hover:border-emerald-500 transition-all active:scale-90">
                                <i class='bx bx-bell text-2xl'></i>
                            </button>
        
                            <div class="absolute bottom-4 left-4 right-4 z-20">
                                <div class="bg-emerald-900 text-white text-[8px] font-black px-3 py-2 uppercase tracking-widest text-center shadow-2xl">
                                    Remind Me
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 opacity-50 group-hover:opacity-100 transition-opacity">
                            <p class="text-[9px] font-black text-emerald-500 uppercase tracking-widest mb-1 italic">Upcoming Rare</p>
                            <h4 class="font-bold text-emerald-900 dark:text-white text-sm tracking-tight truncate">Sansevieria Whale Fin</h4>
                            <div class="mt-2 flex items-center gap-2">
                                <span class="text-sm font-black text-emerald-900 dark:text-white">Rp ???.???</span>
                            </div>
                        </div>
                    </div>
        
                    <div class="snap-item min-w-[220px] md:min-w-[260px] group relative flex flex-col transition-all">
                        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100 border border-emerald-100 dark:border-emerald-800/30">
                            <div class="absolute inset-0 bg-emerald-950/20 z-10 group-hover:bg-transparent transition-all duration-500"></div>
                            <img src="https://images.unsplash.com/photo-1525498128493-380d1990a112?w=400" class="w-full h-full object-cover grayscale brightness-75 group-hover:grayscale-0 transition-all duration-700">
                            <button class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20 bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-full text-white hover:bg-emerald-500 transition-all">
                                <i class='bx bx-bell text-2xl'></i>
                            </button>
                            <div class="absolute bottom-4 left-4 right-4 z-20">
                                <div class="bg-emerald-900 text-white text-[8px] font-black px-3 py-2 uppercase tracking-widest text-center">Remind Me</div>
                            </div>
                        </div>
                        <div class="p-4 opacity-50 group-hover:opacity-100 transition-opacity">
                            <p class="text-[9px] font-black text-emerald-500 uppercase tracking-widest mb-1 italic">Classic Indoor</p>
                            <h4 class="font-bold text-emerald-900 dark:text-white text-sm tracking-tight truncate">Peace Lily Domino</h4>
                            <div class="mt-2 flex items-center gap-2">
                                <span class="text-sm font-black text-emerald-900 dark:text-white">Rp ???.???</span>
                            </div>
                        </div>
                    </div>
        
                    </div>
            </div>
        </section>

        <section class="py-12 bg-white dark:bg-organic-dark transition-colors">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                
                <div class="bg-emerald-50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800 p-8 md:p-12 relative overflow-hidden">
                    <div class="absolute -right-4 -bottom-10 text-[120px] font-black text-emerald-900/5 dark:text-white/5 italic pointer-events-none">
                        GOAL
                    </div>
        
                    <div class="relative z-10">
                        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
                            <div>
                                <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.4em] mb-2 text-center md:text-left">Your Progress</h3>
                                <h4 class="text-3xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase italic text-center md:text-left leading-none">
                                    Unlock <span class="text-emerald-500">Tier Rewards</span>
                                </h4>
                            </div>
                            <div class="text-center md:text-right">
                                <p class="text-[10px] font-bold text-emerald-800/40 dark:text-emerald-100/40 uppercase tracking-widest">Total Belanja Saat Ini:</p>
                                <p class="text-2xl font-black text-emerald-900 dark:text-white italic">Rp 150.000</p>
                            </div>
                        </div>
        
                        <div class="relative pt-10 pb-4">
                            <div class="h-2 w-full bg-emerald-200/30 dark:bg-emerald-800/30 rounded-full overflow-hidden">
                                <div class="h-full bg-emerald-500 w-[40%] relative">
                                    <div class="absolute right-0 top-0 bottom-0 w-8 bg-white/30 skew-x-12 animate-pulse"></div>
                                </div>
                            </div>
        
                            <div class="absolute top-0 left-0 w-full flex justify-between px-0">
                                
                                <div class="flex flex-col items-center group">
                                    <div class="w-8 h-8 bg-emerald-500 text-emerald-950 flex items-center justify-center font-black text-[10px] mb-2 shadow-[0_0_20px_rgba(16,185,129,0.5)]">
                                        <i class='bx bx-check text-xl'></i>
                                    </div>
                                    <span class="text-[9px] font-black text-emerald-500 mt-3 uppercase tracking-tighter">Start</span>
                                </div>
        
                                <div class="flex flex-col items-center group translate-x-1/2">
                                    <div class="w-8 h-8 bg-emerald-100 dark:bg-emerald-800 text-emerald-900 dark:text-emerald-400 border-2 border-emerald-500 flex items-center justify-center font-black text-[10px] mb-2 relative">
                                        <span class="animate-ping absolute inset-0 rounded-none bg-emerald-500 opacity-20"></span>
                                        15%
                                    </div>
                                    <span class="text-[9px] font-black text-emerald-900 mt-3 dark:text-white uppercase tracking-tighter">Disc 15%</span>
                                    <span class="text-[7px] font-bold text-emerald-500 italic">Min. 250k</span>
                                </div>
        
                                <div class="flex flex-col items-center group translate-x-1/2">
                                    <div class="w-8 h-8 bg-emerald-100 dark:bg-emerald-800 text-emerald-900/20 dark:text-white/20 flex items-center justify-center font-black text-[10px] mb-2">
                                        <i class='bx bxs-lock-alt'></i>
                                    </div>
                                    <span class="text-[9px] font-black text-emerald-900/20 dark:text-white/20 mt-3 uppercase tracking-tighter">Free Ship</span>
                                    <span class="text-[7px] font-bold text-emerald-800/20 dark:text-emerald-100/10 mt-1 italic">Min. 500k</span>
                                </div>
        
                                <div class="flex flex-col items-center group">
                                    <div class="w-8 h-8 bg-emerald-100 dark:bg-emerald-800 text-emerald-900/20 dark:text-white/20 flex items-center justify-center font-black text-[10px] mb-2">
                                        <i class='bx bxs-gift text-xl'></i>
                                    </div>
                                    <span class="text-[9px] font-black text-emerald-900/20 dark:text-white/20 uppercase mt-3 tracking-tighter">Mystery Box</span>
                                    <span class="text-[7px] font-bold text-emerald-800/20 dark:text-emerald-100/10 mt-1 italic">Min. 1jt</span>
                                </div>
        
                            </div>
                        </div>
        
                        <div class="mt-12 flex justify-center">
                            <div class="inline-flex items-center gap-3 bg-emerald-900 dark:bg-emerald-500 px-6 py-3">
                                <i class='bx bxs-info-circle text-emerald-400 dark:text-emerald-900'></i>
                                <p class="text-[10px] font-bold text-white dark:text-emerald-950 uppercase tracking-widest">
                                    Belanja <span class="underline decoration-2 underline-offset-4">Rp 100.000 lagi</span> untuk diskon 15%!
                                </p>
                            </div>
                        </div>
        
                    </div>
                </div>
        
            </div>
        </section>
        
        <section class="py-10 bg-emerald-900 dark:bg-emerald-950 relative overflow-hidden transition-colors">
            <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
                <div class="absolute -top-24 -left-24 w-96 h-96 border-[40px] border-white rotate-45"></div>
                <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-white rotate-12"></div>
            </div>
        
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-emerald-500 flex items-center justify-center mb-8 shadow-[0_0_30px_rgba(16,185,129,0.4)]">
                        <i class='bx bxs-megaphone text-3xl text-emerald-950 animate-bounce'></i>
                    </div>
        
                    <h2 class="text-xs font-black text-emerald-400 uppercase tracking-[0.5em] mb-4">Don't Miss Out</h2>
                    <h3 class="text-4xl md:text-6xl font-black text-white tracking-tighter uppercase italic leading-none mb-8">
                        Waktunya Menghijaukan <br> <span class="text-emerald-500">Ruang Anda.</span>
                    </h3>
                    
                    <p class="max-w-xl text-emerald-100/60 text-sm md:text-base font-medium mb-12 leading-relaxed">
                        Promo terbatas ini hanya berlaku selama persediaan masih ada. Pastikan koleksi impian Anda tidak jatuh ke tangan orang lain.
                    </p>
        
                    <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                        <a href="shop.php" class="px-12 py-5 bg-emerald-500 hover:bg-emerald-400 text-emerald-950 font-black text-xs uppercase tracking-[0.2em] transition-all active:scale-95 text-center">
                            Mulai Belanja Sekarang
                        </a>
                        <button class="px-12 py-5 bg-transparent border border-white/20 hover:border-white text-white font-black text-xs uppercase tracking-[0.2em] transition-all active:scale-95">
                            Hubungi Konsultan Botani
                        </button>
                    </div>
        
                    <div class="mt-20 pt-10 border-t border-white/10 w-full flex flex-wrap justify-center gap-8 md:gap-16 opacity-50">
                        <div class="flex items-center gap-2">
                            <i class='bx bxs-truck text-xl text-white'></i>
                            <span class="text-[10px] font-bold text-white uppercase tracking-widest">Fast Delivery</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class='bx bxs-shield-alt text-xl text-white'></i>
                            <span class="text-[10px] font-bold text-white uppercase tracking-widest">Secure Payment</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class='bx bxs-leaf text-xl text-white'></i>
                            <span class="text-[10px] font-bold text-white uppercase tracking-widest">Premium Quality</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            var swiperPromo = new Swiper('.promo-slider', {
                slidesPerView: 1,         // Kunci hanya 1 slide
                slidesPerGroup: 1,        // Geser 1 per 1
                spaceBetween: 0,          // Hilangkan jarak antar slide yang bikin bocor
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                // Tambahan agar slide yang tidak aktif benar-benar "bersih"
                watchSlidesProgress: true,
            });
        </script>
    </main>

    <?php include './../components/footer_main.php'; ?>
</body>

</html>
