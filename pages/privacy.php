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

        <section class="relative bg-white dark:bg-organic-dark pt-30 pb-10 overflow-hidden transition-colors duration-300">
            <div class="absolute top-0 right-0 w-full h-full pointer-events-none">
                <div class="absolute -top-10 -right-20 text-[200px] font-black text-emerald-500/5 italic leading-none select-none">
                    DATA
                </div>
                <div class="absolute top-1/2 right-10 w-32 h-32 opacity-10 dark:opacity-20" style="background-image: radial-gradient(#10b981 1px, transparent 1px); background-size: 10px 10px;"></div>
            </div>
        
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-12">
                    
                    <div class="max-w-2xl text-center md:text-left">
                        <nav class="flex items-center justify-center md:justify-start gap-2 text-emerald-500 text-[10px] font-black uppercase tracking-[0.4em] mb-6">
                            <a href="index.php" class="hover:text-emerald-900 dark:hover:text-white transition-colors">Nexus Store</a>
                            <i class='bx bx-chevron-right text-sm'></i>
                            <span class="opacity-50 italic">Privacy Shield</span>
                        </nav>
                        
                        <h1 class="text-5xl md:text-7xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase italic leading-[0.8] mb-8">
                            Privacy <br> <span class="text-emerald-500">Protection.</span>
                        </h1>
                        
                        <p class="text-sm md:text-base text-emerald-900/50 dark:text-white/40 font-medium leading-relaxed">
                            Privasi Anda adalah hak fundamental, bukan opsi. Di NexusEco, kami berkomitmen untuk melindungi informasi pribadi Anda dengan transparansi penuh mengenai bagaimana data Anda digunakan dan dijaga.
                        </p>
                    </div>
        
                    <div class="relative group mx-auto md:mx-0">
                        <div class="w-48 h-48 md:w-56 md:h-56 bg-emerald-50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800 flex flex-col items-center justify-center text-center p-6 transition-transform group-hover:rotate-2">
                            <div class="w-16 h-16 bg-emerald-900 dark:bg-emerald-500 flex items-center justify-center mb-4 shadow-xl">
                                <i class='bx bxs-key text-3xl text-white dark:text-emerald-950'></i>
                            </div>
                            <span class="text-[8px] font-black text-emerald-500 uppercase tracking-[0.3em] mb-1">Status Keamanan</span>
                            <span class="text-xs font-black text-emerald-900 dark:text-white uppercase italic">End-to-End <br> Encrypted</span>
                            
                            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-emerald-500/20"></div>
                        </div>
                    </div>
                </div>
        
                <div class="mt-20 grid grid-cols-2 md:grid-cols-5 gap-4 border-t border-emerald-50 dark:border-emerald-800/50 pt-10">
                    <a href="#pengumpulan-data" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500 transition-colors">01.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Pengumpulan</span>
                    </a>
                    <a href="#penggunaan-data" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500">02.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Penggunaan</span>
                    </a>
                    <a href="#keamanan-data" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500">03.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Keamanan</span>
                    </a>
                    <a href="#hak-pengguna" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500">04.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Hak Anda</span>
                    </a>
                    <a href="#kontak-legal" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500">05.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Kontak</span>
                    </a>
                </div>
            </div>
        </section>
        
        <section id="pengumpulan-data" class="py-24 bg-white dark:bg-organic-dark transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    
                    <div class="lg:col-span-4">
                        <div class="sticky top-32">
                            <div class="flex items-center gap-4 mb-6">
                                <span class="text-5xl font-black text-emerald-500/20 italic">01.</span>
                                <h2 class="text-3xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter leading-[0.9]">Informasi <br> Yang Kami Ambil</h2>
                            </div>
                            <div class="w-20 h-1.5 bg-emerald-500 mb-8"></div>
                            
                            <p class="text-xs font-bold text-emerald-900/40 dark:text-white/30 uppercase tracking-[0.2em] leading-relaxed mb-8">
                                Kami hanya mengumpulkan data yang benar-benar diperlukan untuk memproses pesanan Anda dan meningkatkan pengalaman berbelanja di NexusEco.
                            </p>
        
                            <div class="hidden lg:block p-8 border border-dashed border-emerald-200 dark:border-emerald-800">
                                <i class='bx bx-fingerprint text-6xl text-emerald-500/20'></i>
                            </div>
                        </div>
                    </div>
        
                    <div class="lg:col-span-8 space-y-16">
                        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Informasi Identitas Personal
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Saat Anda mendaftar atau melakukan transaksi, kami mengumpulkan data dasar seperti <span class="font-bold text-emerald-900 dark:text-white">Nama Lengkap</span>, <span class="font-bold text-emerald-900 dark:text-white">Alamat Email</span>, dan <span class="font-bold text-emerald-900 dark:text-white">Nomor Telepon</span>. Data ini murni digunakan untuk keperluan akun dan komunikasi resmi mengenai status pesanan Anda.
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Detail Lokasi & Logistik
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Untuk menjamin tanaman sampai ke depan pintu Anda, kami memerlukan <span class="font-bold text-emerald-900 dark:text-white">Alamat Lengkap</span>, <span class="font-bold text-emerald-900 dark:text-white">Kode Pos</span>, dan <span class="font-bold text-emerald-900 dark:text-white">Titik Koordinat (Opsional)</span>. Informasi ini akan dibagikan secara terbatas hanya kepada mitra logistik pihak ketiga kami.
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Jejak Digital & Cookies
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Kami mencatat informasi teknis secara otomatis melalui <span class="italic font-medium">Cookies</span>, seperti <span class="font-bold">Alamat IP</span>, <span class="font-bold">Jenis Browser</span>, dan <span class="font-bold text-emerald-900 dark:text-white">Aktivitas Navigasi</span> di situs kami. Tujuannya adalah untuk:
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="p-4 bg-gray-50 dark:bg-emerald-900/10 border border-emerald-50 dark:border-emerald-800/50">
                                        <p class="text-[10px] font-black text-emerald-900 dark:text-white uppercase mb-1">Personalisasi</p>
                                        <p class="text-[11px] text-emerald-900/50 dark:text-white/40 italic">Menampilkan rekomendasi tanaman yang sesuai dengan minat Anda sebelumnya.</p>
                                    </div>
                                    <div class="p-4 bg-gray-50 dark:bg-emerald-900/10 border border-emerald-50 dark:border-emerald-800/50">
                                        <p class="text-[10px] font-black text-emerald-900 dark:text-white uppercase mb-1">Optimasi</p>
                                        <p class="text-[11px] text-emerald-900/50 dark:text-white/40 italic">Menganalisis performa website agar akses di perangkat Anda tetap ringan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-rose-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-rose-500"></span>
                                Keamanan Informasi Finansial
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-rose-500 transition-colors">
                                <div class="bg-emerald-900 dark:bg-emerald-500 p-6 shadow-[15px_15px_0px_0px_rgba(16,185,129,0.1)]">
                                    <p class="text-white dark:text-emerald-950 text-sm font-medium leading-relaxed italic">
                                        <span class="font-black uppercase tracking-widest block mb-2 underline decoration-2 underline-offset-4">Penting:</span>
                                        NexusEco <span class="font-black">TIDAK PERNAH</span> menyimpan informasi kartu kredit, PIN, atau kredensial perbankan Anda di server kami. Semua transaksi diproses melalui <span class="font-black">Payment Gateway</span> berlisensi yang terenkripsi penuh.
                                    </p>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>
        
        <section id="penggunaan-data" class="py-24 bg-white dark:bg-organic-dark transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    
                    <div class="lg:col-span-4">
                        <div class="sticky top-32">
                            <div class="flex items-center gap-4 mb-6">
                                <span class="text-5xl font-black text-emerald-500/20 italic">02.</span>
                                <h2 class="text-3xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter leading-[0.9]">Pemrosesan <br> & Pemanfaatan</h2>
                            </div>
                            <div class="w-20 h-1.5 bg-emerald-500 mb-8"></div>
                            
                            <div class="space-y-6">
                                <p class="text-xs font-bold text-emerald-900/40 dark:text-white/30 uppercase tracking-[0.2em] leading-relaxed">
                                    Kami memproses data Anda berdasarkan prinsip legalitas dan kebutuhan operasional untuk memberikan layanan botani terbaik.
                                </p>
                                
                                <div class="p-6 bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-100 dark:border-emerald-800">
                                    <i class='bx bx-data text-3xl text-emerald-500 mb-4'></i>
                                    <p class="text-[10px] font-black text-emerald-900 dark:text-white uppercase tracking-widest mb-2">Data Integrity</p>
                                    <p class="text-[11px] font-medium text-emerald-900/60 dark:text-white/40 leading-relaxed">Data Anda tidak akan pernah dijual atau disewakan kepada pihak ketiga untuk tujuan pemasaran tanpa izin eksplisit dari Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="lg:col-span-8 space-16">
                        
                        <div class="group mb-16">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Pemenuhan Kewajiban Kontrak
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-4">
                                    Tujuan utama penggunaan data Anda adalah untuk <span class="font-black text-emerald-900 dark:text-white uppercase">memproses transaksi</span>. Ini mencakup verifikasi pembayaran, pengemasan tanaman yang sesuai standar karantina, hingga pengiriman paket ke alamat tujuan. Tanpa data ini, kami tidak dapat memenuhi kewajiban kami sebagai penyedia layanan.
                                </p>
                            </div>
                        </div>
        
                        <div class="group mb-16">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Komunikasi Pelanggan
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-4">
                                    Kami menggunakan informasi kontak Anda untuk mengirimkan notifikasi penting seperti <span class="font-bold">Konfirmasi Pesanan</span>, <span class="font-bold">Nomor Resi Pengiriman</span>, dan pembaruan mengenai kebijakan privasi ini. Komunikasi ini bersifat fungsional dan otomatis.
                                </p>
                            </div>
                        </div>
        
                        <div class="group mb-16">
                            <h3 class="text-xs font-black text-rose-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-rose-500"></span>
                                Proteksi & Keamanan Sistem
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-rose-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Data seperti alamat IP dan riwayat login dipantau untuk <span class="font-black">mendeteksi aktivitas mencurigakan</span> dan mencegah upaya penipuan (fraud). Hal ini dilakukan demi melindungi akun Anda dan menjaga integritas ekosistem belanja NexusEco.
                                </p>
                                
                                <div class="bg-gray-50 dark:bg-emerald-900/10 p-6 border border-emerald-50 dark:border-emerald-800/50 italic">
                                    <p class="text-[11px] text-emerald-900/60 dark:text-white/40 leading-relaxed">
                                        <span class="font-black uppercase tracking-widest text-emerald-500 block mb-2 leading-none">Catatan Hukum:</span>
                                        Kami dapat mengungkapkan informasi pribadi Anda jika diwajibkan oleh <span class="font-bold">Undang-Undang</span> atau perintah pengadilan resmi dari otoritas penegak hukum yang berwenang.
                                    </p>
                                </div>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Analisis & Personalisasi
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed">
                                    Kami melakukan analisis data secara anonim untuk memahami tren pasar dan perilaku pengguna. Hal ini membantu kami dalam menentukan jenis tanaman baru yang perlu dihadirkan di nursery dan mengoptimalkan kecepatan akses website di perangkat Anda.
                                </p>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>
        
        <section id="keamanan-data" class="py-24 bg-white dark:bg-organic-dark transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    
                    <div class="lg:col-span-4">
                        <div class="sticky top-32">
                            <div class="flex items-center gap-4 mb-6">
                                <span class="text-5xl font-black text-emerald-500/20 italic">03.</span>
                                <h2 class="text-3xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter leading-[0.9]">Protokol <br> Keamanan</h2>
                            </div>
                            <div class="w-20 h-1.5 bg-emerald-500 mb-8"></div>
                            
                            <div class="space-y-6">
                                <p class="text-xs font-bold text-emerald-900/40 dark:text-white/30 uppercase tracking-[0.2em] leading-relaxed">
                                    Kami menginvestasikan sumber daya teknis yang besar untuk menciptakan benteng digital bagi informasi sensitif Anda.
                                </p>
                                
                                <div class="relative w-full aspect-square border-2 border-dashed border-emerald-100 dark:border-emerald-800 flex items-center justify-center">
                                    <i class='bx bxs-lock-alt text-7xl text-emerald-500/10 dark:text-emerald-500/5 animate-pulse'></i>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <span class="text-[10px] font-black text-emerald-500 uppercase tracking-widest">SSL Encrypted</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="lg:col-span-8 space-y-16">
                        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Teknologi Enkripsi SSL
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed">
                                    Situs kami menggunakan teknologi <span class="font-black text-emerald-900 dark:text-white">Secure Socket Layer (SSL)</span> 256-bit. Ini berarti setiap data yang Anda masukkan—termasuk informasi login dan detail pesanan—diacak menjadi kode rahasia sebelum dikirimkan melalui internet, sehingga mustahil untuk dibaca oleh pihak yang tidak berwenang.
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Penyimpanan Data Aman
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Data pribadi Anda disimpan dalam <span class="font-bold text-emerald-900 dark:text-white">Server Terenkripsi</span> yang dilindungi oleh firewall berlapis. Kami membatasi akses fisik dan digital ke server ini hanya kepada staf tertentu yang memiliki kewajiban menjaga kerahasiaan secara kontrak.
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-rose-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-rose-500"></span>
                                Tanggung Jawab Pengguna
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-rose-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Meskipun kami melakukan upaya terbaik, keamanan data juga bergantung pada Anda. Kami sangat menyarankan Anda untuk:
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="p-5 bg-gray-50 dark:bg-emerald-900/10 border border-emerald-50 dark:border-emerald-800/50">
                                        <p class="text-[10px] font-black text-emerald-900 dark:text-white uppercase mb-2">Unique Password</p>
                                        <p class="text-[11px] text-emerald-900/50 dark:text-white/40 italic">Gunakan kombinasi simbol dan angka yang tidak mudah ditebak oleh orang lain.</p>
                                    </div>
                                    <div class="p-5 bg-gray-50 dark:bg-emerald-900/10 border border-emerald-50 dark:border-emerald-800/50">
                                        <p class="text-[10px] font-black text-emerald-900 dark:text-white uppercase mb-2">Logout Policy</p>
                                        <p class="text-[11px] text-emerald-900/50 dark:text-white/40 italic">Pastikan untuk selalu keluar dari akun Anda jika menggunakan perangkat publik atau bersama.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Respon Insiden Keamanan
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed">
                                    Jika terjadi pelanggaran data yang memengaruhi informasi pribadi Anda, NexusEco berkomitmen untuk memberitahu Anda dalam waktu <span class="font-black text-emerald-900 dark:text-white">72 jam</span> melalui email resmi, lengkap dengan langkah-langkah mitigasi yang harus Anda ambil.
                                </p>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>
        
        <section id="hak-pengguna" class="py-24 bg-white dark:bg-organic-dark transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    
                    <div class="lg:col-span-4">
                        <div class="sticky top-32">
                            <div class="flex items-center gap-4 mb-6">
                                <span class="text-5xl font-black text-emerald-500/20 italic">04.</span>
                                <h2 class="text-3xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter leading-[0.9]">Kendali & <br> Hak Anda</h2>
                            </div>
                            <div class="w-20 h-1.5 bg-emerald-500 mb-8"></div>
                            
                            <div class="space-y-6">
                                <p class="text-xs font-bold text-emerald-900/40 dark:text-white/30 uppercase tracking-[0.2em] leading-relaxed">
                                    Anda memiliki otoritas penuh atas informasi yang Anda percayakan kepada kami. Kami menyediakan akses mudah untuk mengelola preferensi privasi Anda.
                                </p>
                                
                                <div class="p-6 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950">
                                    <i class='bx bx-user-circle text-3xl mb-4'></i>
                                    <p class="text-[10px] font-black uppercase tracking-widest mb-2 text-emerald-400 dark:text-emerald-900">User Sovereignty</p>
                                    <p class="text-[11px] font-medium leading-relaxed opacity-80">Permintaan penghapusan data akan diproses secara permanen dari server aktif kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="lg:col-span-8 space-y-16">
                        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Hak Akses & Perbaikan Data
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed">
                                    Anda berhak untuk <span class="font-black text-emerald-900 dark:text-white">mengakses salinan data pribadi</span> yang kami simpan dan meminta <span class="font-black text-emerald-900 dark:text-white">koreksi</span> jika terdapat informasi yang tidak akurat atau tidak lengkap melalui pengaturan profil akun Anda atau menghubungi tim legal kami.
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-rose-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-rose-500"></span>
                                Penghapusan Data Permanen
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-rose-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Anda dapat meminta kami untuk menghapus seluruh informasi pribadi Anda dari sistem kami ("Hak untuk Dilupakan"). Namun, harap dicatat bahwa kami mungkin tetap menyimpan data tertentu untuk <span class="font-bold underline">kepentingan hukum, audit, atau pemenuhan kewajiban kontrak</span> yang belum selesai (seperti pesanan yang sedang dalam proses kirim).
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Opsi Berlangganan & Opt-Out
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-6">
                                    Jika Anda tidak lagi ingin menerima buletin promosi atau email pemasaran dari NexusEco, Anda dapat menarik persetujuan Anda kapan saja dengan mengklik tautan <span class="font-bold italic">"Unsubscribe"</span> di bagian bawah setiap email kami atau mengubah preferensi notifikasi di dashboard pengguna.
                                </p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="flex items-center gap-3 p-4 bg-gray-50 dark:bg-emerald-900/10 border border-emerald-50 dark:border-emerald-800/50">
                                        <i class='bx bx-check-circle text-emerald-500'></i>
                                        <span class="text-[10px] font-black text-emerald-900 dark:text-white uppercase">Hapus Akun</span>
                                    </div>
                                    <div class="flex items-center gap-3 p-4 bg-gray-50 dark:bg-emerald-900/10 border border-emerald-50 dark:border-emerald-800/50">
                                        <i class='bx bx-check-circle text-emerald-500'></i>
                                        <span class="text-[10px] font-black text-emerald-900 dark:text-white uppercase">Eksport Data</span>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>
        
        <section id="kontak-legal" class="py-24 bg-white dark:bg-organic-dark transition-colors">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    
                    <div class="lg:col-span-4">
                        <div class="sticky top-32">
                            <div class="flex items-center gap-4 mb-6">
                                <span class="text-5xl font-black text-emerald-500/20 italic">05.</span>
                                <h2 class="text-3xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter leading-[0.9]">Kontak & <br> Perubahan</h2>
                            </div>
                            <div class="w-20 h-1.5 bg-emerald-500 mb-8"></div>
                            
                            <p class="text-xs font-bold text-emerald-900/40 dark:text-white/30 uppercase tracking-[0.2em] leading-relaxed">
                                Kebijakan privasi ini dapat berubah sewaktu-waktu seiring dengan perkembangan teknologi dan regulasi pemerintah.
                            </p>
                        </div>
                    </div>
        
                    <div class="lg:col-span-8 space-y-16">
                        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Notifikasi Pembaruan
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed">
                                    NexusEco akan memberikan notifikasi melalui <span class="font-bold text-emerald-900 dark:text-white">Email</span> atau <span class="font-bold text-emerald-900 dark:text-white">Pengumuman di Website</span> jika terdapat perubahan signifikan pada cara kami mengelola informasi Anda. Kami menyarankan Anda untuk meninjau halaman ini secara berkala untuk tetap mendapatkan informasi terbaru.
                                </p>
                            </div>
                        </div>
        
                        <div class="group">
                            <h3 class="text-xs font-black text-emerald-500 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                <span class="w-3 h-3 bg-emerald-500"></span>
                                Hubungi Tim Privasi Kami
                            </h3>
                            <div class="pl-6 border-l border-emerald-100 dark:border-emerald-800 group-hover:border-emerald-500 transition-colors">
                                <p class="text-emerald-900/70 dark:text-white/50 leading-relaxed mb-8">
                                    Jika Anda memiliki pertanyaan, kekhawatiran, atau permintaan terkait kebijakan privasi ini, silakan hubungi <span class="font-black italic text-emerald-900 dark:text-white underline decoration-emerald-500 decoration-2">Data Protection Officer</span> kami:
                                </p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="p-6 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 shadow-[10px_10px_0px_0px_rgba(16,185,129,0.1)]">
                                        <p class="text-[8px] font-black uppercase tracking-widest mb-1 opacity-60">Official Email</p>
                                        <p class="text-sm font-black italic">privacy@nexuseco.com</p>
                                    </div>
                                    <div class="p-6 bg-gray-50 dark:bg-emerald-900/20 border border-emerald-100 dark:border-emerald-800">
                                        <p class="text-[8px] font-black text-emerald-500 uppercase tracking-widest mb-1">Legal Office</p>
                                        <p class="text-[10px] font-bold text-emerald-900 dark:text-white/60 leading-tight uppercase">Nexus Botanical Tower, <br> Bandung, Indonesia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="pt-10">
                            <div class="bg-emerald-50/50 dark:bg-emerald-900/5 p-8 border border-dashed border-emerald-200 dark:border-emerald-800 text-center">
                                <p class="text-xs font-bold text-emerald-900/30 dark:text-white/20 uppercase tracking-[0.5em]">
                                    End of Privacy Documentation
                                </p>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>
        
        <section class="py-24 bg-white dark:bg-organic-dark transition-colors border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex flex-col items-center text-center">
                    
                    <div class="w-20 h-20 bg-emerald-50 dark:bg-emerald-900/20 rounded-full flex items-center justify-center mb-8">
                        <i class='bx bxs-heart text-3xl text-emerald-500 animate-bounce'></i>
                    </div>
        
                    <h2 class="text-3xl md:text-4xl font-black text-emerald-900 dark:text-white uppercase italic tracking-tighter leading-none mb-6">
                        Terima Kasih Telah <br> <span class="text-emerald-500">Membangun Kepercayaan.</span>
                    </h2>
                    
                    <p class="max-w-2xl text-sm md:text-base text-emerald-900/50 dark:text-white/40 font-medium leading-relaxed mb-12">
                        Kami sangat menghargai waktu yang Anda luangkan untuk memahami bagaimana kami melindungi hak-hak digital Anda. Dengan membaca kebijakan ini, Anda telah membantu kami menciptakan ekosistem botani yang lebih aman dan transparan bagi semua.
                    </p>
        
                    <div class="flex flex-col sm:flex-row gap-6">
                        <a href="index.php" class="group flex items-center gap-4 bg-emerald-900 dark:bg-emerald-500 px-10 py-5 shadow-[15px_15px_0px_0px_rgba(16,185,129,0.1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all">
                            <i class='bx bx-home-alt text-xl text-emerald-400 dark:text-emerald-900'></i>
                            <span class="text-[11px] font-black text-white dark:text-emerald-950 uppercase tracking-[0.2em]">Kembali Ke Beranda</span>
                        </a>
        
                        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="group flex items-center gap-4 border-2 border-emerald-900 dark:border-emerald-500 px-10 py-5 hover:bg-emerald-900 dark:hover:bg-emerald-500 transition-all">
                            <span class="text-[11px] font-black text-emerald-900 dark:text-emerald-500 group-hover:text-white dark:group-hover:text-emerald-950 uppercase tracking-[0.2em]">Kembali Ke Atas</span>
                            <i class='bx bx-up-arrow-alt text-xl text-emerald-900 dark:text-emerald-500 group-hover:text-white dark:group-hover:text-emerald-950'></i>
                        </button>
                    </div>
        
                    <div class="mt-20 flex items-center gap-6 opacity-30 grayscale hover:opacity-100 transition-opacity duration-500">
                        <div class="flex items-center gap-3 border-2 border-emerald-900 dark:border-white px-4 py-2">
                            <i class='bx bx-badge-check text-2xl text-emerald-900 dark:text-white'></i>
                            <div class="flex flex-col text-left">
                                <span class="text-[10px] font-black leading-none uppercase text-emerald-900 dark:text-white">ISO 9001</span>
                                <span class="text-[7px] font-bold opacity-70 uppercase tracking-tighter text-emerald-900 dark:text-white">Certified System</span>
                            </div>
                        </div>
                        
                        <div class="h-10 w-px bg-emerald-900 dark:bg-white opacity-20"></div>
                        
                        <div class="flex flex-col">
                            <p class="text-left text-[8px] font-black text-emerald-900 dark:text-white uppercase leading-tight">
                                NexusEco Compliance <br> 
                                <span class="text-emerald-500">Verified Security 2026</span>
                            </p>
                            <div class="flex gap-1 mt-1">
                                <i class='bx bxs-star text-[8px] text-emerald-500'></i>
                                <i class='bx bxs-star text-[8px] text-emerald-500'></i>
                                <i class='bx bxs-star text-[8px] text-emerald-500'></i>
                                <i class='bx bxs-star text-[8px] text-emerald-500'></i>
                                <i class='bx bxs-star text-[8px] text-emerald-500'></i>
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
