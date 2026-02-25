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
    <?php include './../../components/navbar_secondary.php'; ?>

    <main class="relative pt-20 pb-12 min-h-[calc(100vh-80px)] transition-all duration-300">

<section class="pt-5 pb-12 bg-white dark:bg-organic-dark transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            
            <div class="relative group">
                <div class="swiper product-gallery overflow-hidden bg-gray-50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800 shadow-[20px_20px_0px_0px_rgba(16,185,129,0.05)]">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide aspect-square relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1614594975525-e45190c55d0b?q=80&w=1000&auto=format&fit=crop" 
                                 alt="Product Detail 1" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide aspect-square relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1545239351-ef35f43d514b?q=80&w=1000&auto=format&fit=crop" 
                                 alt="Product Detail 2" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide aspect-square relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?q=80&w=1000&auto=format&fit=crop" 
                                 alt="Product Detail 3" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>

                    <div class="swiper-button-next !hidden md:!flex !w-12 !h-12 !bg-white/80 dark:!bg-emerald-900/80 backdrop-blur-md !text-emerald-900 dark:!text-white after:!text-sm opacity-0 group-hover:opacity-100 transition-all duration-300 !right-4"></div>
                    <div class="swiper-button-prev !hidden md:!flex !w-12 !h-12 !bg-white/80 dark:!bg-emerald-900/80 backdrop-blur-md !text-emerald-900 dark:!text-white after:!text-sm opacity-0 group-hover:opacity-100 transition-all duration-300 !left-4"></div>
                </div>

                <div class="swiper-pagination !relative !bottom-0 !mt-8 flex justify-center"></div>
            </div>

<div class="flex flex-col h-full justify-center">
    
    <div class="flex items-center gap-4 mb-6">
        <span class="text-[10px] font-black text-emerald-500 uppercase tracking-[0.4em]">Indoor Species</span>
        <div class="h-px w-12 bg-emerald-500/30"></div>
        <span class="text-[10px] font-bold text-emerald-900/30 dark:text-white/30 uppercase tracking-widest">Aroid Family</span>
    </div>
    
    <h1 class="text-4xl md:text-6xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter leading-[0.8] mb-6">
        Monstera <br> <span class="text-emerald-500">Deliciosa</span> King.
    </h1>

    <div class="flex items-center gap-6 mb-8">
        <span class="text-3xl font-black text-emerald-900 dark:text-white tracking-tighter italic">Rp 150.000</span>
        <div class="px-3 py-1 bg-rose-500 text-white text-[10px] font-black uppercase tracking-widest">In Stock</div>
        <div class="flex items-center gap-1 text-emerald-500">
            <i class='bx bxs-star text-sm'></i>
            <span class="text-xs font-bold text-emerald-900 dark:text-white">4.9</span>
        </div>
    </div>

    <p class="text-sm md:text-base text-emerald-900/50 dark:text-white/40 font-medium leading-relaxed mb-8 max-w-md border-l-2 border-emerald-500/20 pl-4">
        Varian Monstera paling ikonik dengan lubang daun yang sempurna (fenestrasi). Sudah termasuk pot terakota minimalis dan media tanam premium racikan NexusEco.
    </p>

    <div class="grid grid-cols-2 gap-3 mb-10 max-w-lg">
        <div class="p-3 border border-emerald-100 dark:border-emerald-800/50 flex items-center gap-3 bg-gray-50 dark:bg-emerald-900/5">
            <div class="w-8 h-8 flex items-center justify-center bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400">
                <i class='bx bx-check-shield text-lg'></i>
            </div>
            <div>
                <h4 class="text-[9px] font-black uppercase text-emerald-900 dark:text-white tracking-widest">7 Days</h4>
                <p class="text-[8px] font-bold text-emerald-900/40 dark:text-white/40 uppercase">Plant Warranty</p>
            </div>
        </div>
        <div class="p-3 border border-emerald-100 dark:border-emerald-800/50 flex items-center gap-3 bg-gray-50 dark:bg-emerald-900/5">
            <div class="w-8 h-8 flex items-center justify-center bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400">
                <i class='bx bx-bug-alt text-lg'></i>
            </div>
            <div>
                <h4 class="text-[9px] font-black uppercase text-emerald-900 dark:text-white tracking-widest">Pest Free</h4>
                <p class="text-[8px] font-bold text-emerald-900/40 dark:text-white/40 uppercase">Health Check</p>
            </div>
        </div>
        <div class="p-3 border border-emerald-100 dark:border-emerald-800/50 flex items-center gap-3 bg-gray-50 dark:bg-emerald-900/5">
            <div class="w-8 h-8 flex items-center justify-center bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400">
                <i class='bx bx-package text-lg'></i>
            </div>
            <div>
                <h4 class="text-[9px] font-black uppercase text-emerald-900 dark:text-white tracking-widest">Safe Pack</h4>
                <p class="text-[8px] font-bold text-emerald-900/40 dark:text-white/40 uppercase">Double Layer</p>
            </div>
        </div>
        <div class="p-3 border border-emerald-100 dark:border-emerald-800/50 flex items-center gap-3 bg-gray-50 dark:bg-emerald-900/5">
            <div class="w-8 h-8 flex items-center justify-center bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400">
                <i class='bx bx-book-heart text-lg'></i>
            </div>
            <div>
                <h4 class="text-[9px] font-black uppercase text-emerald-900 dark:text-white tracking-widest">Free Guide</h4>
                <p class="text-[8px] font-bold text-emerald-900/40 dark:text-white/40 uppercase">Care Card</p>
            </div>
        </div>
    </div>

</div>

        </div>
    </div>
</section>

<script>
    const productGallery = new Swiper('.product-gallery', {
        loop: true,
        grabCursor: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>

<style>
    /* Styling Bullets agar kotak (Brutalist) */
    .product-gallery + .swiper-pagination .swiper-pagination-bullet {
        width: 12px !important;
        height: 12px !important;
        border-radius: 0 !important;
        background-color: #10b981 !important;
        opacity: 0.2;
        transition: all 0.3s;
        margin: 0 6px !important;
    }
    .product-gallery + .swiper-pagination .swiper-pagination-bullet-active {
        width: 30px !important;
        opacity: 1;
        box-shadow: 4px 4px 0px 0px rgba(16, 185, 129, 0.2);
    }
</style>

<div x-data="{ buyPopup: false, cartMenu: false, qty: 1, variant: 'polos' }">
    
    <div class="fixed bottom-0 left-0 right-0 z-[150] bg-white/90 dark:bg-organic-dark/90 backdrop-blur-xl border-t border-emerald-100 dark:border-emerald-900/50 p-4 pb-6 lg:pb-4 transition-colors duration-300">
        <div class="max-w-7xl mx-auto flex items-center gap-3">
            
            <button class="w-12 h-12 flex items-center justify-center border-2 border-emerald-100 dark:border-emerald-800 text-emerald-900 dark:text-emerald-400 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 transition-all active:scale-90">
                <i class='bx bx-share-alt text-xl'></i>
            </button>
            
            <div class="relative">
                <button @click="cartMenu = !cartMenu" class="w-12 h-12 flex items-center justify-center border-2 border-emerald-100 dark:border-emerald-800 text-emerald-900 dark:text-emerald-400 relative hover:bg-emerald-50 transition-all active:scale-90 z-20 rounded-xl">
                    <i class='bx bx-cart text-xl'></i>
                    <span class="absolute -top-1 -right-1 w-5 h-5 bg-emerald-600 text-white text-[10px] font-black flex items-center justify-center rounded-full border-2 border-white dark:border-organic-dark">2</span>
                </button>

                <div x-show="cartMenu" 
                     @click.away="cartMenu = false"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="absolute bottom-full left-1/2 -translate-x-1/2 mb-6 w-48 z-30 filter drop-shadow-[4px_4px_0px_rgba(16,185,129,0.2)]" 
                     style="display: none;">
                    
                    <div class="bg-white dark:bg-organic-dark border-2 border-emerald-900 dark:border-emerald-500 rounded-xl overflow-hidden relative z-10">
                        <div class="flex flex-col">
                            <a href="/pages/cart.php" class="px-4 py-3 text-[10px] font-black uppercase tracking-widest text-emerald-900 dark:text-white hover:bg-emerald-50 border-b border-emerald-100 dark:border-emerald-800 flex justify-between items-center">
                                Lihat Keranjang <i class='bx bx-right-arrow-alt'></i>
                            </a>
                            <button class="px-4 py-3 text-[10px] font-black uppercase tracking-widest text-emerald-900 dark:text-white hover:bg-emerald-50 flex justify-between items-center">
                                Tambah Cepat <i class='bx bx-plus'></i>
                            </button>
                        </div>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white dark:bg-organic-dark border-b-2 border-r-2 border-emerald-900 dark:border-emerald-500 rotate-45 z-20"></div>
                </div>
            </div>


            <button @click="buyPopup = true" class="flex-1 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 h-12 font-black text-[10px] uppercase tracking-[0.2em] shadow-[4px_4px_0px_0px_rgba(16,185,129,0.3)] active:translate-y-1 active:shadow-none transition-all">
                Beli Sekarang
            </button>
        </div>
    </div>

    <div x-show="buyPopup" 
         x-transition:opacity
         class="fixed inset-0 bg-emerald-950/60 backdrop-blur-sm z-[160]"
         @click="buyPopup = false"
         style="display: none;">
    </div>

    <div x-show="buyPopup"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="translate-y-full"
         x-transition:enter-end="translate-y-0"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="translate-y-0"
         x-transition:leave-end="translate-y-full"
         class="fixed bottom-0 left-0 right-0 bg-white dark:bg-organic-dark z-[170] rounded-t-[2.5rem] border-t-2 border-emerald-900 dark:border-emerald-500 p-8 shadow-2xl overflow-hidden"
         style="display: none;">
        
        <button @click="buyPopup = false" class="absolute top-6 right-6 w-10 h-10 rounded-full bg-gray-100 dark:bg-emerald-900/30 text-emerald-900 dark:text-emerald-400 flex items-center justify-center hover:bg-rose-500 hover:text-white transition-all z-20">
            <i class='bx bx-x text-2xl'></i>
        </button>

        <div class="absolute top-3 left-1/2 -translate-x-1/2 w-12 h-1 bg-emerald-100 dark:bg-emerald-800 rounded-full"></div>

        <div class="flex gap-6 mb-8 mt-4 pr-10"> <div class="w-24 h-24 bg-gray-50 dark:bg-emerald-900/20 border border-emerald-100 dark:border-emerald-800 rounded-2xl overflow-hidden flex-shrink-0">
                <img src="https://images.unsplash.com/photo-1614594975525-e45190c55d0b?w=300" class="w-full h-full object-cover" alt="Product Thumb">
            </div>
            <div class="flex flex-col justify-center">
                <h3 class="font-black text-emerald-900 dark:text-white uppercase italic text-xl tracking-tighter leading-none mb-2">Monstera Deliciosa</h3>
                <div class="flex items-baseline gap-2">
                    <span class="text-2xl font-black text-emerald-500 tracking-tighter">Rp 150.000</span>
                    <span class="text-[10px] font-bold text-gray-400 uppercase italic">/ pcs</span>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h4 class="text-[10px] font-black uppercase text-emerald-900 dark:text-emerald-500 tracking-[0.3em] mb-4">Pilih Variasi Produk:</h4>
            <div class="grid grid-cols-2 gap-3">
                <button @click="variant = 'polos'" 
                    :class="variant === 'polos' ? 'border-emerald-500 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600' : 'border-gray-100 dark:border-emerald-800 text-gray-400'"
                    class="p-4 border-2 text-[10px] font-black uppercase tracking-widest transition-all flex flex-col gap-1 text-left">
                    <span>Tanaman Polos</span>
                    <span class="text-[8px] opacity-60 italic">+ Rp 0</span>
                </button>
                <button @click="variant = 'lengkap'" 
                    :class="variant === 'lengkap' ? 'border-emerald-500 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600' : 'border-gray-100 dark:border-emerald-800 text-gray-400'"
                    class="p-4 border-2 text-[10px] font-black uppercase tracking-widest transition-all flex flex-col gap-1 text-left">
                    <span>Paket Lengkap</span>
                    <span class="text-[8px] opacity-60 italic">+ Rp 45.000</span>
                </button>
            </div>
        </div>

        <div class="flex items-center gap-4 pt-6 border-t border-emerald-100 dark:border-emerald-800/50">
            <div class="flex items-center border-2 border-emerald-900 dark:border-emerald-500 h-14 bg-white dark:bg-transparent">
                <button @click="qty > 1 ? qty-- : qty" class="w-12 flex items-center justify-center font-black text-emerald-900 dark:text-emerald-500 hover:bg-emerald-50">-</button>
                <span class="w-10 text-center font-black text-emerald-900 dark:text-white" x-text="qty"></span>
                <button @click="qty++" class="w-12 flex items-center justify-center font-black text-emerald-900 dark:text-emerald-500 hover:bg-emerald-50">+</button>
            </div>
            
            <button class="flex-1 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 h-14 font-black text-xs uppercase tracking-widest shadow-[6px_6px_0px_0px_rgba(16,185,129,0.3)] hover:translate-y-[-2px] transition-all">
                Konfirmasi Pembelian
            </button>
        </div>
    </div>
</div>



    </main>

    <?php include './../../components/footer_secondary.php'; ?>
    
</body>

</html>
