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
    <?php include 'components/navbar_main.php'; ?>

    <main class="relative pt-20 pb-12 min-h-[calc(100vh-80px)] transition-all duration-300">
        
      <section class="w-full h-[calc(100vh-5rem)] min-h-[600px] relative overflow-hidden bg-emerald-900 dark:bg-emerald-950">
          
          <div class="absolute inset-0 z-0">
              <img src="https://images.unsplash.com/photo-1545241047-6083a3684587?w=1600&q=80" 
                   alt="Premium Plant" 
                   class="w-full h-full object-cover object-center md:object-right transform hover:scale-105 transition-transform duration-[5000ms]">
              
              <div class="absolute inset-0 -left-1 bg-gradient-to-t from-emerald-900 via-emerald-900/40 to-transparent md:bg-gradient-to-l md:from-transparent md:via-emerald-900/60 md:to-emerald-900 dark:from-emerald-950 dark:via-emerald-950/40 dark:md:to-emerald-950 z-10"></div>
          </div>
      
          <div class="relative z-20 h-full max-w-7xl mx-auto px-4 sm:px-6 flex flex-col md:flex-row">
              
              <div class="w-full md:w-2/3 h-full flex flex-col justify-end md:justify-center items-start space-y-6 pb-20 md:pb-0">
                  <span class="inline-block px-4 py-1.5 bg-emerald-500/20 text-emerald-400 rounded-full text-xs font-bold tracking-widest uppercase border border-emerald-500/30 backdrop-blur-md">
                      Premium Organic Store
                  </span>
                  
                  <h1 class="text-4xl md:text-7xl lg:text-8xl font-extrabold text-white leading-[0.9] tracking-tighter">
                      Welcome to <br>
                      <span class="text-emerald-500">NexusEco</span>.
                  </h1>
                  
                  <p class="text-emerald-100/80 text-base md:text-xl max-w-xl leading-relaxed">
                      Ubah ruang hidup Anda menjadi ekosistem yang lebih segar dan sehat dengan koleksi tanaman premium pilihan kami. Alam kini hanya sejauh sentuhan jari.
                  </p>
      
                  <div class="flex flex-wrap gap-4 pt-4 lg:pt-8">
                      <a href="/pages/store.php" class="px-10 py-4 bg-emerald-500 hover:bg-emerald-400 text-emerald-950 font-black rounded-2xl transition-all shadow-xl shadow-emerald-500/20 active:scale-95 group flex items-center">
                          Visit Store <i class='bx bx-right-arrow-alt ml-2 text-2xl group-hover:translate-x-1 transition-transform'></i>
                      </a>
                      <a href="#learn-more" class="px-10 py-4 bg-white/10 hover:bg-white/20 text-white backdrop-blur-md border border-white/20 font-bold rounded-2xl transition-all">
                          Learn More
                      </a>
                  </div>
                  
              </div>
      
              <div class="hidden md:block md:w-1/3"></div>
          </div>
      </section>

      <section class="py-10 bg-white dark:bg-organic-dark transition-colors duration-300">
          <div class="max-w-7xl mx-auto px-4 sm:px-6">
              <div class="flex flex-col md:flex-row md:items-end justify-between gap-8">
                  
                  <div class="max-w-2xl">
                      <h2 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-3">Your Green Journey Starts Here</h2>
                      <h3 class="text-4xl md:text-5xl font-extrabold text-emerald-900 dark:text-white leading-none mb-4">
                          Selamat Datang di <span class="text-emerald-500">NexusEco</span>.
                      </h3>
                      <p class="text-emerald-800/60 dark:text-emerald-100/50 text-base md:text-lg">
                          Tempat terbaik untuk melengkapi koleksi tanaman organik Anda. Cari, pilih, dan bawa pulang keasrian alam ke ruang pribadi Anda.
                      </p>
                  </div>
      
                  <div class="w-full md:w-96">
                      <div class="relative group">
                          <input type="text" placeholder="Cari tanaman impianmu..." 
                                 class="w-full bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-emerald-100 dark:border-emerald-800 focus:border-emerald-500 outline-none py-4 px-2 text-emerald-900 dark:text-white transition-all">
                          <button class="absolute right-2 top-1/2 -translate-y-1/2 text-emerald-500 hover:scale-110 transition-transform">
                              <i class='bx bx-search text-2xl'></i>
                          </button>
                      </div>
                  </div>
              </div>
      
              <div class="mt-10 flex items-center gap-4">
                  <span class="flex-shrink-0 text-xs font-black text-emerald-900/40 dark:text-emerald-100/30 uppercase tracking-widest">
                      Populer:
                  </span>
              
                  <div class="flex flex-1 items-center gap-3 overflow-x-auto no-scrollbar pb-2 pt-1">
                      <button class="flex-shrink-0 px-6 py-2 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 text-xs font-bold transition-all active:scale-95">
                          All Plants
                      </button>
                      <button class="flex-shrink-0 px-6 py-2 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-900 dark:text-emerald-100 text-xs font-bold hover:bg-emerald-100 dark:hover:bg-emerald-800 transition-all active:scale-95">
                          Indoor
                      </button>
                      <button class="flex-shrink-0 px-6 py-2 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-900 dark:text-emerald-100 text-xs font-bold hover:bg-emerald-100 dark:hover:bg-emerald-800 transition-all active:scale-95">
                          Best Seller
                      </button>
                      <button class="flex-shrink-0 px-6 py-2 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-900 dark:text-emerald-100 text-xs font-bold hover:bg-emerald-100 dark:hover:bg-emerald-800 transition-all active:scale-95">
                          New Arrival
                      </button>
                      <button class="flex-shrink-0 px-6 py-2 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-900 dark:text-emerald-100 text-xs font-bold hover:bg-emerald-100 dark:hover:bg-emerald-800 transition-all active:scale-95">
                          Outdoor
                      </button>
                      <button class="flex-shrink-0 px-6 py-2 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-900 dark:text-emerald-100 text-xs font-bold hover:bg-emerald-100 dark:hover:bg-emerald-800 transition-all active:scale-95">
                          Rare Plants
                      </button>
                  </div>
              </div>
          </div>
      </section>

      <section class="py-10 bg-gray-50 dark:bg-black/20">
          <div class="max-w-7xl mx-auto px-4 sm:px-6">
              <h3 class="text-xl md:text-2xl font-bold text-emerald-900 dark:text-white mb-6 md:mb-8">Card Variations</h3>
              
              <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-8">
      
                  <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden rounded-xl md:rounded-none transition-all hover:shadow-xl hover:-translate-y-1">
                      <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                          <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                              <i class='bx bx-heart text-xl'></i>
                          </button>
      
                          <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=500" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                          
                          <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-bold text-xs md:text-sm z-20">
                              + Add to Cart
                          </button>
                      </div>
      
                      <div class="p-3 md:p-5 flex flex-col flex-1">
                          <p class="text-[10px] md:text-xs font-bold text-emerald-500 uppercase tracking-wider mb-1">Indoor</p>
                          <h3 class="font-bold text-emerald-900 dark:text-white text-sm md:text-lg leading-tight mb-2 line-clamp-2">Monstera Deliciosa King</h3>
                          
                          <div class="mt-auto pt-3 md:pt-4 flex items-center gap-2 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                              <span class="text-sm md:text-lg font-black text-emerald-900 dark:text-emerald-400">Rp 150.000</span>
                          </div>
                      </div>
                  </div>
      
                  <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden rounded-xl md:rounded-none transition-all hover:shadow-xl hover:-translate-y-1">
                      <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                          <div class="absolute top-2 left-2 z-10 bg-rose-500 text-white text-[10px] font-black px-2 py-1 uppercase tracking-widest rounded-sm md:rounded-none">
                              20% OFF
                          </div>
                          <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                              <i class='bx bx-heart text-xl'></i>
                          </button>
      
                          <img src="https://images.unsplash.com/photo-1614594975525-e45190c55d0b?w=500" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                          
                          <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-bold text-xs md:text-sm z-20">
                              + Add to Cart
                          </button>
                      </div>
      
                      <div class="p-3 md:p-5 flex flex-col flex-1">
                          <p class="text-[10px] md:text-xs font-bold text-emerald-500 uppercase tracking-wider mb-1">Rare</p>
                          <h3 class="font-bold text-emerald-900 dark:text-white text-sm md:text-lg leading-tight mb-2 line-clamp-2">Philodendron Pink Princess</h3>
                          
                          <div class="mt-auto pt-3 md:pt-4 flex flex-col md:flex-row md:items-center gap-1 md:gap-2 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                              <span class="text-sm md:text-lg font-black text-rose-500">Rp 400.000</span>
                              <span class="text-[10px] md:text-xs text-gray-400 line-through font-medium">Rp 500.000</span>
                          </div>
                      </div>
                  </div>
      
                  <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden rounded-xl md:rounded-none transition-all hover:shadow-xl hover:-translate-y-1">
                      <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                          <div class="absolute top-2 left-2 z-10 bg-rose-500 text-white text-[10px] font-black px-2 py-1 uppercase tracking-widest rounded-sm md:rounded-none">
                              Flash Sale
                          </div>
                          <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                              <i class='bx bx-heart text-xl'></i>
                          </button>
                          
                          <img src="https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?w=500" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                          
                          <div class="absolute bottom-0 left-0 right-0 bg-emerald-900/90 backdrop-blur-sm p-1.5 md:p-2 flex justify-center items-center gap-2 md:gap-4 text-white z-10 group-hover:opacity-0 transition-opacity duration-300">
                              <div class="text-center"><span class="block text-[10px] md:text-xs font-bold">02</span></div> :
                              <div class="text-center"><span class="block text-[10px] md:text-xs font-bold">15</span></div> :
                              <div class="text-center"><span class="block text-[10px] md:text-xs font-bold">40</span></div>
                          </div>
      
                          <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-bold text-xs md:text-sm z-20">
                              + Add to Cart
                          </button>
                      </div>
      
                      <div class="p-3 md:p-5 flex flex-col flex-1">
                          <p class="text-[10px] md:text-xs font-bold text-emerald-500 uppercase tracking-wider mb-1">Outdoor</p>
                          <h3 class="font-bold text-emerald-900 dark:text-white text-sm md:text-lg leading-tight mb-2 line-clamp-2">Sansevieria Trifasciata</h3>
                          
                          <div class="mt-auto pt-3 md:pt-4 flex flex-col md:flex-row md:items-center gap-1 md:gap-2 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                              <span class="text-sm md:text-lg font-black text-rose-500">Rp 85.000</span>
                              <span class="text-[10px] md:text-xs text-gray-400 line-through font-medium">Rp 120.000</span>
                          </div>
                      </div>
                  </div>
      
                  <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden rounded-xl md:rounded-none transition-all hover:shadow-xl hover:-translate-y-1">
                      <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                          <div class="absolute top-2 left-2 z-10 bg-amber-400 text-emerald-950 text-[10px] font-black px-2 py-1 uppercase tracking-widest shadow-sm rounded-sm md:rounded-none">
                              Best Seller
                          </div>
                          <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                              <i class='bx bx-heart text-xl'></i>
                          </button>
      
                          <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?w=500" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                          <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-bold text-xs md:text-sm z-20">
                              + Add to Cart
                          </button>
                      </div>
      
                      <div class="p-3 md:p-5 flex flex-col flex-1">
                          <p class="text-[10px] md:text-xs font-bold text-emerald-500 uppercase tracking-wider mb-1">Indoor</p>
                          <h3 class="font-bold text-emerald-900 dark:text-white text-sm md:text-lg leading-tight mb-2 line-clamp-2">Ficus Elastica Rubber</h3>
                          
                          <div class="mt-auto pt-3 md:pt-4 flex items-center gap-2 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                              <span class="text-sm md:text-lg font-black text-emerald-900 dark:text-emerald-400">Rp 180.000</span>
                          </div>
                      </div>
                  </div>
      
                  <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden rounded-xl md:rounded-none transition-all hover:shadow-xl hover:-translate-y-1">
                      <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                          <div class="absolute top-2 left-2 z-10 flex flex-col gap-1 items-start">
                              <div class="bg-amber-400 text-emerald-950 text-[10px] font-black px-2 py-1 uppercase tracking-widest shadow-sm rounded-sm md:rounded-none">
                                  Best Seller
                              </div>
                              <div class="bg-rose-500 text-white text-[10px] font-black px-2 py-1 uppercase tracking-widest shadow-sm rounded-sm md:rounded-none">
                                  15% OFF
                              </div>
                          </div>
                          <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                              <i class='bx bx-heart text-xl'></i>
                          </button>
                          
                          <img src="https://images.unsplash.com/photo-1520412099551-62b6bafeb5bb?w=500" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                          <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-bold text-xs md:text-sm z-20">
                              + Add to Cart
                          </button>
                      </div>
      
                      <div class="p-3 md:p-5 flex flex-col flex-1">
                          <p class="text-[10px] md:text-xs font-bold text-emerald-500 uppercase tracking-wider mb-1">Succulent</p>
                          <h3 class="font-bold text-emerald-900 dark:text-white text-sm md:text-lg leading-tight mb-2 line-clamp-2">Aloe Vera Premium</h3>
                          
                          <div class="mt-auto pt-3 md:pt-4 flex flex-col md:flex-row md:items-center gap-1 md:gap-2 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                              <span class="text-sm md:text-lg font-black text-rose-500">Rp 45.000</span>
                              <span class="text-[10px] md:text-xs text-gray-400 line-through font-medium">Rp 55.000</span>
                          </div>
                      </div>
                  </div>
      
                  <div class="group bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/30 flex flex-col h-full relative overflow-hidden rounded-xl md:rounded-none transition-all hover:shadow-xl hover:-translate-y-1">
                      <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                          <div class="absolute top-2 left-2 z-10 bg-amber-400 text-emerald-950 text-[10px] font-black px-2 py-1 uppercase tracking-widest shadow-sm rounded-sm md:rounded-none">
                              Best Seller
                          </div>
                          <button class="absolute top-2 right-2 z-20 w-8 h-8 bg-white/80 dark:bg-black/50 backdrop-blur-sm flex items-center justify-center text-gray-400 hover:bg-rose-500 hover:text-white transition-all shadow-sm">
                              <i class='bx bx-heart text-xl'></i>
                          </button>
      
                          <img src="https://images.unsplash.com/photo-1525498128493-380d1990a112?w=500" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                          
                          <div class="absolute bottom-0 left-0 right-0 bg-rose-600/90 backdrop-blur-sm p-1.5 md:p-2 flex justify-center items-center gap-2 md:gap-4 text-white z-10 group-hover:opacity-0 transition-opacity duration-300">
                              <span class="text-[8px] md:text-[10px] font-black uppercase tracking-wider mr-1 hidden md:block">Ending:</span>
                              <div class="flex gap-1 items-center font-mono text-[10px] md:text-xs font-bold">
                                  <span>05</span>:<span>00</span>:<span>22</span>
                              </div>
                          </div>
      
                          <button class="absolute bottom-0 left-0 right-0 bg-emerald-900 text-white py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-bold text-xs md:text-sm z-20">
                              + Add to Cart
                          </button>
                      </div>
      
                      <div class="p-3 md:p-5 flex flex-col flex-1">
                          <p class="text-[10px] md:text-xs font-bold text-emerald-500 uppercase tracking-wider mb-1">Indoor</p>
                          <h3 class="font-bold text-emerald-900 dark:text-white text-sm md:text-lg leading-tight mb-2 line-clamp-2">Peace Lily Domino</h3>
                          
                          <div class="mt-auto pt-3 md:pt-4 flex flex-col md:flex-row md:items-center gap-1 md:gap-2 border-t border-dashed border-emerald-100 dark:border-emerald-800/50">
                              <span class="text-sm md:text-lg font-black text-rose-500">Rp 190.000</span>
                              <span class="text-[10px] md:text-xs text-gray-400 line-through font-medium">Rp 250.000</span>
                          </div>
                      </div>
                  </div>
      
              </div>
          </div>
      </section>

      <section class="pb-24 bg-white dark:bg-organic-dark transition-colors overflow-hidden">
          <div class="max-w-7xl mx-auto px-4 sm:px-6">
              
              <a href="/pages/store.php" class="group relative flex flex-col md:flex-row items-center justify-between border-2 border-emerald-900 dark:border-emerald-500 p-8 md:p-12 overflow-hidden transition-all hover:bg-emerald-900 dark:hover:bg-emerald-500">
                  
                  <span class="absolute right-0 bottom-0 text-8xl font-black text-emerald-500/5 italic leading-none translate-y-1/4 translate-x-1/4 group-hover:text-white/10 transition-colors uppercase select-none">
                      Full Catalog
                  </span>
      
                  <div class="relative z-10 text-center md:text-left mb-8 md:mb-0">
                      <h3 class="text-3xl md:text-5xl font-black text-emerald-900 dark:text-white group-hover:text-white dark:group-hover:text-emerald-950 uppercase italic tracking-tighter leading-none mb-4">
                          Lihat <span class="text-emerald-500 group-hover:text-white transition-colors">Semua</span> Koleksi.
                      </h3>
                      <p class="text-[10px] md:text-xs font-bold text-emerald-900/40 dark:text-white/30 group-hover:text-white/60 uppercase tracking-[0.3em]">
                          Temukan lebih dari 500+ spesies tanaman dan perlengkapan nursery.
                      </p>
                  </div>
      
                  <div class="relative z-10 flex items-center gap-6">
                      <div class="hidden md:flex flex-col items-end">
                          <span class="text-[10px] font-black text-emerald-900 dark:text-white group-hover:text-white dark:group-hover:text-emerald-950 uppercase">Go To Store</span>
                          <span class="text-[8px] font-medium text-emerald-500 group-hover:text-emerald-200 uppercase tracking-widest">nexus-eco/catalog-2026</span>
                      </div>
                      
                      <div class="w-16 h-16 md:w-20 md:h-20 bg-emerald-500 text-emerald-950 rounded-none flex items-center justify-center group-hover:bg-white transition-all shadow-[10px_10px_0px_0px_rgba(16,185,129,0.2)] group-hover:shadow-none group-hover:translate-x-1 group-hover:translate-y-1">
                          <i class='bx bx-right-arrow-alt text-4xl'></i>
                      </div>
                  </div>
      
              </a>
      
              <div class="mt-8 flex justify-center md:justify-start gap-12 opacity-30 grayscale group-hover:grayscale-0 transition-all">
                  <div class="flex items-center gap-2">
                      <i class='bx bxs-check-shield text-emerald-500'></i>
                      <span class="text-[9px] font-black uppercase text-emerald-900 dark:text-white tracking-widest">Verified Quality</span>
                  </div>
                  <div class="flex items-center gap-2">
                      <i class='bx bxs-truck text-emerald-500'></i>
                      <span class="text-[9px] font-black uppercase text-emerald-900 dark:text-white tracking-widest">Fast Delivery</span>
                  </div>
              </div>
      
          </div>
      </section>

      <section class="py-20 bg-white dark:bg-organic-dark border-t border-emerald-50 dark:border-emerald-900/30 transition-colors duration-300">
          <div class="max-w-7xl mx-auto px-4 sm:px-6">
              
              <div class="text-center max-w-3xl mx-auto mb-16">
                  <span class="text-emerald-500 font-black tracking-[0.2em] uppercase text-xs mb-2 block">Our Promise</span>
                  <h2 class="text-3xl md:text-4xl font-extrabold text-emerald-900 dark:text-white leading-tight">
                      Growing with <span class="text-emerald-600 dark:text-emerald-400">Confidence</span>.
                  </h2>
                  <p class="mt-4 text-emerald-800/60 dark:text-emerald-100/50">
                      Kami tidak hanya menjual tanaman, kami memberikan pengalaman berkebun yang tenang, aman, dan terjamin kualitasnya.
                  </p>
              </div>
      
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      
                  <div class="group p-8 bg-emerald-50/50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800/30 hover:bg-white dark:hover:bg-emerald-900/30 hover:shadow-2xl hover:shadow-emerald-900/10 hover:-translate-y-2 transition-all duration-300">
                      <div class="w-16 h-16 bg-white dark:bg-emerald-800 border border-emerald-100 dark:border-emerald-700 flex items-center justify-center text-3xl text-emerald-600 dark:text-emerald-300 mb-6 group-hover:bg-emerald-600 group-hover:text-white group-hover:border-emerald-600 transition-colors duration-300 shadow-sm">
                          <i class='bx bx-leaf'></i>
                      </div>
                      <h3 class="text-lg font-bold text-emerald-900 dark:text-white mb-3">100% Organic</h3>
                      <p class="text-sm text-emerald-800/60 dark:text-emerald-100/50 leading-relaxed">
                          Tanaman dirawat tanpa pestisida kimia berbahaya. Aman untuk hewan peliharaan dan udara di rumah Anda.
                      </p>
                  </div>
      
                  <div class="group p-8 bg-emerald-50/50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800/30 hover:bg-white dark:hover:bg-emerald-900/30 hover:shadow-2xl hover:shadow-emerald-900/10 hover:-translate-y-2 transition-all duration-300">
                      <div class="w-16 h-16 bg-white dark:bg-emerald-800 border border-emerald-100 dark:border-emerald-700 flex items-center justify-center text-3xl text-emerald-600 dark:text-emerald-300 mb-6 group-hover:bg-emerald-600 group-hover:text-white group-hover:border-emerald-600 transition-colors duration-300 shadow-sm">
                          <i class='bx bx-package'></i>
                      </div>
                      <h3 class="text-lg font-bold text-emerald-900 dark:text-white mb-3">Secure Packaging</h3>
                      <p class="text-sm text-emerald-800/60 dark:text-emerald-100/50 leading-relaxed">
                          Teknologi pengemasan 4-lapis tahan guncangan. Menjamin tanaman tiba segar dan utuh, ke mana pun tujuannya.
                      </p>
                  </div>
      
                  <div class="group p-8 bg-emerald-50/50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800/30 hover:bg-white dark:hover:bg-emerald-900/30 hover:shadow-2xl hover:shadow-emerald-900/10 hover:-translate-y-2 transition-all duration-300">
                      <div class="w-16 h-16 bg-white dark:bg-emerald-800 border border-emerald-100 dark:border-emerald-700 flex items-center justify-center text-3xl text-emerald-600 dark:text-emerald-300 mb-6 group-hover:bg-emerald-600 group-hover:text-white group-hover:border-emerald-600 transition-colors duration-300 shadow-sm">
                          <i class='bx bx-shield-quarter'></i>
                      </div>
                      <h3 class="text-lg font-bold text-emerald-900 dark:text-white mb-3">7-Day Warranty</h3>
                      <p class="text-sm text-emerald-800/60 dark:text-emerald-100/50 leading-relaxed">
                          Tanaman layu atau mati saat sampai? Kami kirim yang baru atau uang kembali 100%. Tanpa ribet.
                      </p>
                  </div>
      
                  <div class="group p-8 bg-emerald-50/50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800/30 hover:bg-white dark:hover:bg-emerald-900/30 hover:shadow-2xl hover:shadow-emerald-900/10 hover:-translate-y-2 transition-all duration-300">
                      <div class="w-16 h-16 bg-white dark:bg-emerald-800 border border-emerald-100 dark:border-emerald-700 flex items-center justify-center text-3xl text-emerald-600 dark:text-emerald-300 mb-6 group-hover:bg-emerald-600 group-hover:text-white group-hover:border-emerald-600 transition-colors duration-300 shadow-sm">
                          <i class='bx bx-support'></i>
                      </div>
                      <h3 class="text-lg font-bold text-emerald-900 dark:text-white mb-3">Expert Support</h3>
                      <p class="text-sm text-emerald-800/60 dark:text-emerald-100/50 leading-relaxed">
                          Bingung cara merawatnya? Konsultasi gratis seumur hidup dengan ahli botani kami via WhatsApp.
                      </p>
                  </div>
      
              </div>
          </div>
      </section>
 
<section class="py-24 bg-white dark:bg-organic-dark transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div class="max-w-xl">
                <h2 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-3">Community Gallery</h2>
                <h3 class="text-3xl md:text-5xl font-extrabold text-emerald-900 dark:text-white leading-tight">
                    See How They <span class="text-emerald-600/20 dark:text-emerald-500/20 outline-text">Style</span> It.
                </h3>
            </div>
            <a href="#" class="group flex items-center gap-3 text-emerald-900 dark:text-white font-bold hover:text-emerald-500 transition-colors">
                <span class="w-12 h-12 rounded-full border border-emerald-100 dark:border-emerald-800 flex items-center justify-center group-hover:bg-emerald-500 group-hover:text-white transition-all">
                    <i class='bx bxl-instagram text-2xl'></i>
                </span>
                <div>
                    <p class="text-[10px] uppercase tracking-widest opacity-50">Follow us on IG</p>
                    <p class="text-sm">@nexuseco_plants</p>
                </div>
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="col-span-2 row-span-2 relative group overflow-hidden bg-emerald-100">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800" class="w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-110">
                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class='bx bxl-instagram text-white text-4xl'></i>
                </div>
            </div>
            
            <div class="relative group overflow-hidden bg-emerald-100 aspect-square">
                <img src="https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?w=400" class="w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-110">
                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class='bx bxl-instagram text-white text-3xl'></i>
                </div>
            </div>

            <div class="relative group overflow-hidden bg-emerald-100 aspect-square">
                <img src="https://images.unsplash.com/photo-1520412099551-62b6bafeb5bb?w=400" class="w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-110">
                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class='bx bxl-instagram text-white text-3xl'></i>
                </div>
            </div>

            <div class="relative group overflow-hidden bg-emerald-100 aspect-square">
                <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=400" class="w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-110">
                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class='bx bxl-instagram text-white text-3xl'></i>
                </div>
            </div>

            <div class="relative group overflow-hidden bg-emerald-100 aspect-square">
                <img src="https://images.unsplash.com/photo-1510265119258-db115b0e8172?w=400" class="w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-110">
                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class='bx bxl-instagram text-white text-3xl'></i>
                </div>
            </div>
        </div>
    </div>
</section>


      <section class="py-20 bg-emerald-900 dark:bg-emerald-950">
          <div class="max-w-7xl mx-auto px-4 sm:px-6">
              <div class="flex flex-col md:flex-row items-center justify-between gap-10">
                  <div class="text-center md:text-left">
                      <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Dapatkan Voucher 10%.</h2>
                      <p class="text-emerald-100/60 max-w-md">Daftarkan email Anda untuk tips perawatan tanaman organik dan promo eksklusif mingguan.</p>
                  </div>
                  <div class="w-full md:w-auto">
                      <form class="flex flex-col sm:flex-row gap-2">
                          <input type="email" placeholder="Alamat email Anda..." class="px-6 py-4 bg-white/10 border border-white/20 text-white outline-none focus:border-emerald-500 min-w-[300px] transition-all">
                          <button class="px-8 py-4 bg-emerald-500 hover:bg-emerald-400 text-emerald-950 font-black transition-all active:scale-95">JOIN NOW</button>
                      </form>
                  </div>
              </div>
          </div>
      </section>

    </main>

    <?php include 'components/footer.php'; ?>
</body>

</html>
