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

        <section class="relative bg-white dark:bg-organic-dark pt-32 pb-20 overflow-hidden transition-colors duration-300">
            <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
                <div class="absolute top-10 right-10 text-[180px] font-black text-emerald-500/5 italic leading-none select-none">
                    LEGAL
                </div>
                <div class="absolute bottom-0 left-0 w-1/2 h-px bg-gradient-to-r from-emerald-500/20 to-transparent"></div>
            </div>
        
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-12">
                    
                    <div class="max-w-2xl">
                        <nav class="flex items-center gap-2 text-emerald-500 text-[10px] font-black uppercase tracking-[0.4em] mb-6">
                            <a href="index.php" class="hover:text-emerald-900 dark:hover:text-white transition-colors">Nexus Store</a>
                            <i class='bx bx-chevron-right text-sm'></i>
                            <span class="opacity-50">Legal Documentation</span>
                        </nav>
                        
                        <h1 class="text-5xl md:text-7xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase italic leading-[0.8] mb-8">
                            Terms & <br> <span class="text-emerald-500">Conditions.</span>
                        </h1>
                        
                        <p class="text-sm md:text-base text-emerald-900/50 dark:text-white/40 font-medium leading-relaxed">
                            Selamat datang di NexusEco. Dengan mengakses situs kami, Anda menyetujui untuk terikat oleh aturan main yang kami buat demi kenyamanan dan keamanan bersama dalam bertransaksi botani digital.
                        </p>
                    </div>
        
                    <div class="flex flex-col items-start md:items-end gap-4">
                        <div class="bg-emerald-900 dark:bg-emerald-500 px-6 py-4 flex items-center gap-4 shadow-[10px_10px_0px_0px_rgba(16,185,129,0.2)]">
                            <div class="w-2 h-2 rounded-full bg-emerald-400 dark:bg-emerald-900 animate-pulse"></div>
                            <span class="text-[10px] font-black text-white dark:text-emerald-950 uppercase tracking-widest">Version 2.4.0 — Active</span>
                        </div>
                        <div class="text-left md:text-right">
                            <p class="text-[8px] font-black text-emerald-500 uppercase tracking-widest leading-none mb-1 italic">Terakhir Diperbarui</p>
                            <p class="text-sm font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter">12 Februari 2026</p>
                        </div>
                    </div>
        
                </div>
        
                <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-4 border-t border-emerald-50 dark:border-emerald-800/50 pt-10">
                    <a href="#umum" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500 transition-colors">01.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Ketentuan Umum</span>
                    </a>
                    <a href="#pembayaran" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500">02.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Pembayaran</span>
                    </a>
                    <a href="#pengiriman" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500">03.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Pengiriman</span>
                    </a>
                    <a href="#pengembalian" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500">04.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Retur & Refund</span>
                    </a>
                </div>
            </div>
        </section>
        
        <section id="umum" class="py-20 bg-white dark:bg-organic-dark transition-colors">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    
                    <div class="lg:col-span-4">
                        <div class="sticky top-32">
                            <div class="flex items-center gap-4 mb-6">
                                <span class="text-4xl font-black text-emerald-500/20 italic">01.</span>
                                <h2 class="text-2xl font-black text-emerald-900 dark:text-white uppercase tracking-tighter italic">Ketentuan <br> Umum</h2>
                            </div>
                            <div class="w-12 h-1 bg-emerald-500"></div>
                            <p class="mt-6 text-xs font-bold text-emerald-900/40 dark:text-white/20 uppercase tracking-[0.2em] leading-relaxed">
                                Dasar hukum dan aturan dasar penggunaan platform NexusEco oleh pelanggan.
                            </p>
                        </div>
                    </div>
        
                    <div class="lg:col-span-8 space-y-12">
                        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-4 flex items-center gap-3">
                                <span class="w-2 h-2 bg-emerald-500"></span>
                                Definisi Platform
                            </h3>
                            <div class="pl-5 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed text-sm md:text-base">
                                    NexusEco adalah platform e-commerce botani yang menyediakan berbagai jenis tanaman hias dan perlengkapannya. Dengan menggunakan layanan kami, Anda dianggap telah membaca, memahami, dan menyetujui seluruh isi Syarat dan Ketentuan ini yang berlaku sebagai perjanjian sah antara Anda dan pihak NexusEco.
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-4 flex items-center gap-3">
                                <span class="w-2 h-2 bg-emerald-500"></span>
                                Kelayakan Pengguna
                            </h3>
                            <div class="pl-5 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed text-sm md:text-base">
                                    Layanan ini ditujukan bagi individu yang telah berusia minimal 18 tahun atau mereka yang mendapatkan pengawasan dari orang tua/wali hukum. Pengguna bertanggung jawab penuh atas kerahasiaan akun dan kata sandi masing-masing untuk setiap aktivitas yang terjadi di bawah nama akun tersebut.
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-4 flex items-center gap-3">
                                <span class="w-2 h-2 bg-emerald-500"></span>
                                Hak Kekayaan Intelektual
                            </h3>
                            <div class="pl-5 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed text-sm md:text-base">
                                    Seluruh konten yang terdapat dalam situs NexusEco, termasuk namun tidak terbatas pada teks, grafik, logo, foto produk, dan kode perangkat lunak, adalah milik sah NexusEco dan dilindungi oleh undang-undang hak cipta. Penggunaan konten secara ilegal atau tanpa izin tertulis akan diproses melalui jalur hukum yang berlaku.
                                </p>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="w-full h-px bg-emerald-50 dark:bg-emerald-900/30"></div>
        </div>
        
        <section id="pembayaran" class="py-24 bg-white dark:bg-organic-dark transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    
                    <div class="lg:col-span-4">
                        <div class="sticky top-32">
                            <div class="flex items-center gap-4 mb-6">
                                <span class="text-5xl font-black text-emerald-500/20 italic">02.</span>
                                <h2 class="text-3xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter leading-[0.9]">Prosedur <br> Pembayaran</h2>
                            </div>
                            <div class="w-20 h-1.5 bg-emerald-500 mb-8"></div>
                            
                            <div class="space-y-6">
                                <p class="text-xs font-bold text-emerald-900/40 dark:text-white/30 uppercase tracking-[0.2em] leading-relaxed">
                                    NexusEco menggunakan sistem enkripsi SSL tingkat lanjut untuk menjamin setiap transaksi finansial Anda aman dan terverifikasi secara otomatis oleh sistem perbankan kami.
                                </p>
                                
                                <div class="p-6 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 shadow-[15px_15px_0px_0px_rgba(16,185,129,0.1)]">
                                    <i class='bx bxs-shield-quarter text-3xl mb-4'></i>
                                    <p class="text-[10px] font-black uppercase tracking-widest mb-2">Secure Checkout</p>
                                    <p class="text-[11px] font-medium leading-relaxed opacity-80">Data kartu dan informasi bank Anda tidak pernah disimpan di server kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="lg:col-span-8 space-y-16">
                        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Mata Uang & Validitas Harga
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-4">
                                    Seluruh harga yang tertera di platform NexusEco adalah dalam mata uang <span class="font-black text-emerald-600 dark:text-emerald-400">Rupiah (IDR)</span>. Harga yang tercantum sudah termasuk pajak pertambahan nilai (PPN) kecuali disebutkan lain secara eksplisit. NexusEco berhak mengubah harga sewaktu-waktu tanpa pemberitahuan sebelumnya, namun perubahan tersebut tidak akan memengaruhi pesanan yang telah mendapatkan <span class="font-black text-emerald-900 dark:text-white">Konfirmasi Pembayaran</span>.
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Metode Transaksi Resmi
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Kami hanya menerima pembayaran melalui kanal resmi yang terintegrasi di sistem checkout kami:
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="p-4 bg-gray-50 dark:bg-emerald-900/20 border border-emerald-50 dark:border-emerald-800/50">
                                        <h4 class="text-[10px] font-black text-emerald-900 dark:text-white uppercase mb-2">Virtual Account</h4>
                                        <p class="text-[11px] text-emerald-900/50 dark:text-white/40"><span class="font-bold">BCA, Mandiri, BNI, dan BRI</span> (Verifikasi Instan 24 Jam).</p>
                                    </div>
                                    <div class="p-4 bg-gray-50 dark:bg-emerald-900/20 border border-emerald-50 dark:border-emerald-800/50">
                                        <h4 class="text-[10px] font-black text-emerald-900 dark:text-white uppercase mb-2">E-Wallet & QRIS</h4>
                                        <p class="text-[11px] text-emerald-900/50 dark:text-white/40"><span class="font-bold">Gopay, OVO, ShopeePay</span>, dan QRIS Nasional.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Batas Waktu Transaksi
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed">
                                    Pelanggan wajib menyelesaikan pembayaran dalam waktu <span class="font-black text-rose-500 underline decoration-2 underline-offset-4">2 (dua) jam</span> untuk metode E-Wallet/QRIS dan <span class="font-black text-rose-500 underline decoration-2 underline-offset-4">24 (dua puluh empat) jam</span> untuk metode Virtual Account. Kegagalan dalam melakukan pelunasan dalam jangka waktu tersebut akan menyebabkan pesanan <span class="font-bold text-emerald-900 dark:text-white italic">Expired</span> secara otomatis oleh sistem, dan stok barang akan dilepaskan kembali ke publik.
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Verifikasi & Bukti Transfer
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Karena sistem kami menggunakan verifikasi otomatis, Anda <span class="font-bold">tidak perlu</span> mengunggah bukti transfer manual kecuali terjadi gangguan pada sistem perbankan. Harap simpan bukti transaksi Anda hingga pesanan berubah status menjadi <span class="font-black italic">"Processed"</span>.
                                </p>
                                
                                <div class="bg-rose-50 dark:bg-rose-950/20 p-6 border-l-4 border-rose-500">
                                    <div class="flex items-start gap-4">
                                        <i class='bx bxs-error-alt text-2xl text-rose-500'></i>
                                        <div>
                                            <p class="text-xs font-black text-rose-500 uppercase tracking-widest mb-1">Peringatan Keamanan</p>
                                            <p class="text-[12px] text-rose-900/60 dark:text-rose-100/40 leading-relaxed italic font-medium">
                                                NexusEco tidak bertanggung jawab atas kegagalan transaksi yang dilakukan ke <span class="underline">nomor rekening pribadi</span> atau di luar sistem checkout resmi kami. Waspadai pihak yang mengatasnamakan NexusEco dan meminta transfer langsung.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="w-full h-px bg-emerald-50 dark:bg-emerald-900/30"></div>
        </div>
        
        <section id="pengiriman" class="py-24 bg-white dark:bg-organic-dark transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    
                    <div class="lg:col-span-4">
                        <div class="sticky top-32">
                            <div class="flex items-center gap-4 mb-6">
                                <span class="text-5xl font-black text-emerald-500/20 italic">03.</span>
                                <h2 class="text-3xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter leading-[0.9]">Logistik & <br> Kurasi Tanaman</h2>
                            </div>
                            <div class="w-20 h-1.5 bg-emerald-500 mb-8"></div>
                            
                            <div class="space-y-6">
                                <p class="text-xs font-bold text-emerald-900/40 dark:text-white/30 uppercase tracking-[0.2em] leading-relaxed">
                                    Pengiriman tanaman memerlukan perlakuan khusus. Kami memastikan setiap unit yang keluar dari nursery kami dalam kondisi prima dan siap menempuh perjalanan jauh.
                                </p>
                                
                                <div class="p-6 bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-100 dark:border-emerald-800 shadow-[15px_15px_0px_0px_rgba(16,185,129,0.05)]">
                                    <i class='bx bxs-truck text-3xl text-emerald-500 mb-4'></i>
                                    <p class="text-[10px] font-black text-emerald-900 dark:text-white uppercase tracking-widest mb-2">Live Arrival Guarantee</p>
                                    <p class="text-[11px] font-medium text-emerald-900/60 dark:text-white/40 leading-relaxed">Kami menjamin tanaman sampai dalam keadaan hidup atau kami ganti sepenuhnya sesuai prosedur klaim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="lg:col-span-8 space-y-16">
                        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Proses Karantina & Stress-Reduction
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-4">
                                    Setiap tanaman yang dipesan akan melewati proses <span class="font-black text-emerald-900 dark:text-white italic">Conditioning</span> selama <span class="font-bold text-emerald-600">1 x 24 jam</span> sebelum dikemas. Proses ini meliputi pembersihan hama, pengeringan media tanam (untuk mencegah busuk akar), dan pemberian vitamin B1 untuk meminimalisir stres selama pengiriman. Oleh karena itu, pesanan tidak dapat dikirim secara instan di hari yang sama.
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Nexus Protective Packaging
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Kami menggunakan standar pengemasan <span class="font-bold">Triple-Shield</span>:
                                </p>
                                <ul class="space-y-4 text-sm text-emerald-900/70 dark:text-white/50">
                                    <li class="flex gap-3">
                                        <span class="font-black text-emerald-500">01.</span>
                                        <span><span class="font-bold text-emerald-900 dark:text-white">Root Wrap:</span> Pembungkusan akar dengan moss lembap dan plastik untuk menjaga hidrasi tanpa kebocoran.</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="font-black text-emerald-500">02.</span>
                                        <span><span class="font-bold text-emerald-900 dark:text-white">Corrugated Tube:</span> Pelindung batang dan daun menggunakan karton tebal untuk menahan benturan fisik.</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="font-black text-emerald-500">03.</span>
                                        <span><span class="font-bold text-emerald-900 dark:text-white">Oxygen Hole:</span> Box pengiriman khusus dengan sirkulasi udara mikro agar tanaman tetap bisa bernapas.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Jadwal & Jangkauan Pengiriman
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Pengiriman dilakukan setiap hari <span class="font-bold">Senin sampai Jumat</span>. Kami menghindari pengiriman di hari Sabtu/Minggu untuk mencegah tanaman tertahan di gudang ekspedisi selama hari libur. 
                                </p>
                                
                              <div class="bg-emerald-50 dark:bg-emerald-900/20 p-6 border border-emerald-100 dark:border-emerald-800">
                                  <h4 class="text-[10px] font-black text-emerald-900 dark:text-white uppercase tracking-widest mb-4 italic">Estimasi Berdasarkan Wilayah:</h4>
                                  <div class="space-y-4">
                                      <div class="flex justify-between items-center border-b border-emerald-100 dark:border-emerald-800 pb-2">
                                          <span class="text-xs font-medium dark:text-white/60">Pulau Jawa (Regular/Express)</span>
                                          <span class="text-xs font-black text-emerald-600">1 - 3 Hari</span>
                                      </div>
                                      
                                      <div class="flex justify-between items-center border-b border-emerald-100 dark:border-emerald-800 pb-2">
                                          <span class="text-xs font-medium dark:text-white/60">Luar Pulau Jawa (Via Udara)</span>
                                          <span class="text-xs font-black text-emerald-600">3 - 5 Hari</span>
                                      </div>
                                      
                                      <div class="flex justify-between items-start gap-4">
                                          <span class="text-xs font-medium dark:text-white/60">Luar Pulau Jawa (Via Darat/Laut)</span>
                                          <div class="text-right">
                                              <span class="block text-xs font-black text-rose-500">7 - 14 Hari</span>
                                              <span class="block text-[8px] font-bold text-rose-500/50 uppercase tracking-tighter italic leading-none mt-1">Tidak Direkomendasikan</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                           </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Keterlambatan Ekspedisi
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed italic">
                                    NexusEco tidak bertanggung jawab atas kerusakan tanaman yang disebabkan oleh <span class="font-bold text-emerald-900 dark:text-white">kelalaian pihak kurir</span> (paket hilang, tertumpuk barang berat, atau alamat tidak ditemukan). Namun, tim kami akan membantu proses investigasi dan klaim asuransi kepada pihak logistik sebagai bentuk dukungan layanan purna jual kami.
                                </p>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="w-full h-px bg-emerald-50 dark:bg-emerald-900/30"></div>
        </div>
        
        <section id="pengembalian" class="py-24 bg-white dark:bg-organic-dark transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    
                    <div class="lg:col-span-4">
                        <div class="sticky top-32">
                            <div class="flex items-center gap-4 mb-6">
                                <span class="text-5xl font-black text-emerald-500/20 italic">04.</span>
                                <h2 class="text-3xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter leading-[0.9]">Kebijakan <br> Retur & Refund</h2>
                            </div>
                            <div class="w-20 h-1.5 bg-rose-500 mb-8"></div>
                            
                            <div class="space-y-6">
                                <p class="text-xs font-bold text-emerald-900/40 dark:text-white/30 uppercase tracking-[0.2em] leading-relaxed">
                                    Kami berkomitmen menjaga kepuasan Anda. Namun, sebagai komoditas makhluk hidup, proses pengembalian memiliki protokol ketat untuk menghindari manipulasi dan kerusakan lebih lanjut.
                                </p>
                                
                                <div class="p-6 bg-rose-500 text-white shadow-[15px_15px_0px_0px_rgba(244,63,94,0.1)]">
                                    <i class='bx bx-video-recording text-3xl mb-4'></i>
                                    <p class="text-[10px] font-black uppercase tracking-widest mb-2">Wajib Video Unboxing</p>
                                    <p class="text-[11px] font-medium leading-relaxed opacity-90">Klaim tanpa bukti video unboxing yang valid tidak akan kami proses dengan alasan apapun.</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="lg:col-span-8 space-y-16">
                        
                        <div class="group">
                            <h3 class="text-xs font-black text-rose-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-rose-500"></span>
                                Syarat Sah Pengajuan Klaim
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-rose-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Klaim kerusakan atau kekurangan barang hanya akan diterima jika memenuhi kriteria berikut:
                                </p>
                                <ul class="space-y-4 text-sm text-emerald-900/70 dark:text-white/50 font-medium">
                                    <li class="flex gap-3">
                                        <span class="font-black text-rose-500">A.</span>
                                        <span>Video unboxing <span class="font-black text-emerald-900 dark:text-white">tanpa terpotong (no edit)</span>, memperlihatkan label pengiriman dengan jelas, dan dimulai sebelum paket dibuka.</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="font-black text-rose-500">B.</span>
                                        <span>Laporan dilakukan maksimal <span class="font-black text-emerald-900 dark:text-white">1 x 12 jam</span> setelah status paket dinyatakan "Delivered" oleh kurir.</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="font-black text-rose-500">C.</span>
                                        <span>Tanaman mengalami kerusakan batang utama atau busuk akar yang masif (>50% kondisi tanaman).</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Pengecualian Garansi (Non-Claimable)
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-4">
                                    NexusEco tidak memberikan garansi untuk kondisi-kondisi alamiah akibat stres perjalanan, seperti:
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                                    <div class="p-4 border border-emerald-50 dark:border-emerald-800 bg-gray-50 dark:bg-emerald-900/10">
                                        <p class="text-[10px] font-black text-emerald-900 dark:text-white uppercase mb-1">Stres Minor</p>
                                        <p class="text-[11px] text-emerald-900/50 dark:text-white/40 leading-relaxed">Daun menguning (1-2 helai), daun layu, atau sedikit rontok karena kurang cahaya di dalam paket.</p>
                                    </div>
                                    <div class="p-4 border border-emerald-50 dark:border-emerald-800 bg-gray-50 dark:bg-emerald-900/10">
                                        <p class="text-[10px] font-black text-emerald-900 dark:text-white uppercase mb-1">Kesalahan Media</p>
                                        <p class="text-[11px] text-emerald-900/50 dark:text-white/40 leading-relaxed">Tanaman mati akibat langsung dipupuk, terkena matahari terik, atau ganti pot tanpa masa adaptasi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Solusi & Mekanisme Pengembalian
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Jika klaim disetujui, NexusEco menawarkan dua opsi solusi:
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4 p-4 border-l-4 border-emerald-500 bg-emerald-50 dark:bg-emerald-900/20">
                                        <div class="font-black text-2xl text-emerald-500/30 italic leading-none">01</div>
                                        <div class="text-xs">
                                            <span class="font-black text-emerald-900 dark:text-white uppercase block mb-1">Kirim Uang (Refund)</span>
                                            <span class="dark:text-white/40">Pengembalian dana penuh atau parsial melalui metode pembayaran awal dalam <span class="font-bold">3-7 hari kerja</span>.</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4 p-4 border-l-4 border-emerald-500 bg-emerald-50 dark:bg-emerald-900/20">
                                        <div class="font-black text-2xl text-emerald-500/30 italic leading-none">02</div>
                                        <div class="text-xs">
                                            <span class="font-black text-emerald-900 dark:text-white uppercase block mb-1">Resend (Kirim Ulang)</span>
                                            <span class="dark:text-white/40">Pengiriman unit tanaman baru dengan jenis yang sama (ongkos kirim ditanggung NexusEco).</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>
        
        <section class="py-20 bg-gray-50 dark:bg-organic-dark/50 transition-colors">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="relative bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800 p-8 md:p-16 overflow-hidden">
                    
                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/5 -mr-16 -mt-16 rotate-45"></div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
                        <div>
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.4em] mb-4 text-center lg:text-left">Next Documentation</h3>
                            <h4 class="text-3xl md:text-4xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase italic leading-none text-center lg:text-left">
                                Data Anda Adalah <br> <span class="text-emerald-500">Prioritas Kami.</span>
                            </h4>
                        </div>
        
                        <div class="flex flex-col items-center lg:items-end gap-6 text-center lg:text-right">
                            <p class="text-sm text-emerald-900/50 dark:text-white/40 font-medium leading-relaxed max-w-md">
                                Selain aturan main di atas, kami juga sangat menjaga kerahasiaan informasi pribadi Anda. Pelajari bagaimana kami mengelola data Anda di halaman Kebijakan Privasi.
                            </p>
                            
                            <a href="privacy.php" class="group inline-flex items-center gap-4 bg-emerald-900 dark:bg-emerald-500 px-8 py-4 shadow-[10px_10px_0px_0px_rgba(16,185,129,0.1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all">
                                <span class="text-[10px] font-black text-white dark:text-emerald-950 uppercase tracking-widest">Baca Privacy Policy</span>
                                <i class='bx bx-right-arrow-alt text-xl text-emerald-400 dark:text-emerald-900 group-hover:translate-x-1 transition-transform'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include './../components/footer_main.php'; ?>
</body>

</html>
