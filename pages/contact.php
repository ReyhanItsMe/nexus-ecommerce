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

        <section class="relative bg-white dark:bg-organic-dark pt-24 pb-16 md:pt-32 md:pb-24 overflow-hidden transition-colors duration-300">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-emerald-50/50 dark:bg-emerald-900/5 -skew-x-12 translate-x-32 hidden md:block"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                    
                    <div class="max-w-2xl text-center md:text-left">
                        <nav class="flex items-center justify-center md:justify-start gap-2 text-emerald-500 text-[10px] font-black uppercase tracking-[0.3em] mb-6">
                            <a href="index.php" class="hover:underline">Home</a>
                            <i class='bx bx-chevron-right text-sm'></i>
                            <span>Contact Us</span>
                        </nav>
        
                        <h1 class="text-4xl md:text-7xl font-black text-emerald-900 dark:text-white leading-[0.9] tracking-tighter mb-8">
                            Mari Berdiskusi <br>
                            <span class="text-emerald-500">Tentang Tanaman.</span>
                        </h1>
        
                        <p class="text-emerald-800/60 dark:text-emerald-100/40 text-base md:text-lg leading-relaxed max-w-lg">
                            Apakah Anda memiliki pertanyaan khusus, keluhan, atau sekadar ingin berbagi cerita tentang kebun Anda? Kami di sini untuk mendengarkan.
                        </p>
                    </div>
        
                    <div class="w-full md:w-auto">
                        <div class="bg-emerald-900 dark:bg-emerald-800 p-8 md:p-10 shadow-2xl relative">
                            <div class="absolute top-0 left-0 w-2 h-full bg-emerald-500"></div>
                            
                            <div class="space-y-8">
                                <div>
                                    <p class="text-emerald-400 text-[10px] font-black uppercase tracking-widest mb-2">Response Time</p>
                                    <h3 class="text-white text-2xl font-bold italic tracking-tight underline underline-offset-8 decoration-emerald-500/50">&lt; 15 Menit</h3>
                                </div>
                                <div>
                                    <p class="text-emerald-400 text-[10px] font-black uppercase tracking-widest mb-2">Service Hours</p>
                                    <h3 class="text-white text-xl font-bold tracking-tight uppercase">08:00 — 21:00</h3>
                                    <p class="text-emerald-100/40 text-[10px] mt-1 italic">Tersedia Setiap Hari (Termasuk Libur)</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section class="py-20 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    
                    <div>
                        <div class="mb-10">
                            <h2 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-3">Direct Channels</h2>
                            <h3 class="text-3xl font-black text-emerald-900 dark:text-white tracking-tighter">Hubungi Kami <br> Secara Langsung.</h3>
                        </div>
        
                        <div class="space-y-4">
                            <a href="https://wa.me/6281234567890" target="_blank" class="group flex items-center justify-between p-6 bg-emerald-50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800/50 hover:bg-emerald-500 transition-all duration-300">
                                <div class="flex items-center gap-5">
                                    <i class='bx bxl-whatsapp text-3xl text-emerald-600 dark:text-emerald-400 group-hover:text-white transition-colors'></i>
                                    <div>
                                        <h4 class="font-bold text-emerald-900 dark:text-white group-hover:text-white transition-colors">WhatsApp Business</h4>
                                        <p class="text-[10px] text-emerald-800/40 dark:text-emerald-100/30 group-hover:text-white/70 uppercase tracking-widest font-black">Fast Response • 08:00 - 21:00</p>
                                    </div>
                                </div>
                                <i class='bx bx-right-arrow-alt text-2xl text-emerald-300 group-hover:text-white group-hover:translate-x-2 transition-all'></i>
                            </a>
        
                            <a href="mailto:support@nexuseco.com" class="group flex items-center justify-between p-6 bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/50 hover:border-emerald-500 transition-all duration-300">
                                <div class="flex items-center gap-5">
                                    <i class='bx bx-envelope text-3xl text-emerald-600 dark:text-emerald-400'></i>
                                    <div>
                                        <h4 class="font-bold text-emerald-900 dark:text-white">Email Official</h4>
                                        <p class="text-[10px] text-emerald-800/40 dark:text-emerald-100/30 uppercase tracking-widest font-black">support@nexuseco.com</p>
                                    </div>
                                </div>
                                <i class='bx bx-link-external text-xl text-emerald-300 group-hover:text-emerald-500 transition-all'></i>
                            </a>
                        </div>
                    </div>
        
                    <div>
                        <div class="mb-10">
                            <h2 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-3">Community Hub</h2>
                            <h3 class="text-3xl font-black text-emerald-900 dark:text-white tracking-tighter">Ikuti Perjalanan <br> Hijau Kami.</h3>
                        </div>
        
                        <div class="grid grid-cols-2 gap-4">
                            <a href="#" class="p-6 border border-emerald-100 dark:border-emerald-800/50 hover:bg-emerald-50 dark:hover:bg-emerald-900/10 transition-all group">
                                <i class='bx bxl-instagram text-2xl text-emerald-900 dark:text-white mb-4 block group-hover:text-emerald-500 transition-colors'></i>
                                <span class="text-[10px] font-black uppercase tracking-widest text-emerald-800/40 dark:text-emerald-100/30 block mb-1">Instagram</span>
                                <p class="text-sm font-bold text-emerald-900 dark:text-white italic">@nexuseco_id</p>
                            </a>
        
                            <a href="#" class="p-6 border border-emerald-100 dark:border-emerald-800/50 hover:bg-emerald-50 dark:hover:bg-emerald-900/10 transition-all group">
                                <i class='bx bxl-tiktok text-2xl text-emerald-900 dark:text-white mb-4 block group-hover:text-emerald-500 transition-colors'></i>
                                <span class="text-[10px] font-black uppercase tracking-widest text-emerald-800/40 dark:text-emerald-100/30 block mb-1">TikTok</span>
                                <p class="text-sm font-bold text-emerald-900 dark:text-white italic">@nexuseco.plants</p>
                            </a>
        
                            <a href="#" class="p-6 border border-emerald-100 dark:border-emerald-800/50 hover:bg-emerald-50 dark:hover:bg-emerald-900/10 transition-all group">
                                <i class='bx bxl-youtube text-2xl text-emerald-900 dark:text-white mb-4 block group-hover:text-emerald-500 transition-colors'></i>
                                <span class="text-[10px] font-black uppercase tracking-widest text-emerald-800/40 dark:text-emerald-100/30 block mb-1">YouTube</span>
                                <p class="text-sm font-bold text-emerald-900 dark:text-white italic">NexusEco TV</p>
                            </a>
        
                            <a href="#" class="p-6 border border-emerald-100 dark:border-emerald-800/50 hover:bg-emerald-50 dark:hover:bg-emerald-900/10 transition-all group">
                                <i class='bx bxl-pinterest text-2xl text-emerald-900 dark:text-white mb-4 block group-hover:text-emerald-500 transition-colors'></i>
                                <span class="text-[10px] font-black uppercase tracking-widest text-emerald-800/40 dark:text-emerald-100/30 block mb-1">Inspirasi</span>
                                <p class="text-sm font-bold text-emerald-900 dark:text-white italic">Lookbook Eco</p>
                            </a>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section class="py-20 bg-emerald-50/50 dark:bg-black/10 transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex flex-col lg:flex-row gap-12">
                    
                    <div class="flex-1 bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/50 p-8 md:p-12 shadow-2xl shadow-emerald-900/5">
                        <h3 class="text-2xl font-black text-emerald-900 dark:text-white tracking-tighter mb-8 italic uppercase">Kirim Pesan Langsung</h3>
                        
                        <form action="send_message.php" method="POST" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-500 mb-2">Nama</label>
                                    <input type="text" placeholder="John Doe" class="w-full px-5 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all text-sm">
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-500 mb-2">Subjek</label>
                                    <input type="text" placeholder="Tanya Stok / Komplain" class="w-full px-5 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all text-sm">
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-500 mb-2">Pesan Anda</label>
                                <textarea rows="4" placeholder="Tuliskan pesan Anda secara detail..." class="w-full px-5 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all text-sm resize-none"></textarea>
                            </div>
        
                            <button class="px-12 py-5 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 font-black text-xs uppercase tracking-[0.2em] hover:bg-emerald-800 dark:hover:bg-emerald-400 transition-all active:scale-95 shadow-xl shadow-emerald-500/10">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
        
                    <div class="w-full lg:w-1/3 space-y-8">
                        <div>
                            <h3 class="text-xl font-black text-emerald-900 dark:text-white tracking-tighter mb-4 italic uppercase">Nursery Hub</h3>
                            <p class="text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                                Kunjungi galeri tanaman kami untuk melihat langsung koleksi organik terbaik secara langsung.
                            </p>
                        </div>
        
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <i class='bx bx-map-pin text-2xl text-emerald-500'></i>
                                <div>
                                    <h4 class="font-bold text-emerald-900 dark:text-white text-sm mb-1">Alamat Fisik</h4>
                                    <p class="text-xs text-emerald-800/50 dark:text-emerald-100/30 leading-relaxed italic">
                                        Kawasan Hijau Alam Sutera, No. 45<br>
                                        Serpong, Tangerang Selatan, 15320
                                    </p>
                                </div>
                            </div>
        
                            <div class="w-full aspect-video bg-emerald-100 dark:bg-emerald-900/30 border border-emerald-200 dark:border-emerald-800 relative group overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=500" class="w-full h-full object-cover opacity-50 grayscale group-hover:grayscale-0 transition-all duration-700">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <a href="#" class="bg-white dark:bg-emerald-500 px-4 py-2 text-[10px] font-black uppercase tracking-widest text-emerald-900 shadow-xl">Open Maps</a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>

    </main>

    <?php include './../components/footer_main.php'; ?>
</body>

</html>
