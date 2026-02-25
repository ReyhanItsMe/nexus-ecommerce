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

        <section class="relative bg-emerald-900 dark:bg-emerald-950 py-20 md:py-32 overflow-hidden">
            <div class="absolute top-0 right-0 w-1/3 h-full bg-emerald-800/20 skew-x-12 translate-x-20"></div>
            <div class="absolute bottom-0 left-0 w-1/4 h-1/2 bg-emerald-500/10 -skew-x-12 -translate-x-10"></div>
        
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="max-w-3xl">
                    <nav class="flex items-center gap-2 text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em] mb-6">
                        <a href="index.php" class="hover:text-white transition-colors">Home</a>
                        <i class='bx bx-chevron-right text-sm'></i>
                        <span class="text-emerald-500/50">Help Center</span>
                    </nav>
        
                    <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight tracking-tighter mb-6">
                        Ada yang bisa kami <br>
                        <span class="text-emerald-500">Bantu</span> hari ini?
                    </h1>
                    
                    <p class="text-emerald-100/60 text-base md:text-xl max-w-xl leading-relaxed mb-10">
                        Temukan jawaban cepat seputar perawatan tanaman, status pengiriman, hingga panduan pengembalian dana di satu tempat.
                    </p>
        
                    <div class="relative max-w-2xl group">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-6 text-emerald-500">
                            <i class='bx bx-search text-2xl'></i>
                        </div>
                        <input type="text" 
                               placeholder="Cari topik bantuan (misal: cara ganti alamat, refund...)" 
                               class="w-full pl-16 pr-6 py-5 bg-white/5 border border-white/10 backdrop-blur-md text-white placeholder:text-emerald-100/30 outline-none focus:border-emerald-500 focus:bg-white/10 transition-all text-sm md:text-base">
                        
                        <div class="mt-4 flex flex-wrap gap-3 items-center">
                            <span class="text-[10px] font-bold text-emerald-500 uppercase tracking-widest">Sering dicari:</span>
                            <a href="#" class="text-[10px] text-emerald-100/40 hover:text-emerald-400 transition-colors font-bold underline underline-offset-4">Status Order</a>
                            <a href="#" class="text-[10px] text-emerald-100/40 hover:text-emerald-400 transition-colors font-bold underline underline-offset-4">Garansi Tanaman</a>
                            <a href="#" class="text-[10px] text-emerald-100/40 hover:text-emerald-400 transition-colors font-bold underline underline-offset-4">Metode Bayar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="py-20 bg-white dark:bg-organic-dark transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        
                    <a href="#" class="group p-10 bg-emerald-50/50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800/50 hover:bg-white dark:hover:bg-emerald-900/30 hover:shadow-2xl hover:shadow-emerald-900/10 transition-all duration-300">
                        <div class="w-14 h-14 bg-white dark:bg-emerald-800 border border-emerald-100 dark:border-emerald-700 flex items-center justify-center text-3xl text-emerald-600 dark:text-emerald-400 mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                            <i class='bx bx-package'></i>
                        </div>
                        <h3 class="text-xl font-black text-emerald-900 dark:text-white mb-3 tracking-tight">Pesanan & Pengiriman</h3>
                        <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40 leading-relaxed mb-6">
                            Lacak status paket, estimasi waktu sampai, dan informasi kurir pengiriman.
                        </p>
                        <span class="text-[10px] font-black uppercase tracking-[0.2em] text-emerald-500 flex items-center gap-2">
                            Lihat Topik <i class='bx bx-right-arrow-alt text-lg'></i>
                        </span>
                    </a>
        
                    <a href="#" class="group p-10 bg-emerald-50/50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800/50 hover:bg-white dark:hover:bg-emerald-900/30 hover:shadow-2xl hover:shadow-emerald-900/10 transition-all duration-300">
                        <div class="w-14 h-14 bg-white dark:bg-emerald-800 border border-emerald-100 dark:border-emerald-700 flex items-center justify-center text-3xl text-emerald-600 dark:text-emerald-400 mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                            <i class='bx bx-credit-card'></i>
                        </div>
                        <h3 class="text-xl font-black text-emerald-900 dark:text-white mb-3 tracking-tight">Pembayaran & Promo</h3>
                        <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40 leading-relaxed mb-6">
                            Cara konfirmasi pembayaran, voucher diskon, dan pengembalian dana (refund).
                        </p>
                        <span class="text-[10px] font-black uppercase tracking-[0.2em] text-emerald-500 flex items-center gap-2">
                            Lihat Topik <i class='bx bx-right-arrow-alt text-lg'></i>
                        </span>
                    </a>
        
                    <a href="#" class="group p-10 bg-emerald-50/50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800/50 hover:bg-white dark:hover:bg-emerald-900/30 hover:shadow-2xl hover:shadow-emerald-900/10 transition-all duration-300">
                        <div class="w-14 h-14 bg-white dark:bg-emerald-800 border border-emerald-100 dark:border-emerald-700 flex items-center justify-center text-3xl text-emerald-600 dark:text-emerald-400 mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                            <i class='bx bx-user-pin'></i>
                        </div>
                        <h3 class="text-xl font-black text-emerald-900 dark:text-white mb-3 tracking-tight">Akun & Keamanan</h3>
                        <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40 leading-relaxed mb-6">
                            Lupa password, ubah data diri, verifikasi email, dan perlindungan privasi.
                        </p>
                        <span class="text-[10px] font-black uppercase tracking-[0.2em] text-emerald-500 flex items-center gap-2">
                            Lihat Topik <i class='bx bx-right-arrow-alt text-lg'></i>
                        </span>
                    </a>
        
                    <a href="#" class="group p-10 bg-emerald-50/50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800/50 hover:bg-white dark:hover:bg-emerald-900/30 hover:shadow-2xl hover:shadow-emerald-900/10 transition-all duration-300">
                        <div class="w-14 h-14 bg-white dark:bg-emerald-800 border border-emerald-100 dark:border-emerald-700 flex items-center justify-center text-3xl text-emerald-600 dark:text-emerald-400 mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                            <i class='bx bx-shield'></i>
                        </div>
                        <h3 class="text-xl font-black text-emerald-900 dark:text-white mb-3 tracking-tight">Garansi & Komplain</h3>
                        <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40 leading-relaxed mb-6">
                            Prosedur klaim garansi tanaman mati, produk rusak, atau barang tidak sesuai.
                        </p>
                        <span class="text-[10px] font-black uppercase tracking-[0.2em] text-emerald-500 flex items-center gap-2">
                            Lihat Topik <i class='bx bx-right-arrow-alt text-lg'></i>
                        </span>
                    </a>
        
                    <a href="#" class="group p-10 bg-emerald-50/50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800/50 hover:bg-white dark:hover:bg-emerald-900/30 hover:shadow-2xl hover:shadow-emerald-900/10 transition-all duration-300">
                        <div class="w-14 h-14 bg-white dark:bg-emerald-800 border border-emerald-100 dark:border-emerald-700 flex items-center justify-center text-3xl text-emerald-600 dark:text-emerald-400 mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                            <i class='bx bx-spa'></i>
                        </div>
                        <h3 class="text-xl font-black text-emerald-900 dark:text-white mb-3 tracking-tight">Panduan Merawat</h3>
                        <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40 leading-relaxed mb-6">
                            Tips botani, jadwal penyiraman, kebutuhan cahaya, dan cara lapor tanaman sakit.
                        </p>
                        <span class="text-[10px] font-black uppercase tracking-[0.2em] text-emerald-500 flex items-center gap-2">
                            Lihat Topik <i class='bx bx-right-arrow-alt text-lg'></i>
                        </span>
                    </a>
        
                    <a href="#" class="group p-10 bg-emerald-50/50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800/50 hover:bg-white dark:hover:bg-emerald-900/30 hover:shadow-2xl hover:shadow-emerald-900/10 transition-all duration-300">
                        <div class="w-14 h-14 bg-white dark:bg-emerald-800 border border-emerald-100 dark:border-emerald-700 flex items-center justify-center text-3xl text-emerald-600 dark:text-emerald-400 mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                            <i class='bx bx-store'></i>
                        </div>
                        <h3 class="text-xl font-black text-emerald-900 dark:text-white mb-3 tracking-tight">Partnership & B2B</h3>
                        <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40 leading-relaxed mb-6">
                            Kerja sama pengadaan tanaman kantor, reseller, dan kemitraan strategis lainnya.
                        </p>
                        <span class="text-[10px] font-black uppercase tracking-[0.2em] text-emerald-500 flex items-center gap-2">
                            Lihat Topik <i class='bx bx-right-arrow-alt text-lg'></i>
                        </span>
                    </a>
        
                </div>
            </div>
        </section>
        
        <section id="shipping-help" class="py-20 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                
                <div class="flex items-start gap-4 mb-12">
                    <span class="text-4xl md:text-5xl font-black text-emerald-100 dark:text-emerald-900/50 leading-none">01.</span>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase mb-2">
                            Pesanan & Pengiriman
                        </h2>
                        <div class="w-20 h-1 bg-emerald-500"></div>
                    </div>
                </div>
        
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-px bg-emerald-100 dark:bg-emerald-800/50 border border-emerald-100 dark:border-emerald-800/50">
                    
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Bagaimana cara melacak status pengiriman?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Nomor resi akan otomatis dikirimkan via email setelah paket diserahkan ke kurir. Anda juga bisa memantau real-time di <span class="text-emerald-600 dark:text-emerald-400 font-bold">Akun > Riwayat Pesanan</span>.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Berapa lama estimasi tanaman sampai?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Pengiriman dalam kota memakan waktu 1-2 hari. Untuk luar kota/pulau, kami menggunakan layanan ekspedisi khusus tanaman dengan estimasi 3-5 hari kerja agar tanaman tetap segar.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Apakah packing aman untuk perjalanan jauh?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Kami menggunakan proteksi berlapis: penyangga bambu, media tanam terkunci, dan kardus *double-wall*. Tanaman didesain tetap tegak meski boks terbalik.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Bisa ganti alamat setelah checkout?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Perubahan alamat hanya bisa dilakukan maksimal 2 jam setelah pemesanan, selama status belum "Diproses". Silakan hubungi admin via chat secepatnya.
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section id="payment-help" class="py-20 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                
                <div class="flex items-start gap-4 mb-12">
                    <span class="text-4xl md:text-5xl font-black text-emerald-100 dark:text-emerald-900/50 leading-none">02.</span>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase mb-2">
                            Pembayaran & Promo
                        </h2>
                        <div class="w-20 h-1 bg-emerald-500"></div>
                    </div>
                </div>
        
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-px bg-emerald-100 dark:bg-emerald-800/50 border border-emerald-100 dark:border-emerald-800/50">
                    
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Apa saja metode pembayaran yang tersedia?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Kami menerima transfer bank (VA), kartu kredit, serta dompet digital seperti GoPay, OVO, dan ShopeePay untuk kemudahan transaksi Anda.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Mengapa kode promo saya tidak bisa digunakan?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Pastikan pesanan Anda memenuhi syarat minimum belanja dan masa berlaku promo belum berakhir. Beberapa kode hanya berlaku untuk tanaman kategori tertentu.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Berapa lama proses verifikasi pembayaran manual?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Untuk Virtual Account dan E-Wallet, verifikasi terjadi secara instan. Untuk transfer bank manual, tim kami membutuhkan waktu maksimal 1x24 jam untuk pengecekan.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Bagaimana prosedur pengembalian dana (refund)?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Refund akan diproses jika pesanan dibatalkan sesuai kebijakan. Dana akan kembali ke metode pembayaran asal dalam 3-7 hari kerja tergantung kebijakan bank/provider.
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section id="account-help" class="py-20 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                
                <div class="flex items-start gap-4 mb-12">
                    <span class="text-4xl md:text-5xl font-black text-emerald-100 dark:text-emerald-900/50 leading-none">03.</span>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase mb-2">
                            Akun & Keamanan
                        </h2>
                        <div class="w-20 h-1 bg-emerald-500"></div>
                    </div>
                </div>
        
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-px bg-emerald-100 dark:bg-emerald-800/50 border border-emerald-100 dark:border-emerald-800/50">
                    
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Bagaimana jika saya lupa password akun saya?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Klik "Lupa Password" pada halaman login. Kami akan mengirimkan instruksi pemulihan melalui email terdaftar Anda dalam hitungan detik.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Apakah data kartu kredit saya aman disimpan?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            NexusEco tidak menyimpan data kartu secara langsung. Semua transaksi diproses melalui *payment gateway* terenkripsi standar internasional (PCI-DSS).
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Bagaimana cara menghapus akun secara permanen?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Anda dapat mengajukan penghapusan akun melalui halaman <span class="font-bold text-emerald-600 dark:text-emerald-400">Profil > Pengaturan Akun</span>. Harap dicatat bahwa riwayat pesanan juga akan terhapus.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Mengapa saya tidak menerima email verifikasi?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Coba periksa folder Spam atau Promotion. Jika tetap tidak ada, pastikan penulisan email sudah benar atau coba kirim ulang melalui menu Profil.
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section id="warranty-help" class="py-20 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                
                <div class="flex items-start gap-4 mb-12">
                    <span class="text-4xl md:text-5xl font-black text-emerald-100 dark:text-emerald-900/50 leading-none">04.</span>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase mb-2">
                            Garansi & Komplain
                        </h2>
                        <div class="w-20 h-1 bg-emerald-500"></div>
                    </div>
                </div>
        
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-px bg-emerald-100 dark:bg-emerald-800/50 border border-emerald-100 dark:border-emerald-800/50">
                    
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Apa yang harus saya lakukan jika tanaman layu saat sampai?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Tanaman mungkin mengalami stres perjalanan. Segera beri air dan letakkan di tempat teduh. Jika dalam 24 jam kondisi memburuk/mati, Anda bisa mengajukan klaim garansi.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Apa syarat untuk klaim garansi tanaman mati?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Wajib melampirkan video *unboxing* tanpa terputus dan foto kondisi tanaman maksimal 2x24 jam setelah status paket diterima. Kami akan kirim tanaman baru atau refund.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Bagaimana jika produk yang dikirim tidak sesuai (salah jenis)?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Jangan khawatir, biaya kirim balik dan pengiriman ulang sepenuhnya tanggung jawab kami. Segera hubungi tim support melalui fitur chat di aplikasi/web.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Berapa lama proses klaim hingga disetujui?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Tim Quality Control kami akan meninjau laporan Anda dalam waktu maksimal 1x24 jam kerja setelah formulir komplain kami terima secara lengkap.
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section id="care-help" class="py-20 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                
                <div class="flex items-start gap-4 mb-12">
                    <span class="text-4xl md:text-5xl font-black text-emerald-100 dark:text-emerald-900/50 leading-none">05.</span>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase mb-2">
                            Panduan Merawat
                        </h2>
                        <div class="w-20 h-1 bg-emerald-500"></div>
                    </div>
                </div>
        
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-px bg-emerald-100 dark:bg-emerald-800/50 border border-emerald-100 dark:border-emerald-800/50">
                    
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Apa yang harus dilakukan saat tanaman baru tiba?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Jangan langsung ganti pot atau jemur di matahari terik. Beri air secukupnya, dan letakkan di tempat teduh selama 3-7 hari untuk masa aklimatisasi.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Seberapa sering saya harus menyiram tanaman saya?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Tergantung jenisnya. Gunakan metode "Finger Test": tusuk jari ke media tanam sedalam 2cm. Jika terasa kering, baru lakukan penyiraman hingga air keluar dari lubang pot.
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section id="partnership-help" class="py-20 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                
                <div class="flex items-start gap-4 mb-12">
                    <span class="text-4xl md:text-5xl font-black text-emerald-100 dark:text-emerald-900/50 leading-none">06.</span>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase mb-2">
                            Partnership & B2B
                        </h2>
                        <div class="w-20 h-1 bg-emerald-500"></div>
                    </div>
                </div>
        
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-px bg-emerald-100 dark:bg-emerald-800/50 border border-emerald-100 dark:border-emerald-800/50">
                    
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Apakah tersedia harga khusus untuk pembelian grosir?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Tentu. Kami menyediakan skema harga B2B untuk kebutuhan dekorasi kantor, kafe, atau reseller dengan minimum pembelian tertentu.
                        </div>
                    </div>
        
                    <div class="bg-white dark:bg-organic-dark p-8 group hover:bg-emerald-50/50 dark:hover:bg-emerald-900/10 transition-colors">
                        <h4 class="font-bold text-emerald-900 dark:text-white mb-4 flex gap-3">
                            <span class="text-emerald-500">Q:</span> 
                            Bagaimana cara menjadi mitra supplier NexusEco?
                        </h4>
                        <div class="pl-7 text-sm text-emerald-800/60 dark:text-emerald-100/40 leading-relaxed">
                            Kami terbuka bagi petani lokal yang memiliki standar kualitas tanaman organik yang sama. Silakan kirimkan profil kebun Anda ke email partnership@nexuseco.com.
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section class="py-24 bg-emerald-50 dark:bg-black/20 transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="relative bg-white dark:bg-organic-dark border border-emerald-100 dark:border-emerald-800/50 p-8 md:p-16 overflow-hidden shadow-2xl shadow-emerald-900/5">
                    
                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/5 -translate-y-16 translate-x-16 rotate-45"></div>
                    
                    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-10">
                        <div class="text-center lg:text-left max-w-2xl">
                            <span class="text-[10px] font-black uppercase tracking-[0.3em] text-emerald-500 mb-4 block">Still Need Guidance?</span>
                            <h2 class="text-3xl md:text-5xl font-black text-emerald-900 dark:text-white tracking-tighter leading-tight mb-6">
                                Masalah belum <span class="text-emerald-600/20 dark:text-emerald-500/20 outline-text">Terselesaikan?</span>
                            </h2>
                            <p class="text-emerald-800/60 dark:text-emerald-100/40 text-sm md:text-base leading-relaxed">
                                Jika FAQ di atas belum menjawab keraguan Anda, tim ahli botani dan layanan pelanggan kami siap membantu secara personal melalui halaman bantuan langsung.
                            </p>
                        </div>
        
                        <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
                            <a href="contact.php" class="px-10 py-5 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 font-black text-xs uppercase tracking-[0.2em] text-center hover:bg-emerald-800 dark:hover:bg-emerald-400 transition-all active:scale-95 shadow-xl shadow-emerald-500/10">
                                Hubungi Kami Sekarang
                            </a>
                        </div>
                    </div>
        
                    <div class="absolute bottom-4 left-8 hidden md:block">
                        <p class="text-[8px] font-black text-emerald-900/10 dark:text-white/5 uppercase tracking-[1em]">Direct Support NexusEco</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include './../components/footer_main.php'; ?>
</body>

</html>
