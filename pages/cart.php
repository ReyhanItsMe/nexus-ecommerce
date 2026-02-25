<!DOCTYPE html>
<html lang="id" x-data="{ darkMode: localStorage.getItem('dark') === 'true', openCart: false }" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusEco — Premium Organic Store</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
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

<section class="relative bg-emerald-900 dark:bg-emerald-950 pt-20 pb-10 overflow-visible transition-colors duration-300">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute -top-10 -left-10 w-40 h-40 bg-white/5 -rotate-45"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col md:flex-row justify-between items-end gap-6">
            
            <div class="relative z-10">
                <nav class="flex items-center gap-2 text-emerald-400 text-[10px] font-black uppercase tracking-[0.3em] mb-4">
                    <a href="index.php">Shop</a>
                    <i class='bx bx-chevron-right text-sm'></i>
                    <span class="text-white">Shopping Cart</span>
                </nav>
                <h1 class="text-4xl md:text-6xl font-black text-white tracking-tighter uppercase italic leading-none">
                    Your <span class="text-emerald-500 underline decoration-4 underline-offset-8">Green</span> Bag
                </h1>
            </div>

            <div x-data="{ openWish: false }" class="relative z-30">
                <button @click="openWish = !openWish" 
                        class="group relative flex items-center gap-3 bg-white/10 hover:bg-white/20 border border-white/10 px-6 py-4 transition-all active:scale-95">
                    <span class="text-[10px] font-black text-white uppercase tracking-widest hidden md:block">Saved Items</span>
                    <div class="relative">
                        <i class='bx bxs-heart text-2xl text-rose-500 animate-pulse'></i>
                        <span class="absolute -top-2 -right-2 w-5 h-5 bg-emerald-500 text-white text-[10px] font-black flex items-center justify-center">2</span>
                    </div>
                </button>

                <div x-show="openWish" 
                     @click.away="openWish = false"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="absolute right-0 mt-4 w-[320px] md:w-[400px] bg-white dark:bg-organic-dark shadow-[0_20px_60px_rgba(0,0,0,0.3)] border border-emerald-100 dark:border-emerald-800 p-6 z-50">
                    
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xs font-black uppercase tracking-widest text-emerald-900 dark:text-white italic">Wishlist Preview</h3>
                        <button @click="openWish = false" class="text-gray-400 hover:text-rose-500"><i class='bx bx-x text-xl'></i></button>
                    </div>

                    <div class="space-y-4 max-h-[400px] overflow-y-auto pr-2 custom-scrollbar">
                        <div class="flex items-center gap-4 group">
                            <div class="w-16 h-16 bg-emerald-50 dark:bg-emerald-900/20 flex-shrink-0 border border-emerald-100 dark:border-emerald-800">
                                <img src="https://images.unsplash.com/photo-1614594975525-e45190c55d0b?auto=format&fit=crop&q=80&w=200" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-xs font-black text-emerald-900 dark:text-white uppercase tracking-tight truncate">Calathea Orbifolia</h4>
                                <p class="text-[10px] text-emerald-500 font-bold italic">Rp 120.000</p>
                            </div>
                            <button class="px-4 py-2 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 text-[10px] font-black uppercase tracking-widest hover:bg-emerald-800 dark:hover:bg-emerald-400 transition-all active:scale-95 shadow-lg shadow-emerald-500/10">
                                Add
                            </button>
                        </div>
                    
                        <div class="flex items-center gap-4 group">
                            <div class="w-16 h-16 bg-emerald-50 dark:bg-emerald-900/20 flex-shrink-0 border border-emerald-100 dark:border-emerald-800">
                                <img src="https://images.unsplash.com/photo-1545239351-ef35f43d514b?auto=format&fit=crop&q=80&w=200" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-xs font-black text-emerald-900 dark:text-white uppercase tracking-tight truncate">Fiddle Leaf Fig</h4>
                                <p class="text-[10px] text-emerald-500 font-bold italic">Rp 350.000</p>
                            </div>
                            <button class="px-4 py-2 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 text-[10px] font-black uppercase tracking-widest hover:bg-emerald-800 dark:hover:bg-emerald-400 transition-all active:scale-95 shadow-lg shadow-emerald-500/10">
                                Add
                            </button>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-emerald-50 dark:border-emerald-800/50">
                        <a href="wishlist.php" class="block text-center text-[10px] font-black uppercase tracking-[0.2em] text-emerald-500 hover:underline italic">View All Saved Items</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="py-12 bg-white dark:bg-organic-dark min-h-screen pb-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <h2 class="text-3xl font-black text-emerald-900 dark:text-white tracking-tighter mb-10 uppercase italic">Your Cart (3)</h2>

        <div class="space-y-1">
            <div class="group flex items-center gap-4 p-4 border border-emerald-100 dark:border-emerald-800/50 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-all">
                <div class="w-20 h-20 bg-emerald-50 overflow-hidden flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1614594975525-e45190c55d0b?w=200" class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-emerald-900 dark:text-white text-sm">Monstera Deliciosa</h3>
                    <p class="text-[10px] text-emerald-500 font-bold uppercase tracking-widest mb-2">Indoor Plant</p>
                    <span class="text-sm font-black text-emerald-900 dark:text-emerald-400">Rp 150.000</span>
                </div>
                
                <div class="flex flex-col md:flex-row items-end md:items-center gap-4">
                    <div class="flex items-center border border-emerald-100 dark:border-emerald-800">
                        <button class="px-3 py-1 text-emerald-900 dark:text-white hover:bg-emerald-100 dark:hover:bg-emerald-800">-</button>
                        <span class="px-3 py-1 text-xs font-bold dark:text-white">1</span>
                        <button class="px-3 py-1 text-emerald-900 dark:text-white hover:bg-emerald-100 dark:hover:bg-emerald-800">+</button>
                    </div>
                    <button class="text-emerald-900/20 dark:text-white/20 hover:text-rose-500 transition-colors p-1">
                        <i class='bx bx-trash text-xl'></i>
                    </button>
                </div>
            </div>

            <div class="group flex items-center gap-4 p-4 border border-emerald-100 dark:border-emerald-800/50 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-all">
                <div class="w-20 h-20 bg-gray-100 overflow-hidden flex-shrink-0 relative">
                    <div class="absolute top-0 left-0 bg-rose-500 text-white text-[8px] font-black px-1 uppercase z-10">-20%</div>
                    <img src="https://images.unsplash.com/photo-1545239351-ef35f43d514b?w=200" class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-emerald-900 dark:text-white text-sm">Philodendron Pink</h3>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-sm font-black text-rose-500">Rp 400.000</span>
                        <span class="text-[10px] text-gray-400 line-through">Rp 500.000</span>
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row items-end md:items-center gap-4">
                    <div class="flex items-center border border-emerald-100 dark:border-emerald-800">
                        <button class="px-3 py-1 text-emerald-900 dark:text-white hover:bg-emerald-100 dark:hover:bg-emerald-800">-</button>
                        <span class="px-3 py-1 text-xs font-bold dark:text-white">1</span>
                        <button class="px-3 py-1 text-emerald-900 dark:text-white hover:bg-emerald-100 dark:hover:bg-emerald-800">+</button>
                    </div>
                    <button class="text-emerald-900/20 dark:text-white/20 hover:text-rose-500 transition-colors p-1">
                        <i class='bx bx-trash text-xl'></i>
                    </button>
                </div>
            </div>

            <div class="group flex items-center gap-4 p-4 border border-emerald-100 dark:border-emerald-800/50 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-all">
                <div class="w-20 h-20 bg-gray-100 overflow-hidden flex-shrink-0 relative">
                    <div class="absolute inset-0 bg-rose-600/20 flex items-center justify-center z-10">
                        <i class='bx bxs-bolt text-rose-600'></i>
                    </div>
                    <img src="https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?w=200" class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-emerald-900 dark:text-white text-sm">Sansevieria Trifasciata</h3>
                    <span class="text-sm font-black text-rose-500">Rp 85.000</span>
                </div>
                
                <div class="flex flex-col md:flex-row items-end md:items-center gap-4">
                    <div class="flex items-center border border-emerald-100 dark:border-emerald-800">
                        <button class="px-3 py-1 text-emerald-900 dark:text-white hover:bg-emerald-100 dark:hover:bg-emerald-800">-</button>
                        <span class="px-3 py-1 text-xs font-bold dark:text-white">2</span>
                        <button class="px-3 py-1 text-emerald-900 dark:text-white hover:bg-emerald-100 dark:hover:bg-emerald-800">+</button>
                    </div>
                    <button class="text-emerald-900/20 dark:text-white/20 hover:text-rose-500 transition-colors p-1">
                        <i class='bx bx-trash text-xl'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<div x-data="{ showDetail: false }">
    
    <div x-show="showDetail" 
         x-transition:enter="transition ease-out duration-500" 
         x-transition:enter-start="translate-y-full opacity-0" 
         x-transition:enter-end="translate-y-0 opacity-100" 
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="translate-y-0 opacity-100"
         x-transition:leave-end="translate-y-full opacity-0"
         class="fixed bottom-[88px] md:bottom-[96px] left-0 right-0 bg-white dark:bg-organic-dark border-t border-emerald-100 dark:border-emerald-800 p-6 shadow-[0_-20px_40px_rgba(0,0,0,0.1)] z-40 max-w-7xl mx-auto border-x">
        
        <div class="flex justify-between items-center mb-6">
            <h4 class="text-[10px] font-black uppercase tracking-[0.3em] text-emerald-500 italic">Order Summary</h4>
            <button @click="showDetail = false" class="text-emerald-900/20 dark:text-white/20 hover:text-rose-500 transition-colors">
                <i class='bx bx-x text-xl'></i>
            </button>
        </div>

        <div class="space-y-3">
            <div class="flex justify-between text-sm">
                <span class="text-emerald-900/50 dark:text-white/40 font-medium">Subtotal Produk</span>
                <span class="font-bold dark:text-white text-emerald-900">Rp 735.000</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-rose-500/60 font-medium italic">Diskon NexusEco</span>
                <span class="font-bold text-rose-500">- Rp 15.000</span>
            </div>
            <div class="w-full h-px bg-emerald-50 dark:bg-emerald-800/30 my-4"></div>
            <div class="flex justify-between items-end">
                <span class="text-[10px] font-black uppercase tracking-widest text-emerald-900 dark:text-white">Total Akhir</span>
                <span class="text-xl font-black italic text-emerald-600 dark:text-emerald-400 tracking-tighter leading-none">Rp 720.000</span>
            </div>
        </div>
    </div>

    <div class="fixed bottom-0 left-0 right-0 z-50 bg-emerald-900 dark:bg-emerald-950 p-4 md:p-6 border-t border-white/5 shadow-[0_-10px_30px_rgba(0,0,0,0.3)]">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
            
            <div class="flex items-center gap-4">
                <button @click="showDetail = !showDetail" 
                        class="w-12 h-12 bg-white/5 text-white flex items-center justify-center hover:bg-emerald-500 transition-all active:scale-90 border border-white/10">
                    <i class='bx text-2xl transition-transform duration-500' :class="showDetail ? 'bx-chevron-down' : 'bx-chevron-up'"></i>
                </button>
                
                <div class="hidden sm:block">
                    <p class="text-[8px] font-black text-emerald-400 uppercase tracking-[0.2em]">Total Amount</p>
                    <p class="text-xl font-black text-white italic tracking-tighter leading-none">Rp 720.000</p>
                </div>
            </div>

            <div class="flex items-center gap-4 flex-1 sm:flex-none justify-end">
                <div class="sm:hidden text-right leading-tight">
                    <p class="text-[8px] font-black text-emerald-400 uppercase tracking-widest">Total</p>
                    <p class="text-lg font-black text-white italic tracking-tighter">Rp 720.000</p>
                </div>
                <button class="px-10 py-4 bg-emerald-500 hover:bg-emerald-400 text-emerald-950 font-black text-xs uppercase tracking-[0.2em] transition-all active:scale-95 shadow-xl shadow-emerald-500/20">
                    Bayar Sekarang
                </button>
            </div>

        </div>
    </div>
</div>




    </main>

    <?php include './../components/footer_main.php'; ?>
</body>

</html>
