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

        <section class="relative bg-white dark:bg-organic-dark pt-32 pb-20 overflow-hidden transition-colors duration-300 border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="absolute top-0 right-0 w-full h-full pointer-events-none">
                <div class="absolute -top-10 -right-20 text-[200px] font-black text-emerald-500/5 italic leading-none select-none uppercase">
                    Help
                </div>
            </div>
        
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="flex flex-col items-center text-center mb-16">
                    <nav class="flex items-center gap-2 text-emerald-500 text-[10px] font-black uppercase tracking-[0.4em] mb-6">
                        <span class="opacity-50 italic">Support Center</span>
                        <i class='bx bx-chevron-right text-sm'></i>
                        <span>FAQ</span>
                    </nav>
        
                    <h1 class="text-5xl md:text-8xl font-black text-emerald-900 dark:text-white tracking-tighter uppercase italic leading-[0.8] mb-8">
                        Ada Yang Bisa <br> <span class="text-emerald-500">Kami Bantu?</span>
                    </h1>
        
                    <p class="max-w-2xl text-sm md:text-base text-emerald-900/50 dark:text-white/40 font-medium leading-relaxed">
                        Cari jawaban cepat untuk pertanyaan yang paling sering diajukan mengenai perawatan tanaman, pengiriman, hingga sistem pembayaran di NexusEco.
                    </p>
                </div>
        
                <div class="max-w-3xl mx-auto relative group">
                    <div class="absolute -inset-1 bg-emerald-500/20 rounded-none blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative flex items-center bg-white dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-800 p-2 shadow-2xl">
                        <div class="pl-4 pr-2">
                            <i class='bx bx-search text-2xl text-emerald-500'></i>
                        </div>
                        <input type="text" placeholder="Cari pertanyaan... (misal: pengiriman ke luar jawa)" 
                            class="w-full py-4 px-4 bg-transparent border-none focus:ring-0 text-emerald-900 dark:text-white font-medium text-sm">
                        <button class="hidden md:block bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 font-black text-[10px] uppercase tracking-widest px-8 py-4">
                            Cari
                        </button>
                    </div>
                </div>
        
                <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-4 border-t border-emerald-50 dark:border-emerald-800/50 pt-10">
                    <a href="#produk" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500 transition-colors">01.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Produk & Stok</span>
                    </a>
                    <a href="#pengiriman" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500">02.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Pengiriman</span>
                    </a>
                    <a href="#pembayaran" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500">03.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Pembayaran</span>
                    </a>
                    <a href="#perawatan" class="group flex items-center gap-3">
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white/30 group-hover:text-emerald-500">04.</span>
                        <span class="text-[10px] font-black text-emerald-900/40 dark:text-white/20 uppercase tracking-widest group-hover:text-emerald-500">Tips Perawatan</span>
                    </a>
                </div>
            </div>
        </section>
        
        <section id="produk" class="py-10 bg-white dark:bg-organic-dark transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-4xl mx-auto px-4 sm:px-6">
                
                <div class="flex items-center gap-4 mb-12">
                    <span class="text-4xl font-black text-emerald-500/20 italic">01.</span>
                    <h2 class="text-2xl font-black text-emerald-900 dark:text-white uppercase tracking-tighter italic">Produk & <br> Layanan Umum</h2>
                </div>
        
                <div class="space-y-4">
                    
                    <details class="group border border-emerald-50 dark:border-emerald-800/50 bg-gray-50/50 dark:bg-emerald-900/5 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Apakah tanaman yang dikirim selalu sama dengan foto?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Setiap tanaman adalah makhluk hidup yang unik. Kami menjamin <span class="font-bold text-emerald-600">spesies, ukuran, dan jumlah daun</span> akan mendekati foto produk. Namun, bentuk percabangan dan corak daun mungkin sedikit berbeda secara alami.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-50 dark:border-emerald-800/50 bg-gray-50/50 dark:bg-emerald-900/5 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Apakah pot sudah termasuk dalam pembelian?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Standar pengiriman kami menggunakan <span class="font-bold">Pot Plastik Hitam/Polibag</span>. Jika Anda menginginkan pot terakota atau keramik seperti di foto, Anda bisa menambahkannya melalui kategori <span class="italic text-emerald-500">Accessories</span>.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-50 dark:border-emerald-800/50 bg-gray-50/50 dark:bg-emerald-900/5 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Bagaimana jika tanaman mati saat sampai?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Kami memberikan <span class="font-black text-rose-500 underline decoration-2 underline-offset-4">Garansi Live Arrival</span>. Jika tanaman mati total saat dibuka, silakan hubungi kami dengan bukti <span class="font-bold">Video Unboxing</span> maksimal 12 jam setelah paket diterima.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-50 dark:border-emerald-800/50 bg-gray-50/50 dark:bg-emerald-900/5 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Apakah saya bisa mengubah alamat pengiriman?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Perubahan alamat hanya bisa dilakukan <span class="font-bold underline">sebelum pesanan diproses</span>. Jika status sudah berubah menjadi "Shipped", maka alamat tidak dapat diubah kembali.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-50 dark:border-emerald-800/50 bg-gray-50/50 dark:bg-emerald-900/5 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Apakah tanaman hias NexusEco aman untuk hewan peliharaan?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Beberapa jenis tanaman hias (seperti Philodendron) mungkin beracun bagi anjing atau kucing. Silakan cek filter <span class="font-black text-emerald-500">"Pet Friendly"</span> di halaman produk kami untuk mencari tanaman yang aman.
                        </p>
                    </details>
        
                </div>
            </div>
        </section>
        
        <section id="pengiriman" class="py-10 bg-gray-50 dark:bg-emerald-950/5 transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-4xl mx-auto px-4 sm:px-6">
                
                <div class="flex items-center gap-4 mb-12">
                    <span class="text-4xl font-black text-emerald-500/20 italic">02.</span>
                    <h2 class="text-2xl font-black text-emerald-900 dark:text-white uppercase tracking-tighter italic">Logistik & <br> Keamanan Paket</h2>
                </div>
        
                <div class="space-y-4">
                    
                    <details class="group border border-emerald-100 dark:border-emerald-800/50 bg-white dark:bg-emerald-900/10 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Bagaimana cara NexusEco mengemas tanaman agar tidak rusak?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Kami menggunakan metode <span class="font-black text-emerald-600 uppercase">Double-Wall Box</span>. Tanaman dibalut tisu khusus untuk menjaga kelembapan, difiksasi dengan lakban agar tidak goyang, dan ditambah penyangga bambu/kayu jika tanaman cukup tinggi.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-100 dark:border-emerald-800/50 bg-white dark:bg-emerald-900/10 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Ekspedisi apa saja yang tersedia?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Kami bekerja sama dengan JNE, J&T, dan SiCepat. Untuk wilayah <span class="font-bold">Bandung & Sekitarnya</span>, tersedia pengiriman instan via <span class="font-bold">GrabExpress/GoSend</span> agar tanaman sampai di hari yang sama tanpa stress perjalanan.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-100 dark:border-emerald-800/50 bg-white dark:bg-emerald-900/10 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Apakah tanaman dikirim dengan media tanam?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Untuk menekan ongkos kirim dan menjaga keamanan, media tanam akan dikurangi sekitar <span class="font-bold text-emerald-600">50-70% (disisakan di area akar)</span>. Kami membungkus akar dengan plastik wrap agar tetap lembap selama perjalanan.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-100 dark:border-emerald-800/50 bg-white dark:bg-emerald-900/10 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Apakah saya mendapatkan nomor resi pelacakan?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Tentu. Segera setelah paket diserahkan ke kurir, nomor resi akan otomatis dikirimkan ke <span class="font-bold">Email Anda</span> dan juga dapat dilihat di dashboard <span class="italic text-emerald-500">Order History</span>.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-100 dark:border-emerald-800/50 bg-white dark:bg-emerald-900/10 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Mengapa paket saya belum sampai melebihi estimasi?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Keterlambatan bisa terjadi karena overload ekspedisi atau cuaca buruk. Jika paket terlambat lebih dari <span class="font-black text-rose-500 italic">3 hari</span> dari estimasi, segera hubungi tim CS kami agar kami bantu proses <span class="font-bold">Follow-Up Prioritas</span> ke pihak kurir.
                        </p>
                    </details>
        
                </div>
            </div>
        </section>
        
        <section id="pembayaran" class="py-10 bg-white dark:bg-organic-dark transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-4xl mx-auto px-4 sm:px-6">
                
                <div class="flex items-center gap-4 mb-12">
                    <span class="text-4xl font-black text-emerald-500/20 italic">03.</span>
                    <h2 class="text-2xl font-black text-emerald-900 dark:text-white uppercase tracking-tighter italic">Sistem <br> Pembayaran</h2>
                </div>
        
                <div class="space-y-4">
                    <details class="group border border-emerald-50 dark:border-emerald-800/50 bg-gray-50/50 dark:bg-emerald-900/5 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Metode pembayaran apa saja yang tersedia?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Kami menerima transfer bank (BCA, Mandiri, BNI), E-Wallet (Gopay, OVO, Dana), hingga kartu kredit. Semua transaksi diproses melalui <span class="font-bold">Payment Gateway Aman</span>.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-50 dark:border-emerald-800/50 bg-gray-50/50 dark:bg-emerald-900/5 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Apakah saya perlu konfirmasi manual setelah bayar?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Tidak perlu. Sistem kami akan melakukan <span class="font-black text-emerald-600 uppercase">verifikasi otomatis</span> dalam waktu kurang dari 5 menit setelah dana diterima.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-50 dark:border-emerald-800/50 bg-gray-50/50 dark:bg-emerald-900/5 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Bisakah saya membatalkan pesanan yang sudah dibayar?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Pembatalan hanya bisa dilakukan jika status pesanan masih <span class="italic text-rose-500 italic">"Pending"</span>. Jika sudah masuk tahap <span class="font-bold text-emerald-900 dark:text-white">"Processing"</span> (karantina tanaman), pesanan tidak dapat dibatalkan.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-50 dark:border-emerald-800/50 bg-gray-50/50 dark:bg-emerald-900/5 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Bagaimana cara menggunakan kode promo?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Anda bisa memasukkan kode voucher pada kolom <span class="font-bold uppercase tracking-tighter border-b border-emerald-500 text-emerald-900 dark:text-white">Discount Code</span> di halaman ringkasan belanja sebelum melakukan pembayaran.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-50 dark:border-emerald-800/50 bg-gray-50/50 dark:bg-emerald-900/5 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Apakah tersedia layanan bayar di tempat (COD)?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Maaf, saat ini NexusEco tidak melayani COD untuk menjaga komitmen keseriusan pemesanan karena tanaman adalah mahluk hidup yang tidak boleh terlalu lama di perjalanan jika terjadi retur.
                        </p>
                    </details>
                </div>
            </div>
        </section>
        
        <section id="perawatan" class="py-10 bg-gray-50 dark:bg-emerald-950/5 transition-colors border-b border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-4xl mx-auto px-4 sm:px-6">
                
                <div class="flex items-center gap-4 mb-12">
                    <span class="text-4xl font-black text-emerald-500/20 italic">04.</span>
                    <h2 class="text-2xl font-black text-emerald-900 dark:text-white uppercase tracking-tighter italic">Tips <br> Perawatan Tanaman</h2>
                </div>
        
                <div class="space-y-4">
                    <details class="group border border-emerald-100 dark:border-emerald-800/50 bg-white dark:bg-emerald-900/10 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Kapan waktu terbaik untuk menyiram tanaman?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Sangat disarankan menyiram pada <span class="font-bold text-emerald-600">Pagi Hari (jam 06.00 - 08.00)</span> agar tanaman memiliki cadangan air untuk proses fotosintesis di siang hari.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-100 dark:border-emerald-800/50 bg-white dark:bg-emerald-900/10 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Mengapa daun tanaman saya menguning?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Penyebab paling umum adalah <span class="font-bold underline decoration-rose-500">Overwatering</span> (terlalu banyak air) atau drainase pot yang tersumbat. Pastikan 2cm lapisan atas media tanam sudah kering sebelum menyiram kembali.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-100 dark:border-emerald-800/50 bg-white dark:bg-emerald-900/10 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Apakah semua tanaman butuh sinar matahari langsung?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Tidak semua. Tanaman Indoor seperti Monstera atau Philodendron lebih menyukai <span class="font-black italic">Bright Indirect Light</span> (terang tapi tidak terpapar matahari langsung) agar daun tidak terbakar.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-100 dark:border-emerald-800/50 bg-white dark:bg-emerald-900/10 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Berapa kali saya harus memberi pupuk?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Untuk pertumbuhan optimal, berikan pupuk NPK seimbang setiap <span class="font-bold">2-4 minggu sekali</span>. Pastikan media tanam dalam keadaan lembap sebelum memupuk untuk menghindari <span class="italic text-rose-500">root burn</span>.
                        </p>
                    </details>
        
                    <details class="group border border-emerald-100 dark:border-emerald-800/50 bg-white dark:bg-emerald-900/10 p-6 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex items-center justify-between cursor-pointer">
                            <h3 class="text-sm font-black text-emerald-900 dark:text-white uppercase tracking-wide">Kapan saya harus memindahkan tanaman ke pot lebih besar?</h3>
                            <span class="text-emerald-500 transition duration-300 group-open:-rotate-180">
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-sm leading-relaxed text-emerald-900/60 dark:text-white/40">
                            Waktunya repotting adalah saat <span class="font-bold text-emerald-600">akar mulai keluar dari lubang bawah pot</span> atau saat pertumbuhan tanaman terlihat melambat karena media tanam sudah habis nutrisinya (biasanya setiap 1 tahun).
                        </p>
                    </details>
                </div>
            </div>
        </section>
        
        <section class="py-24 bg-white dark:bg-organic-dark transition-colors border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="bg-emerald-900 dark:bg-emerald-500 p-8 md:p-16 relative overflow-hidden shadow-[30px_30px_0px_0px_rgba(16,185,129,0.1)]">
                    
                    <i class='bx bx-support absolute -bottom-10 -right-10 text-[200px] text-white/5 dark:text-emerald-950/5 rotate-12'></i>
        
                    <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-12">
                        <div class="max-w-xl">
                            <h2 class="text-3xl md:text-5xl font-black text-white dark:text-emerald-950 uppercase italic tracking-tighter leading-[0.9] mb-6">
                                Belum Menemukan <br> <span class="opacity-50">Jawaban Anda?</span>
                            </h2>
                            <p class="text-sm md:text-base text-emerald-100 dark:text-emerald-900/70 font-medium">
                                Tim support NexusEco siap membantu Anda secara personal. Kami biasanya membalas dalam waktu kurang dari 2 jam selama jam operasional.
                            </p>
                        </div>
        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#" class="flex items-center justify-center gap-3 bg-white dark:bg-emerald-950 px-8 py-5 group hover:bg-emerald-50 transition-all">
                                <i class='bx bxl-whatsapp text-2xl text-emerald-600'></i>
                                <div class="flex flex-col items-start">
                                    <span class="text-[8px] font-black text-emerald-900/40 dark:text-white/40 uppercase tracking-widest">Fast Response</span>
                                    <span class="text-[11px] font-black text-emerald-900 dark:text-white uppercase tracking-wider">WhatsApp Kami</span>
                                </div>
                            </a>
        
                            <a href="mailto:support@nexuseco.com" class="flex items-center justify-center gap-3 border-2 border-white/30 dark:border-emerald-950/30 px-8 py-5 group hover:border-white dark:hover:border-emerald-950 transition-all">
                                <i class='bx bx-envelope text-2xl text-white dark:text-emerald-950'></i>
                                <div class="flex flex-col items-start">
                                    <span class="text-[8px] font-black text-white/40 dark:text-emerald-950/40 uppercase tracking-widest">Official Support</span>
                                    <span class="text-[11px] font-black text-white dark:text-emerald-950 uppercase tracking-wider">Kirim Email</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        
                <div class="mt-20 flex flex-col items-center">
                    <a href="index.php" class="group flex items-center gap-4">
                        <i class='bx bx-left-arrow-alt text-2xl text-emerald-500 group-hover:-translate-x-2 transition-transform'></i>
                        <span class="text-[10px] font-black text-emerald-900 dark:text-white uppercase tracking-[0.4em]">Kembali Menjelajahi Nursery</span>
                    </a>
                    
                    <div class="mt-12 opacity-10 dark:opacity-20 flex items-center gap-4 select-none">
                        <span class="text-xs font-black uppercase tracking-[1em]">NexusEco</span>
                        <div class="h-px w-12 bg-emerald-900 dark:bg-white"></div>
                        <span class="text-xs font-black uppercase tracking-[1em]">Support</span>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include './../components/footer_main.php'; ?>
</body>

</html>
